<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class AdminController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'User Logout');
    }

    //header section satart

    public function headerPart(){
        $header = Header::find('1');
        return view('header.index', compact('header'));
    }

    public function updateHeader(Request $request, $id){
        $header = Header::find($id);

        $header->open_hour =$request->open_hour;
        $header->phone =$request->phone;
        $header->email =$request->email;
        $header->save();

        return redirect()->route('header.part')->with('success', 'Header Update Successfully');

    }

    //header section end


    //slider section Start

    public function allSlider(){
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function addSlider(){
        return view('admin.slider.add_slider');
    }

    public function storeSlider(Request $request){
        $validated = $request->validate([
            'small_title' => 'required',
            'big_title' => 'required',
            'description' => 'required',
            'slider_image' => 'required',
        ]);

        $slider_image = $request->file('slider_image');
        $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
        Image::make($slider_image)->resize(1366,800)->save('images/slider/'.$name_gen);

        $final_image = 'images/slider/'.$name_gen;

        $slider = new Slider();
        $slider->small_title = $request->small_title;
        $slider->big_title = $request->big_title;
        $slider->description = $request->description;
        $slider->slider_image = $final_image;
        $slider->save();

        return redirect()->back()->with('success', 'Slider Added Successfully');
    }

    //slider section end
}
