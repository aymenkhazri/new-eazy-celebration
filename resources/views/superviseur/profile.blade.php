@extends('superviseur.index')

@section('content')
<br>
<br>
<div class="container" align="center">
   
     <font    color="#bf4040" > <h1> ** votre Profile ** </h1> </font>
     <br>
     <br>
     
   

    
<div class="card" style="  border-radius: 20px;height: 500px;width:700px; ">
<br>
   <div class="row" >
   
   <a  href="{{  url('/user/edit_profile') }}" > <button type="submit" style=" margin-left:600px;" class=" btn btn-primary" > Modifier</button></a>
   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                <img src="{{asset('images')}}/{{ $user->avatar }}" style="width:150px; height:150px;  border-radius:50%; ">
                </div>
            </div>    
        </div>
        <br>
        <div class="row" >
   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                <h3><strong> Nom : </strong>{{ $user->name }}</h3>
                </div>
            </div>    
        </div>
        <div class="row" >
   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                <h3><strong> Prenom : </strong>{{ $user->prenom }}</h3>
                </div>
            </div>    
        </div>

        <div class="row" >
   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                <h3> <strong>Email : </strong> {{ $user->email }}</h3>
                </div>
            </div>    
        </div>



          
        </div>
</div>

@endsection