<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use App\Models\Demande;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Categorie_service;
class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       
        
        $annonces = Annonce::latest()->paginate(4);
        $categorie_services = Categorie_service::all();

        return view('fournisseurs.demandes.filtre_annonce',compact('annonces','categorie_services',)) 
          ->with('i', (request()->input('page', 1) - 1) * 2);
    }

    public function filter($id)
    {
      
       
        
        $categorie_service=Categorie_service::find($id);
   
        $annonces = Annonce::latest()
             ->where('categorie_service_id',$categorie_service->id)
             ->paginate(3);

             $categorie_services = Categorie_service::all();



 


    return view('fournisseurs.demandes.filtre_annonce',compact('annonces','categorie_services',)) 
    ->with('i', (request()->input('page', 1) - 1) * 2);

 

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id =null)
    {
        $annonce= Annonce::find($id);

       
   
        return view('fournisseurs.demandes.create' ,compact('annonce')) 
     ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,$id)
    {

      
       
        $demande = Demande::create([
            'montant' => $request->montant,
            'description' => $request->description,
           
            'user_id' =>Auth::user()->id,
            'annonce_id' =>$id,

          
        ]);
     
        $annonce=Annonce::find($id);
        $demandes = Demande::where('annonce_id',$annonce->id)
             ->get();
      
        return view('fournisseurs.demandes.index',compact('demandes','annonce'))
                        ->with('success','demande créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function indexdemande($id)
    {
       
        $annonce=Annonce::find($id);
  
        $demandes = Demande::where('annonce_id',$annonce->id)
             ->get();
            
        return view('fournisseurs.demandes.index',compact('demandes','annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
     
      $demande=Demande::find($id);
        $demande->delete();
  
        return back()->with('success','demande Supprimé avec succès') ;        
    }
}
