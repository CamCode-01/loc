<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function ajoutervoiture()
    {
        return view('admin.ajoutervoiture');
    }
    public function sauvercar(){

    }
    public function cars(){
        return view('admin.cars');
    }
}