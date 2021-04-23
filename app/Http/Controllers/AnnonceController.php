<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use App\Models\Categorie_evenement;
use App\Models\Categorie_service;
use Illuminate\Http\Request;
use Auth;
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
        ->paginate(2);
       
  
        return view('clients.annonces.index',compact('annonces')) 
          ->with('i', (request()->input('page', 1) - 1) * 2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_categories= Categorie_evenement::all();
        $type_services= Categorie_service::pluck( 'type_service','id');
        return view('clients.annonces.create',compact('type_categories','type_services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Annonce $annonce )
    {
      
     
        $annonce = Annonce::create($request->except(['categorie_service_id']));
        $annonce->user_id =Auth::user()->id;
        $annonce->save();
        $annonce->categorie_services()->sync($request->categorie_service_id);
        
        return redirect()->route('annonces.index')
                        ->with('success','annonces créé avec succès.');
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
    public function destroy($id)
    {
        $annonces=Annonce::find($id);
        $annonces->delete();
  
        return redirect()->route('annonces.index')
                        ->with('success','annonce Supprimé avec succès');
    }
}
