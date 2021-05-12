<?php

namespace App\Http\Controllers;

use App\Fournisseurs;
use Illuminate\Http\Request;

use App\Models\Categorie_evenement ;


use App\Models\User;
use App\Models\Categorie_service;
use Auth;
use Hash ;
use Session ;
class FournisseursController extends Controller
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

        return view('fournisseurs.accueil');
    }




    
    public function accueil()
    {
        return view('fournisseurs.accueil');
    }

    
    public function edit_profile()

    {
       
        return view('fournisseurs.edit_profile', array('user' => Auth::user()));
    }

    public function profile()
    {
        return view('fournisseurs.profile', array('user' => Auth::user()));
    }

    
   

    public function boit_chat()
    {
        return view('fournisseurs.boit_chat');
    }






    public function edit_fournisseurs(User $user)
    {
        $categorie_services= Categorie_service::all();
        return view('fournisseurs.edit_profile',compact('categorie_services','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update_fournisseurs(Request $request)
    {
        
      $user=Auth::user();
      $user->name =$request['name'];
      $user->prenom =$request['prenom'];
      $user->email = $request['email'];
      $user->date_naissance = $request['date_naissance'];
      $user->genre = $request['genre'];
      $user->adresse = $request['adresse'];
      $user->telephone = $request['telephone'];
      $user->type_service_id = $request['type_service_id'];
      $user->save() ;
       
        return back()->with('success','votre profile mis à jour avec succés') ;
      
    }





    public function index()
    {
        $users=User::join('role_user','users.id','role_user.user_id')
        ->where('role_id',4)
        ->paginate(5);

        return view('admin.fournisseur.index',compact('users')) 
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function show(User $user , $id )
    {
        $user=User::find($id);
        return view('admin.fournisseur.show',compact('user'));
    }

      public function destroy(User $user , $id)
      {
        $user=User::find($id);
          $user->delete();
    
          return back()->with('success','user Supprimé avec succès') ;        
      }






      public function indexsuperviseurs ()
      {
          $users=User::join('role_user','users.id','role_user.user_id')
          ->where('role_id',4)
          ->paginate(5);
  
          return view('superviseur.fournisseur.index',compact('users')) 
            ->with('i', (request()->input('page', 1) - 1) * 5);
      }

      public function showsuperviseurs (User $user , $id )
      {
          $user=User::find($id);
          return view('superviseur.fournisseur.show',compact('user'));
      }





      public function evenements()
      {
  
          $categorie_evenements=Categorie_evenement::all();
          return view('fournisseurs.evenements',compact('categorie_evenements'));
      }
  
      public function services()
      {
  
          $categorie_services = Categorie_service::all();
          return view('fournisseurs.services',compact('categorie_services'));
      }



}












