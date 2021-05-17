@extends('admin.index')
  
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/stylee.css') }}">
			<div class="container" >
            <br>
            <br>
            <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
            <div class="heading_s1 text-center">
                <h1>Annonces</h1>
					<hr>
                    </div>
                </div>
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
   
    <br>
    

    <div class="row justify-content-center">
        @foreach ($annonces as $annonce)
        	<div class="col-lg-4 col-md-6">
            	<div class="blog_post blog_style1 box_shadow1">
                	<div class="blog_img">
                        <a href="blog-single.html">
                        <img src="{{asset('images')}}/{{ $annonce->categorie_service->image}}"  height="180px;" alt="product_img1">
                        </a>
                   
                    </div>
                    <div class=" bg-white"  >
                    <br>
                    <strong style=" margin-left:15px;"> <img src="{{asset('images')}}/{{ $annonce->user->avatar}}" width="40px;" height="40px;"  style="border-radius:50%;"   /> </strong>  <strong  style=" margin-left:10px;">{{$annonce->user->name}}</strong>  <strong >{{$annonce->user->prenom	}} </strong>  <strong > <a class="btn btn-fill-out btn-sm " href="{{ url('/admin/filtre_demande',$annonce->id) }}" style=" margin-left:40px;">   Demandes  </a> </strong> 
                     
                    </div>
                    <div class="blog_content bg-white">
                    	<div class="blog_text"  >
                       
                      
                            <p> <strong>Evenement : </strong> {{ $annonce->categorie_evenement->type_evenement}}</p>
								<p> <strong>Service : </strong> {{ $annonce->categorie_service->type_service}}</p>
								<p> <strong>Description : </strong> {{ $annonce->description}}</p>
								<p> <strong>Date d'evenement : </strong> {{ $annonce->date_event}}</p>
								<p> <strong>Adresse de evenement : </strong> {{ $annonce->adresse_event}}</p>
                        </div>
                        <br>
                        <div style="text-align:center"> 
                                    <form action="{{ route('annonces.destroy',$annonce->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-info btn-sm" href="{{ route('annonces.show',$annonce->id) }}">Avertir</a>

                                                    <a class="btn btn-warning btn-sm" href="{{ route('annonces.edit',$annonce->id) }}">Banner</a>
                                                    

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm">Suppremer</button>
                                                </form> 
                                   
                                    </div>
                    </div>
                    
                </div>
                
            </div>
            @endforeach
        </div>

                <br>
                <br>
               
                
               
               
<br>

    
       
   <div align="center">
  
    {!! $annonces->links() !!}
    </div>

			
			
			
			</div>






           
@endsection