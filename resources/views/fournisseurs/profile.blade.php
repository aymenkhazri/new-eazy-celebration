@extends('fournisseurs.index')
  
@section('content')


<section class="box-content box-1">
			<div class="container" id="services">
				<div class="row heading">
					<div class="col-lg-12">
						<h2>Profile</h2>
						<hr>
				
					</div>
				</div>
			
			<a  href="{{  url('/fournisseur/edit_profile') }}" > <button type="submit" style=" margin-left:600px;" class=" btn btn-sm btn-primary" > Modifier</button></a>
    

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
					
				 <h3>Prenom : {{ $user->prenom }}</h3>
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

		 <div class="row" >
	<div class="col-xs-12 col-sm-12 col-md-12">
				 <div class="form-group">
					
				 <h3>Date de naissance: : {{ $user->date_naissance }}</h3>
				 </div>
			 </div>    
		 </div>
		 <div class="row" >
	<div class="col-xs-12 col-sm-12 col-md-12">
				 <div class="form-group">
					
				 <h3>Adresse : {{ $user->adresse }}</h3>
				 </div>
			 </div>    
		 </div>
		 <div class="row" >
	<div class="col-xs-12 col-sm-12 col-md-12">
				 <div class="form-group">
					
				 <h3>Telephone : {{ $user->telephone }}</h3>
				 </div>
			 </div>    
		 </div>
		

			</div>




            </section>

@endsection