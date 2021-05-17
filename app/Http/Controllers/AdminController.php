<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use App\Models\Demande;

use Illuminate\Http\Request;
use App\Models\User;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
class AdminController extends Controller
{
  
    public function index()
    {
        $annonces = Annonce::latest()
        ->paginate(6);
       
  
        return view('admin.annonce.index',compact('annonces')) 
          ->with('i', (request()->input('page', 1) - 1) * 2);
    }


    
    public function accueil()
    {


        $superviseurs=User::join('role_user','users.id','role_user.user_id')
        ->where('role_id',2)
        ->get();

        $clients=User::join('role_user','users.id','role_user.user_id')
        ->where('role_id',3)
        ->count();

        $fournisseurs=User::join('role_user','users.id','role_user.user_id')
        ->where('role_id',4)
        ->count();
     
        return view('admin.accueil', compact('superviseurs','clients','fournisseurs'));
    }

    public function demande()
    {
        
  
        $demandes = Demande::latest()
        ->paginate(4);
            
        return view('admin.demande.index',compact('demandes'));
    }





    public function filtre_demande($id)
    {
        $annonces=Annonce::find($id);
  
        $demandes = Demande::latest()
             ->where('annonce_id',$annonces->id)
             ->get();
            
        return view('admin.annonce.filtre_demande',compact('demandes'));
    }

}
