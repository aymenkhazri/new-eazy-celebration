@extends('superviseur.index')

@section('content')
<div class="container" align="center">
    <div>
     <font    color="#bf4040" > <h1> ** votre Profile ** </h1> </font>
     <br>
     <br>
     
   </div>
   <a  href="{{  url('/user/edit_profile') }}" > <button type="submit" style=" margin-left:600px;" class=" btn btn-sm btn-primary" > Modifier</button></a>
    

   <div class="row" >
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
                   
                <h3>Nom : {{ $user->name }}</h3>
                </div>
            </div>    
        </div>


        <div class="row" >
   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                <h3>Email : {{ $user->email }}</h3>
                </div>
            </div>    
        </div>



          
</div>

@endsection