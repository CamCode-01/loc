<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;
use App\Models\Slider;
use App\Models\Categorie;

class ClientController extends Controller
{
    public function home(){
        $sliders = Slider::where('statut',1)->get();
        $cars = Car::where('statut',1)->get();
        return view('client.home')->with('sliders',$sliders)->with('cars',$cars);
    }
    public function apropos(){
        return view('client.apropos');
    }

    public function clcars(){
        $categories = Categorie::get();
        $cars = Car::where('statut',1)->get();
        
        return view('client.clcars')->with('categories',$categories)->with('cars',$cars);
    }

    public function select_par_cat($name){
        $categories = Categorie::get();
         $cars = Car::where('categorie_car',$name)->where('statut',1)->get();
         return view('client.clcars')->with('cars',$cars)->with('categories',$categories);
    }

    public function page(){
        return view('client.pages');
    }

    public function paiement(){
        return view('client.paiement');
    }

    public function contacts(){
        return view('client.contacts');
    }

    public function detail(){
        return view('client.details');
    }

    public function team(){
        return view('client.team');
    }

    public function services(){
        return view('client.services');
    }
    public function details(){
        return view('client.details');
    }
}