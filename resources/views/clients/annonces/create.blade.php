@extends('clients.index')
  
@section('content')
<section class="box-content box-1">
			<div class="container" >
				<div class="row heading">
					<div class="col-lg-12" style="text-align:center">
						<h2>Gestion des Annonces</h2>
						<hr>
						
                        </div>
                        </div>
					</div>
					

<div class="container">
<br>
<br>  
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <br>
<br>
            <font size="5" color="#4d1919">Créer une nouvelle annonce : </font>
        </div>
        <div class="pull-right" align="right" >
            <a class="btn btn-info" href="{{ route('annonces.index') }}">Retour</a>
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
<form action="{{ route('annonces.store') }}" method="POST">
    @csrf
     <div class="">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong align="right">Type de categorie :</strong>
                <select name="categorie_evenement_id" class="form-control">
           
             
                    @foreach($type_categories as $type_categorie)
                    <option value="{{$type_categorie->id}}">{{$type_categorie->type_evenement}}</option>
                    @endforeach
                </select>
                
            </div>
        </div>
        
        <div class="">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type de service :</strong>
                <select name="categorie_service_id" class="form-control">
           
             
           @foreach($type_services as $type_service)
           <option value="{{$type_service->id}}">{{$type_service->type_service}}</option>
           @endforeach
       </select>
                
            </div>
        </div>

        <div class="">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="textarea" name="description" class="form-control" placeholder="description">
            </div>
        </div>

        <div class="">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date de evenement:</strong>
                <input type="text" name="date_event" class="form-control" placeholder="date de evenement">
            </div>
        </div>


        <div class="">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Adresse de evenement:</strong>
                <input type="text" name="adresse_event" class="form-control" placeholder="motpasse">
            </div>
        </div>
      
        <br>
<br>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="Reset" class="btn btn-danger">Annuler</button>
        </div>
    </div>
   
</form>
</div>

</div>
			
			
			
			</div>






            </section>

@endsection