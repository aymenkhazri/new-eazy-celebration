<?php

namespace App\Http\Controllers;
use App\Models\Categorie_evenement;
use Illuminate\Http\Request;

class CategorieEvenementController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie_evenements=Categorie_evenement::latest()->paginate(5);
  
        return view('categorie_evenements.index',compact('categorie_evenements')) 
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorie_evenements.create');
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
            'type_evenement' => 'required',
            'description' => 'required|max:10000',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
       	
    	    $type_evenement=$request->type_evenement;
            $description=$request->description;
    		$image = $request->file('image');
            $imageName = time() . '.' . $image->extension() ;
            $image->move(public_path('images'), $imageName) ;
            $categories=new Categorie_evenement() ;
    	    $categories->type_evenement=$type_evenement ;
            $categories->description=$description ;
            $categories->image=$imageName ;
            $categories->save(); 
   
        return redirect()->route('categorie_evenements.index')
                        ->with('success','Type Evenement créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie_evenement  $categorie_evenement
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie_evenement $categorie_evenement)
    {
        return view('categorie_evenements.show',compact('categorie_evenement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie_evenement  $categorie_evenement
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie_evenement $categorie_evenement)
    {
       
        
        return view('categorie_evenements.edit',compact('categorie_evenement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie_evenement  $categorie_evenement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'type_evenement' => 'required',
            'description' => 'required|max:10000',
            'image' => 'mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $categories=Categorie_evenement::find($id) ;
        $categories->type_evenement=$request->input('type_evenement') ;
        $categories->description=$request->input('description') ;

       if ($request->hasfile('image')){
        $file = $request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename = time() . '.' .$extension ;
        $file->move(public_path('images'), $filename) ;
        $categories->image=$filename ;
       }
      
        $categories->save(); 

       
  
        return redirect()->route('categorie_evenements.index')
          ->with('success','Type Evenement Mis à jour avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie_evenement  $categorie_evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie_evenement $categorie_evenement)
    {
        $categorie_evenement->delete();
  
        return redirect()->route('categorie_evenements.index')
                        ->with('success','Type Evenement Supprimé avec succès');
    }


    public function evenement()
    {
        $categorie_evenements=Categorie_evenement::latest()->paginate(5);
  
        return view('accueil0',compact('categorie_evenements')) 
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
