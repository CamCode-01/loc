<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;


class CarsController extends Controller
{
    public function ajoutervoiture()
    {
        $categories = Categorie::All()->pluck('nom_categorie',  'nom_categorie');
        return view('admin.ajoutervoiture')->with('categories', $categories);
    }
    public function sauvercar(Request $request)
    {
        $this->validate($request, [
            'car_name' => 'required|unique:cars', 'car_price' => 'required', 'categorie_car' => 'required',
            'afabrication','bvitesse'=>'required','kmetrage'=>'required',
            'car_image1' => 'image|nullable|max:1999','car_image2' => 'image|nullable|max:1999', 'car_detail'
        ]);





        if ($request->hasFile('car_image1')) {
            $fileNameWithExt = $request->file('car_image1')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('car_image1')->getClientOriginalExtension();

            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

            $path = $request->file('car_image1')->storeAs('public/car_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        if ($request->hasFile('car_image2')) {
            $fileNameWithExt = $request->file('car_image2')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('car_image2')->getClientOriginalExtension();

            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

            $path = $request->file('car_image2')->storeAs('public/car_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }



        $car = new Car();
        $car->car_name = $request->input('car_name');
        $car->car_price = $request->input('car_price');
        $car->categorie_car = $request->input('categorie_car');
        $car->afabrication = $request->input('afabrication');
        $car->bvitesse = $request->input('bvitesse');
        $car->kmetrage = $request->input('kmetrage');
        $car->car_image1 = $fileNameToStore;
        $car->car_image2 = $fileNameToStore;
        $car->car_detail = $request->input('car_detail');
        $car->statut = 1;
        $car->save();
        return redirect('/ajoutervoiture')->with('statut', 'La voiture ' . $car->car_name . ' a été ajouté avec succès');
    }
    public function cars()
    {
        $cars = Car::get();
        return view('admin.cars')->with('cars', $cars);
    }
    public function edit_car($id)
    {
        $car = Car::find($id);
        $categories = Categorie::All()->pluck('nom_categorie',  'nom_categorie');
        return view('admin.edit_car')->with('car', $car)->with('categories', $categories);
    }
    public function modifiercar(Request $request)
    {
        $this->validate($request, [
            'car_name' => 'required|unique:cars', 'car_price' => 'required', 'categorie_car' => 'required',
            'afabrication','bvitesse'=>'required','kmetrage'=>'required',
            'car_image1' => 'image|nullable|max:1999','car_image2' => 'image|nullable|max:1999', 'car_detail'
        ]);

        if ($request->hasFile('car_image1')) {
            $fileNameWithExt = $request->file('car_image1')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('car_image1')->getClientOriginalExtension();

            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

            $path = $request->file('car_image1')->storeAs('public/car_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        if ($request->hasFile('car_image2')) {
            $fileNameWithExt = $request->file('car_image2')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('car_image2')->getClientOriginalExtension();

            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

            $path = $request->file('car_image2')->storeAs('public/car_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }


        $car = Car::find($request->input('id'));
        $car->car_name = $request->input('car_name');
        $car->car_price = $request->input('car_price');
        $car->categorie_car = $request->input('categorie_car');
        $car->afabrication = $request->input('afabrication');
        $car->bvitesse = $request->input('bvitesse');
        $car->kmetrage = $request->input('kmetrage');
        $car->car_image1 = $fileNameToStore;
        $car->car_image2 = $fileNameToStore;
        $car->car_detail = $request->input('car_detail');
        $car->statut = 1;
        $car->update();
        return redirect('/cars')->with('statut', 'La voiture ' . $car->car_name . ' a été modifiée avec succès');
    }
    public function supprimervoiture($id)
    {
        $car = Car::find($id);
        if ($car->car_image1 != 'noimage.jpg') {
            storage::delete('public/car_images/' . $car->car_images);

            $car->delete();
            return redirect('/cars')->with('statut', 'La voiture ' . $car->car_name . ' a été supprimée avec succès!');
        }
    }
    public function activer_voiture($id){
        $car = Car::find($id);
        $car->statut = 1;
        $car->update();
    
        return redirect('/cars')->with('statut', 'La voiture '.$car->car_name.' a été activée avec succès!');
    
    }
    
    public function desactiver_voiture($id){
        $car = Car::find($id);
        $car->statut = 0;
        $car->update();
    
        return redirect('/cars')->with('statut', 'La voiture '.$car->car_name.' a été désactivée avec succès!');
    
    }
}