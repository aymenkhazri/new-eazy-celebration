@extends('admin.index')
  
@section('content')
<br>
<br>
<div class="container">
<br>
<br>  
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <br>
<br>
            <font size="5" color="#4d1919">Créer une nouvelle superviseur : </font>
        </div>
        <div class="pull-right" align="right" >
            <a class="btn btn-info" href="{{ route('superviseurs.index') }}">Retour</a>
        </div>
    </div>
</div>
   
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
   <br>
   <br>
<form action="{{ route('superviseurs.store') }}" method="POST">
    @csrf
     <div class="">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom :</strong>
                <input type="text" name="name" class="form-control" placeholder="nom">
            </div>
        </div>
        
        <div class="">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom :</strong>
                <input type="text" name="prenom" class="form-control" placeholder="prenom">
            </div>
        </div>

        <div class="">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
        </div>

        <div class="">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mot de passe:</strong>
                <input type="password" name="password" class="form-control" placeholder="motpasse">
            </div>
        </div>
      
        <br>
        <br>
<br>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="Reset" class="btn btn-danger">Annuler</button>
        </div>
    </div>
   
</form>
</div>
<br>
<br>

@endsection