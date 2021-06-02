<?php

namespace App\Http\Controllers;
use App\Models\Paiement;
use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    


    public function index()
    {
        $abonnements=Paiement::latest()->paginate(5);
  
        return view('abonnements.index',compact('abonnements')) 
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        return view('abonnements.create');
    }




    public function store(Request $request)
    {
        
        $request->validate([
            'duree' => 'required',
            'montant' => 'required|max:10000',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
       	
    	    $duree=$request->duree;
            $montant=$request->montant;
    		$image = $request->file('image');
            $imageName = time() . '.' . $image->extension() ;
            $image->move(public_path('images'), $imageName) ;
            $abonnements=new Paiement() ;
    	    $abonnements->duree=$duree ;
            $abonnements->montant=$montant ;
            $abonnements->image=$imageName ;
            $abonnements->save(); 
   
        return redirect()->route('abonnements.index')
                        ->with('success','abonnement créé avec succès.');
    }


    public function show(Paiement $abonnement)
    {
        return view('abonnements.show',compact('abonnement'));
    }



    public function edit(Paiement $abonnement)
    {
       
        
        return view('abonnements.edit',compact('abonnement'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'duree' => 'required',
            'montant' => 'required|max:10000',
            'image' => 'mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $abonnements=Paiement::find($id) ;
        $abonnements->duree=$request->input('duree') ;
        $abonnements->montant=$request->input('montant') ;

       if ($request->hasfile('image')){
        $file = $request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename = time() . '.' .$extension ;
        $file->move(public_path('images'), $filename) ;
        $abonnements->image=$filename ;
       }
      
        $abonnements->save(); 

       
  
        return redirect()->route('abonnements.index')
          ->with('success','Abonnements Mis à jour avec succés');
    }


    public function destroy(Paiement $abonnement)
    {
        $abonnement->delete();
  
        return redirect()->route('abonnements.index')
                        ->with('success','Abonnement Supprimé avec succès');
    }


}
