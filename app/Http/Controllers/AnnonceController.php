<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use App\Models\Categorie_evenement;
use App\Models\Categorie_service;
use Illuminate\Http\Request;
use Auth;
use App\Models\Demande;
use Illuminate\Support\Facades\DB;
class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::latest()
        ->where('user_id',Auth::user()->id)
        ->paginate(3);

      
    
        $type_categories= Categorie_evenement::all();
        $type_services= Categorie_service::all();



            
  
        return view('clients.annonces.index',compact('annonces','type_categories','type_services')) 
         ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_categories= Categorie_evenement::all();
        $type_services= Categorie_service::all();
        return view('clients.annonces.create',compact('type_categories','type_services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {

        $request->validate([
            'categorie_evenement_id' => 'required',
            'categorie_service_id' => 'required',
            'description' => 'required|max:225',
            'date_event' => 'required',
            'adresse_event' => 'required',
        ]);
      
        $annonce = Annonce::create([
            'categorie_evenement_id' => $request->categorie_evenement_id,
            'categorie_service_id' => $request->categorie_service_id,
            'description' => $request->description,
            'date_event' => $request->date_event,
            'adresse_event' => $request->adresse_event,
            'user_id' => Auth::user()->id,
            
        ]) ;
      
    
        
        return redirect()->route('annoncess.index')
                        ->with('success','Annonce créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
           
            'description' => 'required|max:225',
            'date_event' => 'required',
            'adresse_event' => 'required',
        ]);
  
        $annonces = Annonce::findOrFail($request->id);

        $annonces->update($request->all());
       
    
        return redirect()->route('annoncess.index')
          ->with('success','Annonce Mis à jour avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function destroy(Request $request)
    {
      
  
      
        $annonces = Annonce::findOrFail($request->annonce_id);
        $annonces->delete();

      
        
        return redirect()->route('annoncess.index')
                        ->with('success','Annonce Supprimé avec succès');
    }
}
