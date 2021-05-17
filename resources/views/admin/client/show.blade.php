@extends('admin.index')
@section('content')
<br>
<br>
<div class="container" align="center">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center">
              
                <font size="6" color="#4d1919">Voir client : </font>
                <br>
            </div>
            <div class="pull-right" align="right">
                <a class="btn btn-info" href="{{ route('clients.index') }}"> Retour</a>
            </div>
        </div>
    </div>
    <br>
      <br>
      
     
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             
                <img src="{{asset('images')}}/{{ $user->avatar}}"   style="width:120px; height:120px;  border-radius:50%; "/>
            </div>
        </div>

    </div>
     
      <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom :</strong>
                {{ $user->name }}
            </div>
        </div>

    </div>

  

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom :</strong>
                {{ $user->prenom }}
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email :</strong>
                {{ $user->email }}
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date de naissance :</strong>
                {{ $user->date_naissance }}
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Genre :</strong>
                {{ $user->genre }}
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Adresse :</strong>
                {{ $user->adresse }}
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telephone :</strong>
                {{ $user->telephone }}
            </div>
        </div>

    </div>

    </div>
    </div>
       
      </div>
   
@endsection
