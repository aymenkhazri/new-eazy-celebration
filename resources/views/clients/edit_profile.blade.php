@extends('clients.index')

@section('content')

<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>

<div class="container" >
    <div align="center">
     <font    color="#bf4040" > <h1> Modifier votre Profile  </h1> </font>
     <br>
     <div style=" margin-left:1200px;" >
            <a data-toggle="modal" class="btn btn-primary" data-target="#profil">Profile</a>
           
        </div>
   </div>
   <br>
   <br>
   
   
   <table  >
  
    <tr>
      <td >
      <font size="5" color="#4d1919">Mettre à jour l'image de profil </font>
      <br>
      <br>
      @if ($message = Session::get('succes'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br>
      
      <div class="row"  >

<div class="col-md-10 col-md-offset-1">


    <img src="{{asset('images')}}/{{  Auth::user()->avatar }}" style="width:170px; height:170px;  border-radius:50%; "> 
    <br>
    <form enctype="multipart/form-data" action="{{  url('/user/edit_profile') }}" method="POST">
    <br>
    <br>

                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">Modifier</button>
           
    </div>
    </form>

   
</div>


 </div>
      
      </td>
      <td >
        
        
<div class="row"  style=" margin-left:400px;"  >

<div class="card">       

<div class="card-body">

<form action="{{ route('update')}}" method="POST">
        @csrf
       
 <table >

 <font size="5" color="#4d1919">Mettre à jour l'image de profil </font>
 @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <br>
@if(session('error'))
<div class="alert alert-danger" role="alert">
{{session('error')}}
</div>
@endif
 <br>

  <tr>
    <td >
       
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom :</strong>
                    <input type="text" name="name" value="{{ Auth::user()->name}}" class="form-control" placeholder="nom">
                </div>
            </div>





            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ Auth::user()->email}}" class="form-control" placeholder="email">
                </div>
            </div>


         
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Genre:</strong>
                    <input type="text" name="genre" value="{{ Auth::user()->genre}}" class="form-control" placeholder="genre">
                </div>
            </div>


         

            
        
   </td>
            <td >

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prenom :</strong>
                    <input type="text" name="prenom" value="{{ Auth::user()->prenom}}" class="form-control" placeholder="prenom">
                </div>
            </div>
            





          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date de naissance:</strong>
                    <input type="text" name="date_naissance" value="{{ Auth::user()->date_naissance}}" class="form-control" placeholder="date_naissance">
                </div>
            </div>


            
    
            
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adresse:</strong>
                    <input type="text" name="adresse" value="{{ Auth::user()->adresse}}" class="form-control" placeholder="adresse">
                </div>
            </div>
            </td>
    </tr>
    <tr>  
    <td colspan="2">
          
            <div class="col-xs-12 col-sm-12 col-md-12"  >
                <div class="form-group" >
                    <strong>Telephone:</strong>
                    <input type="text" name="telephone" value="{{ Auth::user()->telephone}}" class="form-control" placeholder="telephone">
                </div>
            </div>
            </td>
            </tr>
            <br>
   
      <tr>  
      <td colspan="2">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="Reset" class="btn btn-danger">Annuler</button>
            </div>
        </div>
        </td>
        </tr>
    </form>
    </div>
    </div>
    </table>
   

</div>
      
      </td>
    
    </tr>
    </table>
   
   
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>









@endsection