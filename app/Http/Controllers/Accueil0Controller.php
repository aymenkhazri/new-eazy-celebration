<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie_evenement ;
use App\Models\Categorie_service;

class Accueil0Controller extends Controller
{
    public function evenement()
    {
        $categorie_evenements=Categorie_evenement::latest()->paginate(15);
        $categorie_services = Categorie_service::latest()->paginate(5);
        return view('accueil0',compact('categorie_evenements','categorie_services')) 
          ->with('i', (request()->input('page', 1) - 1) * 15);
    }


  

}
 
