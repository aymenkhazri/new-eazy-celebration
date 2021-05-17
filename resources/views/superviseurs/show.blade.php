@extends('admin.index')
@section('content')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
              
                <font size="6" color="#4d1919">Voir superviseur : </font>
                <br>
            </div>
            <div class="pull-right" align="right">
                <a class="btn btn-info" href="{{ route('superviseurs.index') }}"> Retour</a>
            </div>
        </div>
    </div>
    <br>
      <br>
      
     
   <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom :</strong>
                {{ $superviseur->name }}
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom :</strong>
                {{ $superviseur->prenom }}
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email :</strong>
                {{ $superviseur->email }}
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mot de passe :</strong>
                {{ $superviseur->password }}
            </div>
        </div>

    </div>
    

    </div>
 <br><br><br>
<br><br><br>
   
@endsection
