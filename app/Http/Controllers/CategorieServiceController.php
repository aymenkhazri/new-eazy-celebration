<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie_service;
class CategorieServiceController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie_services = Categorie_service::latest()->paginate(5);
  
        return view('categorie_services.index',compact('categorie_services')) 
          ->with('i', (request()->input('page', 1) - 1) * 2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorie_services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_service' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif|max:2048',  
          
        ]);       	
    	    $type_service=$request->type_service;
            $description=$request->description;
    		$image = $request->file('image');
            $imageName = time() . '.' . $image->extension() ;
            $image->move(public_path('images'), $imageName) ;
            $categories=new Categorie_service() ;
    	    $categories->type_service=$type_service ;
            $categories->description=$description ;
            $categories->image=$imageName ;
            $categories->save(); 
   
        return redirect()->route('categorie_services.index')
                        ->with('success','Type Service créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie_service  $categorie_service
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie_service $categorie_service)
    {
        return view('categorie_services.show',compact('categorie_service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie_service  $categorie_service
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie_service $categorie_service)
    {
        return view('categorie_services.edit',compact('categorie_service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie_service  $categorie_service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'type_service' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif|max:2048',            
        ]);
  
        $categories=Categorie_service::find($id);
        $categories->type_service=$request->input('type_service');
        $categories->description=$request->input('description');

       if ($request->hasfile('image')){
        $file = $request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename = time() . '.' .$extension ;
        $file->move(public_path('images'), $filename);
        $categories->image=$filename ;
       }
      
        $categories->save(); 

       
  
        return redirect()->route('categorie_services.index')
          ->with('success','Type Services Mis à jour avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie_service  $categorie_service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie_service $categorie_service)
    {
        $categorie_service->delete();
  
        return redirect()->route('categorie_services.index')
                        ->with('success','Type Service Supprimé avec succès');
    }

    public function service()
    {
        $categorie_services=Categorie_service::latest()->paginate(5);
  
        return view('accueil0',compact('categorie_services')) 
          ->with('i', (request()->input('page', 1) - 1) * 5);
    } //
}
