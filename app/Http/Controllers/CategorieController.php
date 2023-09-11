<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function ajoutercategorie(){
        return view('admin.ajoutercategorie');

    }
    public function sauvercategorie(Request $request){
    }
    public function categories(){
        return view('admin.categories');
    }
}