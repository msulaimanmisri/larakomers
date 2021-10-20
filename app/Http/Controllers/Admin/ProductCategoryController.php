<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCategory = Category::paginate(15);
        return view('product.category.index', compact('productCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:categories'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2000'],
        ]);

        // Upload Image
        $productCategoryImage = $request->file('image');
        $productCategoryImage->storeAs('public/categories', $productCategoryImage->hashName());

        $productCategory = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'image' => $productCategoryImage->hashName(),
        ]);

        if ($productCategory) {
            return view('product.category.index')->with('success', 'Data has been created!');
        } else {
            return view('product.category.index')->with('failed', 'Failed! Data are not store. Please try again');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productCategory = Category::findOrFail($id);
        return view('product.category.show', compact('productCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($productCategory)
    {
        $productCategory = Category::findOrFail($productCategory);
        return view('product.category.edit', compact('productCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $productCategory)
    {
        $request->validate([
            'name' => ['required', 'unique:categories'],
            'slug' => 'required',
        ]);

        $productCategory->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('admin.product-category.index')->with('successUpdate', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productCategory = Category::findOrFail($id);
        $productCategoryImage = Storage::disk('local')->delete('public/categories/' . $productCategory->image);
        $productCategory->delete();

        if ($productCategory) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}