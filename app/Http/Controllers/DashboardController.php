<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('client')){

            return view('clients.accueil') ;

        }elseif(Auth::user()->hasRole('fournisseur')){

            return view('fournisseurs.accueil') ;

        }elseif(Auth::user()->hasRole('superviseur')){

            return view('superviseur.index') ;

        }elseif(Auth::user()->hasRole('admin')){

            return view('admin.index') ;

        }

    }

    
}
