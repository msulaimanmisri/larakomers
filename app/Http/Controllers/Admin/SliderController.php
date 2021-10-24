<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('slider.index', compact('sliders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2000'],
            'link' => 'required',
        ]);

        // Image
        $sliderImageName =  'larakomers-' . $request->image->getClientOriginalName();
        $request->image->move(public_path('storage/sliders'), $sliderImageName);


        $slider = Slider::create([
            'image' => $sliderImageName,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.slider.index')->with('success', 'Data has been added!');
    }

    public function show($id)
    {
        $slider = Slider::findOrFail($id);
        return view('slider.show', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2000'],
            'link' => 'required',
        ]);

        // Image
        $sliderImageName =  'larakomers-' . $request->image->getClientOriginalName();
        $request->image->move(public_path('storage/sliders'), $sliderImageName);


        $slider = Slider::where('id', $id)->update([
            'image' => $sliderImageName,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.slider.index')->with('success', 'Data has been added!');
    }
}