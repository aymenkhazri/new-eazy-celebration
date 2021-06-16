@extends('superviseur.index')

@section('content')

<div style=" margin-left:100px;"  >
           <h1 > <a  href="{{  url('/user/profile') }}"> <i class="fas fa-chevron-circle-left"></i> </a></h1> 
         </div>
<div class="container" >
    <div align="center">
     <font    color="#bf4040" > <h1> Modifier votre Profile  </h1> </font>
     <br>
     <br>
    
        
   </div>
   <br>
 
   
   
   <table >
  
    <tr >
      <td class="card" style="  border-radius: 20px;height: 500px;width:400px; " align="center">
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


    <img src="{{asset('images')}}/{{ $user->avatar }}" style="width:170px; height:170px;  border-radius:50%; "> 
    <br>
    <form enctype="multipart/form-data" action="{{  url('/user/edit_profile') }}" method="POST">
    <br>
    <br>
    <div style="margin-left:-20px;">

                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
</div>
                <br>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">Modifier</button>
           
    </div>
    </form>

   
</div>


 </div>
      
      </td>
      <td  >
        
        
<div class="card"  style="  border-radius: 20px;height: 500px;width:400px;  margin-left:300px;" >
<font size="5" color="#4d1919"align="center">Changer votre mot de passe </font>
   
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
<br>
<form action="{{ route('changepassword') }}" method="POST">
@csrf
 <div class="row">
    <div class="col-xs- col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Actuel mot de passe :</strong>
            <input type="password" name="Ancien" class="form-control" placeholder="Actuel mot de passe">
        </div>
    </div>
    
</div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nouveau mot de passe :</strong>
            <input type="password" name="Nouveau" class="form-control" placeholder="nouveau mot de passe">
        </div>
    </div>

    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirmez le mot de passe:</strong>
            <input type="password" name="Confirmez" class="form-control" placeholder="confirmez le mot de passe">
        </div>
    </div>

    </div>

    <br>
<br>
<br>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Changer</button>
            <button type="Reset" class="btn btn-danger">Annuler</button>
    </div>
</div>

</form> 





</div>
      
      </td>
    
    </tr>
    </table>
   
   
</div>




<style>

.card {
    padding: 20px;
}
</style>







@endsection