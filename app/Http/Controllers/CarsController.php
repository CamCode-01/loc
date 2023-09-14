<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;
use App\Models\Categorie;

class CarsController extends Controller
{
    public function ajoutervoiture()
    {
        $categories = Categorie::All()->pluck('nom_categorie',  'nom_categorie');
        return view('admin.ajoutervoiture')->with('categories',$categories);
    }
    public function sauvercar(Request $request){
        $this->validate($request,['car_name'=>'required|unique:cars','car_price'=>'required','categorie_car'=>'required',
        'car_image1'=>'image|nullable|max:1999', 'car_detail'
            ]);





            if ($request->hasFile('car_image1')) {
                $fileNameWithExt = $request->file('car_image1')->getClientOriginalName();

                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

                $extension = $request->file('car_image1')->getClientOriginalExtension();

                $fileNameToStore = $fileName.'_'.time().'.'.$extension;

                $path = $request->file('car_image1')->storeAs('public/car_images',$fileNameToStore);
            }
            else{
                $fileNameToStore = 'noimage.jpg';
            }



        $car = new Car();
        $car->car_name = $request->input('car_name');
        $car->car_price = $request->input('car_price');
        $car->categorie_car = $request->input('categorie_car');
        $car->car_image1 = $fileNameToStore;
        $car->car_detail = $request->input('car_detail');
        $car->statut = 1;
        $car->save();
        return redirect('/ajoutervoiture')->with('statut', 'La voiture '.$car->car_name.' a été ajouté avec succès');

    }
    public function cars(){
        return view('admin.cars');
    }
}