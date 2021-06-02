<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Paiement;
use App\Models\Fournisseur;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
         
        ]);

   

        if($request->user_type=='fournisseur'){


            $fournisseur = Fournisseur::create([
                'name' => $request->name,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'user_type'=>$request->user_type
            
            ]);

            $paiements = Paiement::all();
        
            return view('accueil0.choixpayment',compact('paiements')); 
        }else
            {
                
                Auth::login($user = User::create([
                    'name' => $request->name,
                    'prenom' => $request->prenom,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
               
                
                ]));
        
                $user->attachRole($request->user_type);
        
                event(new Registered($user));
      
     
        return redirect(RouteServiceProvider::HOME);
           }
    }
}
