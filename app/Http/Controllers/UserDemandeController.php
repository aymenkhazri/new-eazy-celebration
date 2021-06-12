<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use App\Models\Demande;
use App\Models\Avertissement;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserDemandeController extends Controller
{
    public function index()
    {
        
  
        $demandes = Demande::latest()
        ->paginate(4);
            
        return view('superviseur.demande.index',compact('demandes'));
    }



    
    public function avertissement_demande(Request $request )
    {
        $request->validate([
          
            'avertissement' => 'required',
         
            
          
        ]);
  
        $avertissements = Avertissement::create([
            'emetteur_id' =>Auth::user()->id,
            'accepteur_id' =>$request->user_id ,
            'etat' =>'demande' ,
            'avertissement' => $request->avertissement,
          
        ]);

     
    
        return redirect()->route('demandes.index')
                        ->with('success','Fournisseur est averti avec succès.');
    }


    
    public function destroy(Request $request)
    {
      
  

        $demande = Demande::findOrFail($request->annonce_id);
        $demande->delete();

      
        
        return redirect()->route('demandes.index')
                        ->with('success','Offre Supprimé avec succès');
    }

    public function bannir0($id)
    {

        
       
        $users=User::find($id);
       
        $users->isban = 0;
        $users->save() ;
      

        return redirect()->route('demandes.index')
                        ->with('success','désactiver la banni avec succès.');
    }

    public function bannir1($id)
    {

      
       
        $users=User::find($id);
 
        $users->isban = 1 ;
        $users->save() ;
    

        return redirect()->route('demandes.index')
                        ->with('success','Fournisseur  a été banni avec succès.');
    }}
