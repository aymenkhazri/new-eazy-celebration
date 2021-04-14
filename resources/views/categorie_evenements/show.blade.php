@extends('admin.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
              
                <font size="6" color="#4d1919">Voir  Type Evenement : </font>
                <br>
            </div>
            <div class="pull-right" align="right">
                <a class="btn btn-info" href="{{ route('categorie_evenements.index') }}"> Retour</a>
            </div>
        </div>
    </div>
    <br>
      <br>
      
     
   <br>
   <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type Evenement :</strong>
                {{ $categorie_evenement->type_evenement }}
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $categorie_evenement->description }}
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        
            <div class="form-group">
            <strong>Image :</strong>
              
                <img src="{{asset('images')}}/{{ $categorie_evenement->image}}" width="200px;" height="100px;" />
            </div>
        </div>

    </div>


 

   
    

    </div>
 <br><br><br>
<br><br><br>
   
@endsection
