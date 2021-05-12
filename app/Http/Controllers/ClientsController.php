<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categorie_evenement ;
use App\Models\Categorie_service;
use App\Models\Annonce;
use App\Models\Demande;
use App\Models\User;
use Auth;
use Hash ;
use Session ;
use Illuminate\Support\Facades\DB;
class ClientsController extends Controller
{







       
    public function home(Request $request)
    {


        if(!(Hash::check($request->get('Ancien'),Auth::user()->password))) {
            return back()->with('error','votre mot de passe actuel ne correspond pas à ce que vous avez fourni') ;
    
         } 
         if(strcmp($request->get('Ancien'),$request->get('Nouveau'))==0) {
            return back()->with('error','votre mot de passe actuel ne peut pas être le même avec le nouveau mot de passe') ;
    
         } 
    
         
         if(!($request->get('Nouveau') == $request->get('Confirmez'))) {
            return back()->with('error','votre nouveau mot de passe ne correspond pas à Confirmer') ;
    
         } 
         $request->validate([
            'Ancien' => 'required',
            'Nouveau' => 'required',
            'Confirmez' => 'required',
        ]);
        $user = Auth::user();
        $user->password= bcrypt($request->get('Nouveau'));
        $user->save();
        
        return view('clients.accueil');


     
    }

  


    public function accueil()
    {

        
       
        return view('clients.accueil') ;
    }

    public function edit_profile()

    {
       
        return view('clients.edit_profile', array('user' => Auth::user()));
    }

 
  

    public function profile()

    {
       
        return view('clients.profile', array('user' => Auth::user()));
    }
   

    public function boit_chat()
    {
        return view('clients.boit_chat');
    }

  

    public function edit()
    {
        return view('clients.edit_profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
      $user=Auth::user();
      $user->name =$request['name'];
      $user->prenom =$request['prenom'];
      $user->email = $request['email'];
      $user->date_naissance = $request['date_naissance'];
      $user->genre = $request['genre'];
      $user->adresse = $request['adresse'];
      $user->telephone = $request['telephone'];
     
      $user->save() ;
       
        return back()->with('success','votre profile mis à jour avec succés') ;
      
    }






    public function index()
    {
        
        $users=User::join('role_user','users.id','role_user.user_id')
        ->where('role_id',3)
        ->paginate(5);

       

        return view('admin.client.index',compact('users')) 
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function show(User $user , $id )
    {
     
        $user=User::find($id);
        return view('admin.client.show',compact('user'));
    }

      public function destroy(User $user , $id)
      {
       
        $user=User::find($id);
          $user->delete();
    
          return back()->with('success','user Supprimé avec succès') ;        
      }




      public function indexsuperviseurs()
      {
          
          $users=User::join('role_user','users.id','role_user.user_id')
          ->where('role_id',3)
          ->paginate(5);
  
         
  
          return view('superviseur.client.index',compact('users')) 
          ->with('i', (request()->input('page', 1) - 1) * 5);
      }
  
  
      public function showsuperviseurs(User $user , $id )
      {
       
          $user=User::find($id);
          return view('superviseur.client.show',compact('user'));
      }









      public function evenements()
    {

        $categorie_evenements=Categorie_evenement::all();
        return view('clients.evenements',compact('categorie_evenements'));
    }

    public function services()
    {

        $categorie_services = Categorie_service::all();
        return view('clients.services',compact('categorie_services'));
    }




    public function filtre_evenement($id)
    {
        $categorie_evenements=Categorie_evenement::find($id);
  
        $annonces = Annonce::latest()
             ->where('categorie_evenement_id',$categorie_evenements->id)
             ->get();
        return view('clients.filtre_evenement',compact('annonces'));
    }



    public function filtre_service($id)
    {
        $categorie_services=Categorie_service::find($id);
  
        $annonces = Annonce::latest()
             ->where('categorie_service_id',$categorie_services->id)
             ->get();
        return view('clients.filtre_service',compact('annonces'));
    }


    
    public function filtre_demande($id)
    {
        $annonces=Annonce::find($id);
  
        $demandes = Demande::latest()
             ->where('annonce_id',$annonces->id)
             ->get();
            
        return view('clients.annonces.filtre_demande',compact('demandes'));
    }

 
}



