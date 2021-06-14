@extends('clients.index')

@section('content')

<br>
<br>
<br>
<br><br>
<br>



<div class="container" >
    <div align="center">
     <font    color="#bf4040" > <h1> Modifier votre Profile  </h1> </font>
     <br>
     <div style=" margin-left:950px;" >
            <button data-toggle="modal" class="btn btn-sm btn-primary" data-target="#profil">Profile</button>
           
        </div>
   </div>
   <br>
   <br>
   
   
   <table  >
  
    <tr>
      <td  >
      <div class="card" style="  border-radius: 20px;width: 105%;">    
      <div class="card-body">
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

<div class="col-md-12 ">


    <img src="{{asset('images')}}/{{  Auth::user()->avatar }}"   style="width:170px; height:170px; margin-left:70px;  border-radius:40%; "> 
    <br>
    <form enctype="multipart/form-data" action="{{  url('/user/edit_profile') }}" method="POST">
    <br>
    <br>

                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <br>
                <br>
                <br>
                <br>
                <br>
         
         
                
                <div class="col-xs-12 col-sm-12 col-md-12 " style=" margin-left:80px;">
                 <button type="submit" class="btn btn-sm btn-primary">Modifier</button>
           
    </div>
    </form>

   
 </div>


 </div>
 </div>
 </div>
      
      </td>
      <td >
        
        
<div   style=" margin-left:200px;width: 70%;"  >

<div class="card" style="  border-radius: 20px;">       

<div class="card-body">

<form action="{{ route('update')}}" method="POST">
        @csrf
       
 <table >

 <font size="5" color="#4d1919"> Mettre à jour les information personal </font>
 <br>
 <br>
 @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   

	@if ($errors->any())
    <div class="alert alert-danger">
        <strong>avertissement!</strong> Veuillez vérifier votre code d'entrée<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


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
                    <select name="genre" class="form-control">
                    <option value="{{ Auth::user()->genre}}">{{Auth::user()->genre}}</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
                   
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
            <br>
            <button type="submit" class="btn btn-sm btn-primary">Enregistrer</button>
                <button type="Reset" class="btn btn-sm btn-danger">Annuler</button>
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


<style>
.form-control {
    color: #000;
    box-shadow: none;
    height: 42px;
    padding: 8px 15px;
}
.card-body {
  
 
 
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);

 
 
}
</style>




@endsection