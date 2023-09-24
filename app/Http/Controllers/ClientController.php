<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;
use App\Models\Slider;
use App\Models\Categorie;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



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

    public function voir_details($id){
        $car = Car::find($id);

        print($car);
    }

    public function page(){
        return view('client.pages');
    }

    public function paiement(){
        if(!Session::has('client')){
            return view('client.login');
        }
        return view('client.paiement');
    }

    public function contacts(){
        return view('client.contacts');
    }

    public function team(){
        return view('client.team');
    }

    public function services(){
        return view('client.services');
    }
    public function details($id){
        $car = Car::find($id);
        return view('client.details')->with('car',$car);
    }
    public function creer_compte(Request $request){
        $this->validate($request,['name'=>'required','email'=>'email|required|unique:clients','password'=>'required|min:6']);

        $client = new Client();
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->password = bcrypt($request->input('password')); 
        $client->save();
        return back()->with('statut','Votre compte a été creer avec succès');
}

public function acceder_compte(Request $request){
    $this->validate($request,['email'=>'email|required','password'=>'required']);
    $client = Client::where('email',$request->input('email'))->first();
    if($client){
        if (Hash::check($request->input('password'),$client->password)) {
             Session::put('client',$client);

            return redirect('/clcars');
        }
        else{
            return back()->with('statut','mot de pass ou email incorrect');

        }

    }
    else{
        return back()->with('statut','vous n'."'".'avez pas de compte');
    }

}
public function logout(){
    Session::forget('client');
    return back();
}


    public function login(){
        return view('client.login');
    }
    public function signup(){
        return view('client.signup');
    }
}