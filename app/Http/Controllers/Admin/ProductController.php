<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create')->with('categories', $categories);
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
            'name' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'weight' => 'required | numeric',
            'price' => 'required | numeric',
            'discount' => 'nullable | numeric',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'category_id' => $request->category_id,
            'content' => $request->content,
            'weight' => $request->weight,
            'price' => $request->price,
            'discount' => $request->discount,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $productCategories = Category::all();
        return view('product.show', compact('product', 'productCategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $product = Product::findOrFail($product);
        return view('product.show', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $id)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'discount' => 'required',
        ]);

        $product = Product::where('id', $id)->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'category_id' => $request->category_id,
            'content' => $request->content,
            'weight' => $request->weight,
            'price' => $request->price,
            'discount' => $request->discount,
        ]);

        return view('product.index')->with('success', 'Product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('successDeleted', 'Data successfully deleted!');
    }
}