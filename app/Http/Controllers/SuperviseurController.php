<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class SuperviseurController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $superviseurs=User::join('role_user','users.id','role_user.user_id')
        ->where('role_id',2)
        ->paginate(5);
  
        return view('superviseurs.index',compact('superviseurs')) 
          ->with('i', (request()->input('page', 1) - 1) * 2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superviseurs.create');
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
            'name' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'password' => 'required',
            
          
        ]);
  
        $user = User::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->attachRole('superviseur');
        event(new Registered($user));

        return redirect()->route('superviseurs.index')
                        ->with('success','superviseur créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Superviseur  $superviseur
     * @return \Illuminate\Http\Response
     */
    public function show(User $superviseur)
    {
        return view('superviseurs.show',compact('superviseur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Superviseur  $superviseur
     * @return \Illuminate\Http\Response
     */
    public function edit(User $superviseur)
    {
        return view('superviseurs.edit',compact('superviseur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Superviseur  $superviseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $superviseur)
    {
        $request->validate([
            'name' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'password' => 'required',
            
            
        ]);
  
        $superviseur->update($request->all());
  
        return redirect()->route('superviseurs.index')
          ->with('success','superviseur Mis à jour avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Superviseur  $superviseur
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $superviseur)
    {
        $superviseur->delete();
  
        return redirect()->route('superviseurs.index')
                        ->with('success','superviseur Supprimé avec succès');
    }
}
