<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;


class SliderController extends Controller
{
    public function ajouterslider()
    {
        return view('admin.ajouterslider');
    }
    public function sauverslider(Request $request)
    {
        $this->validate($request, [
            'description1' => 'required',
            'description2' => 'required',
            'slider_image' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('slider_image')) {
            $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('slider_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('slider_image')->storeAs('public/slider_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }


        $slider = new Slider();
        $slider->description1 = $request->input('description1');
        $slider->description2 = $request->input('description2');
        $slider->slider_image = $fileNameToStore;
        $slider->statut = 1;

        $slider->save();

        return redirect('/ajouterslider')->with('statut', 'Le slider a été inséré avec succès!');
    }
    public function sliders()
    {
        $sliders = Slider::get();
        return view('admin.sliders')->with('sliders',$sliders);
    }
}
