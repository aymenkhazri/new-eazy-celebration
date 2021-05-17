<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Categorie_evenement ;
use App\Models\Categorie_service;
use App\Models\User;
class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('client')){

            $categorie_services = Categorie_service::all();
            $categorie_evenements=Categorie_evenement::all(); 

            return view('clients.accueil',compact('categorie_evenements','categorie_services'));

        }elseif(Auth::user()->hasRole('fournisseur')){
            $categorie_services = Categorie_service::all();
            $categorie_evenements=Categorie_evenement::all(); 
            return view('fournisseurs.accueil',compact('categorie_evenements','categorie_services'));

        }elseif(Auth::user()->hasRole('superviseur')){

            $superviseurs=User::join('role_user','users.id','role_user.user_id')
            ->where('role_id',2)
            ->get();
    
            $clients=User::join('role_user','users.id','role_user.user_id')
            ->where('role_id',3)
            ->count();
    
            $fournisseurs=User::join('role_user','users.id','role_user.user_id')
            ->where('role_id',4)
            ->count();

            $annonces = Annonce::latest()
            ->paginate(3);
           


            return view('superviseur.accueil', compact('superviseurs','clients','fournisseurs','annonces')) ;

        }elseif(Auth::user()->hasRole('admin')){

            $superviseurs=User::join('role_user','users.id','role_user.user_id')
            ->where('role_id',2)
            ->get();
    
            $clients=User::join('role_user','users.id','role_user.user_id')
            ->where('role_id',3)
            ->count();
    
            $fournisseurs=User::join('role_user','users.id','role_user.user_id')
            ->where('role_id',4)
            ->count();


            return view('admin.accueil', compact('superviseurs','clients','fournisseurs')) ;

        }

    }

    
}
