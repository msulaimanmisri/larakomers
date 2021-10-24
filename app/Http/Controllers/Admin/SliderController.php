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
            'link' => 'required'
        ]);

        $image = $request->file('image');
        $sliderImage = $image->storeAs('public/sliders', $image->hashName());

        $slider = Slider::create([
            'image' => $request->hashName(),
            'link' => $request->link
        ]);

        return redirect()->route('admin.slider.index')->with('success', 'Data has been added!');
    }
}