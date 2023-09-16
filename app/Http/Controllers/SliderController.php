<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;



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
    public function edit_slider($id){
        $slider = Slider::find($id);
        return view('admin.edit_slider')->with('slider',$slider);
    }
    public function modifierslider(Request $request){
        $this->validate($request, [
            'description1' => 'required',
            'description2' => 'required',
            'slider_image' => 'image|nullable|max:1999'
        ]);
        $slider = Slider::find($request->input('id'));
        $slider->description1 = $request->input('description1');
        $slider->description2 = $request->input('description2');

        if ($request->hasFile('slider_image')) {
            $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('slider_image')->getClientOriginalExtension();

            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

            $path = $request->file('slider_image')->storeAs('public/slider_images', $fileNameToStore);
        } 

   
        $slider->update();
        return redirect('/sliders')->with('statut', 'Le slider a été modifiée avec succès');
    }
    public function supprimerslider($id)
    {
        $slider = Slider::find($id);
        if ($slider->slider_image != 'noimage.jpg') {
            storage::delete('public/slider_images/' . $slider->slider_image);

            $slider->delete();
            return redirect('/sliders')->with('statut', 'Le slider a été supprimée avec succès!');
        }
    }
    public function activer_slider($id){
        $slider = Slider::find($id);
        $slider->statut = 1;
        $slider->update();
    
        return redirect('/sliders')->with('statut', 'Le slider a été activée avec succès!');
    
    }
    
    public function desactiver_slider($id){
        $slider = Slider::find($id);
        $slider->statut = 0;
        $slider->update();
    
        return redirect('/sliders')->with('statut', 'Le sliders a été désactivée avec succès!');
    
    }
}
