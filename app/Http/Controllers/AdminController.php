<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use App\Models\Demande;
use App\Models\Avertissement;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
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


    public function destroy(Request $request)
    {
      
  

        $annonces = Annonce::findOrFail($request->annonce_id);
        $annonces->delete();

      
        
        return redirect()->route('annonce.index')
                        ->with('success','Annonce Supprimé avec succès');
    }
    
    
    public function avertissement(Request $request ,$id)
    {
        $request->validate([
          
            'avertissement' => 'required',
         
            
          
        ]);
  
        $avertissements = Avertissement::create([
            'emetteur_id' =>Auth::user()->id,
            'accepteur_id' =>$id ,
            'etat' =>'annonce' ,
            'avertissement' => $request->avertissement,
          
        ]);
    

        return redirect()->route('annonce.index')
                        ->with('success','Client est averti avec succès.');
    }





    public function bannir0($id)
    {

        
       
        $users=User::find($id);
       
        $users->isban = 0;
        $users->save() ;
      

        return redirect()->route('annonce.index')
                        ->with('success','désactiver la banni avec succès.');
    }

    public function bannir1($id)
    {

      
       
        $users=User::find($id);
 
        $users->isban = 1 ;
        $users->save() ;
    

        return redirect()->route('annonce.index')
                        ->with('success','Client  a été banni avec succès.');
    }




}
