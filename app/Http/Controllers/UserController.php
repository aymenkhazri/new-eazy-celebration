<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use Auth;
use Hash ;
use Session ;
class UserController extends Controller
{
    

    public function index()
    {
        return view('superviseur.index');

    }


    public function profile(){
    	return view('superviseur.profile', array('user' => Auth::user()) );
    }


    public function update_avatar(Request $request){

    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    	
            $avatar->move(public_path('images'), $filename) ;
    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	return  back()->with('succes','Image de profile mis à jour avec succés');

    }


    public function edit_profile(){
    	return view('superviseur.edit_profile', array('user' => Auth::user()) );
    }






    public function changepassword(Request $request){

      

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
    
    return  back()->with('success','Mot de passe Mis à jour avec succés');



    	
    }



    
    public function annonce()
    {
        $annonces = Annonce::latest()
        ->paginate(2);
       
  
        return view('superviseur.annonce.index',compact('annonces')) 
          ->with('i', (request()->input('page', 1) - 1) * 2);
    }
}
