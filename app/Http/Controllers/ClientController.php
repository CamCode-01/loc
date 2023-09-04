<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        return view('client.home');
    }
    public function apropos(){
        return view('client.apropos');
    }

    public function cars(){
        return view('client.cars');
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