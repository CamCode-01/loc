<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categorie;


class CategorieController extends Controller
{
    public function ajoutercategorie(){
        return view('admin.ajoutercategorie');

    }
    public function sauvercategorie(Request $request){
        $this->validate($request,['nom_categorie'=>'required']);
        $categorie = new Categorie();
        $categorie->nom_categorie = $request->input('nom_categorie');
        $categorie->save();
        return redirect('/ajoutercategorie')->with('status','la catégorie '.$categorie->nom_categorie.' a été ajoutée avec succes');
    }
    public function categories(){
        $categories=Categorie::get();
        return view('admin.categories')->with('categories',$categories);

   }
   public function edit_categorie($id){
    $categorie = Categorie::find($id);
    return view('admin.editcategorie')->with('categorie',$categorie);
   }
   public function modifiercategorie(Request$request){

    $this->validate($request,['nom_categorie'=>'required']);
    $categorie = Categorie::find($request->input('id'));

    $categorie->nom_categorie = $request->input('nom_categorie');
    $categorie->update();
    return redirect('/categories')->with('status','la catégorie '.$categorie->nom_categorie.' a été modifiée avec succes');


   }
}