@extends('fournisseurs.index')
  
@section('content')





<section class="box-content box-1">
			<div class="container" >
				<div >
					<div class="col-lg-12" style="text-align:center">
						<h2>Annonces</h2>
						<hr>
							
						</div>

 







		 


<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<br>
<br>
<font size="5" color="#4d1919">Vérifiez toutes les Annonces : </font>
</div>
<br>
<br>
<div class="pull-right"  >
                  
<div class="dropdown">
  <button class="dropbtn">Choisir une service</button>
  <div class="dropdown-content">                                      
  @foreach($categorie_services as $categorie_service)
  <a href="{{url('/fournisseur/demandes/{$categorie_service->slug}')}}">{{$categorie_service->type_service}}</a>
  @endforeach
 
  </div>
</div>
</div>


</div>
</div>

<br>
@if ($message = Session::get('succes'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<br>
<br>

<div class="row" >
@foreach ($annonces as $annonce)

<div class="col-sm-6 box-item" >
<div class="card">


<table class="table   table-bordered "  style="background-color:#e1f1f0;">
<tr style="background-color:#4ECDC4;">
<td colspan="2"  style="text-align:center"> <h6><img src="{{asset('images')}}/{{ $annonce->user->avatar}}" width="40px;" height="40px;"  style="border-radius:50%;"   />  <strong  style=" margin-left:80px;">{{$annonce->user->name}}</strong>  <strong>{{$annonce->user->prenom	}} </strong> </h6></td>
</tr>
<tr >
<td style="width:50%" > Categorie : </td><td >{{ $annonce->type_categorie_id}} </td>
</tr>
<tr >
<td > Les services :</td><td >  @foreach($annonce->categorie_services as $anno)
								 {{ $anno->type_service}},
							  @endforeach</td>





</tr>
<tr >
<td > Description :</td><td >{{ $annonce->description}} </td>
</tr>
<tr >
<td >Date evenement :</td><td >{{ $annonce->date_event}} </td>
</tr>
<tr >
<td > Adresse evenement </td><td >{{ $annonce->adresse_event}} </td>
</tr>
<tr >
<td colspan="2" style="text-align:center"> 


<a class="btn btn-success" href="{{ url('fournisseur/create',$annonce->id) }}"> Demandes</a>
				

			
 </td>
</tr>
	

</table>


</div>
<br>
<br>

</div>

@endforeach	

</div>	






</div>

<br>
<br>
<br>


</div>

<div align="center">
  
  {!! $annonces->links() !!}
  </div>




</section>

@endsection