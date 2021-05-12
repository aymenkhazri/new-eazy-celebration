<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie_evenement ;
use App\Models\Categorie_service;

class Accueil0Controller extends Controller
{



    public function accueil()
    {
        $categorie_services = Categorie_service::all();
        $categorie_evenements=Categorie_evenement::all();
        return view('accueil0.accueil',compact('categorie_evenements','categorie_services'));
       
    }

    public function contact()
    {
        return view('accueil0.contact');
    }

    public function evenements()
    {

        $categorie_evenements=Categorie_evenement::all();
        return view('accueil0.evenements',compact('categorie_evenements'));
    }

    public function propos()
    {
        return view('accueil0.propos');
    }

    public function services()
    {

        $categorie_services = Categorie_service::all();
        return view('accueil0.services',compact('categorie_services'));
    }




    

  

}
 
