<?php

namespace App\Http\Controllers;
use App\Models\Demande;
use App\Models\User;
use App\Models\Avertissement;
use Illuminate\Http\Request;
use App\Models\Annonce;
use Auth;
use Hash ;
use Session ;
class UserController extends Controller
{
    

    public function index()
    {
        $annonces = Annonce::latest()
        ->paginate(6);
        return view('superviseur.annonce.index', compact('annonces'));

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


    public function destroy(Request $request)
    {
      
  

        $annonces = Annonce::findOrFail($request->annonce_id);
        $annonces->delete();

      
        
        return redirect()->route('annonces.index')
                        ->with('success','Annonce Supprimé avec succès');
    }
 



    public function accueil()
    {

        
        $superviseurs=User::join('role_user','users.id','role_user.user_id')
        ->where('role_id',2)
        ->where('id', '!=', Auth::id())
        ->paginate(5); 

        $clients=User::join('role_user','users.id','role_user.user_id')
        ->where('role_id',3)
        ->count();

        $fournisseurs=User::join('role_user','users.id','role_user.user_id')
        ->where('role_id',4)
        ->count();
     
        $annonces = Annonce::latest()
        ->paginate(3);

        return view('superviseur.accueil', compact('superviseurs','clients','fournisseurs','annonces'));
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
    

        return redirect()->route('annonces.index')
                        ->with('success','Client est averti avec succès.');
    }

    public function bannir0($id)
    {

        
       
        $users=User::find($id);
       
        $users->isban = 0;
        $users->save() ;
      

        return redirect()->route('annonces.index')
                        ->with('success','désactiver la banni avec succès.');
    }

    public function bannir1($id)
    {

      
       
        $users=User::find($id);
 
        $users->isban = 1 ;
        $users->save() ;
    

        return redirect()->route('annonces.index')
                        ->with('success','Client  a été banni avec succès.');
    }

}
