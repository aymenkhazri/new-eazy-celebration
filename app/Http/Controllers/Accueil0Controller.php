<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Categorie_evenement ;
use App\Models\Categorie_service;
use App\Models\Paiement;
use Illuminate\Auth\Events\Registered;
use Session ;
use Redirect ;
use App\Models\Fournisseur;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
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

        $categorie_evenements=Categorie_evenement::latest()
        ->paginate(6);
        return view('accueil0.evenements',compact('categorie_evenements'));
    }

    public function propos()
    {
        return view('accueil0.propos');
    }

    public function services()
    {

        $categorie_services = Categorie_service::latest()
        ->paginate(6);
        return view('accueil0.services',compact('categorie_services'));
    }







    public function choixpayment()
    {
      
        $paiements = Paiement::all();
        
        return view('accueil0.choixpayment',compact('paiements'));
       
    }



    public function indexpayment($id)
    {
        $paiement = Paiement::find($id);
        return view('accueil0.payment',compact('paiement'));
       
    }
  

    public function payment(Request $request,$id)
    {

        $paiement = Paiement::find($id);

        \Stripe\Stripe::setApiKey ( 'sk_test_51IwGu8LwwlMMYl2uNiZGWMcb7EuVIFkeMg2TgL2NXPhapjXdl5mKZDGzMakWpJrtNchbWTWxXvCTKPCZ93jeLaw500ZrEKFmdi' );
        try {
            \Stripe\Charge::create ( array (
                    "amount" =>  $paiement->montant * 100,
                    "currency" => "eur",
                    "source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
                    "description" => "l'abonnement  $paiement->duree à été payée"
            ) );
            Session::flash ( 'success-message', 'Paiement effectué avec succès !' );

         

            $users=Fournisseur::first();
           
            Auth::login($user = User::create([
                'name' => $users->name,
                'prenom' => $users->prenom,
                'email' => $users->email,
                'password' => $users->password,
           
            
            ]));
    
            $user->attachRole($users->user_type);
    
            event(new Registered($user));


              return redirect(RouteServiceProvider::HOME)
              ->with('success','Paiement effectué avec succès !');

        } catch ( \Exception $e ) {
            Session::flash ( 'fail-message', "Erreur! Veuillez réessayer." );


            $users=DB::table('fournisseurs')->orderBy('id', 'DESC')->first();
         
         
            Auth::login($user = User::create([
                'name' => $users->name,
                'prenom' => $users->prenom,
                'email' => $users->email,
                'password' => $users->password,
           
            
            ]));
    
            $user->attachRole($users->user_type);
    
            event(new Registered($user));



              return redirect(RouteServiceProvider::HOME)
              ->with('success','Paiement effectué avec succès !');
        }
    } 
    

  

}
 
