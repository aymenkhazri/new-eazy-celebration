<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  
    public function index()
    {
        $annonces = Annonce::latest()
        ->paginate(2);
       
  
        return view('admin.annonce.index',compact('annonces')) 
          ->with('i', (request()->input('page', 1) - 1) * 2);
    }

    
}
