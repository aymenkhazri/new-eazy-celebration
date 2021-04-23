@extends('fournisseurs.index')
  
@section('content')


<section class="box-content box-1">
			<div class="container" id="services">
				<div class="row heading">
					<div class="col-lg-12" style="text-align:center">
						<h2>Annonces</h2>
						<hr>
							
						</div>

<br>

<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<br>
<br>
<font size="5" color="#4d1919">Vérifiez toutes les Annonces : </font>
</div>
<br>
<br>
<br>
<br>

</div>
</div>

<br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<br>
<br>

<div class="row" >
@foreach ($annonces as $annonce)

<div class="col-sm-5 box-item" >
<div class="card">


<table class="table   table-bordered "  style="background-color:#e1f1f0;">
<tr style="background-color:#4ECDC4;">
<td  style="text-align:center">Annonce n {{ ++$i }} </td><td style="text-align:center" > {{ $annonce->user_id}}</td>
</tr>
<tr >
<td  > Categorie : </td><td >{{ $annonce->type_categorie_id}} </td>
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


<a class="btn btn-success" href="{{ route('demandes.create') }}"> Demandes</a>
				

			
 </td>
</tr>
	

</table>


</div>
</div>
@endforeach	

</div>	






</div>



</div>

<div align="center">
  
  {!! $annonces->links() !!}
  </div>




</section>

@endsection