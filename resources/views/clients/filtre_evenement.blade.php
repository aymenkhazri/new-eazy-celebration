@extends('clients.index')
  
@section('content')


<br>
<br>





	



<!-- START SECTION BLOG -->
<div class="section small_pt pb_70">
         <div style=" margin-left:100px;"  >
           <h2 > <a   href="{{ url('/evenementss') }}"> <i class="fas fa-chevron-circle-left"></i> </a></h2> 
     
         </div>
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-lg-6 col-md-8">
            	<div class="heading_s1 text-center">
                <h1>Evenements</h1>
					<hr>
                </div>
<br>
<br>

                <h5 class="leads text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</h5>
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
                        <img src="{{asset('images')}}/{{ $annonce->categorie_evenement->image}}"  height="180px;" alt="product_img1">
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                    	<div class="blog_text"  >
                        <h6 class=" text-center" ><img src="{{asset('images')}}/{{ $annonce->user->avatar}}" width="40px;" height="40px;"  style="border-radius:50%;"   />  <strong  style=" margin-left:10px;">{{$annonce->user->name}}</strong>  <strong >{{$annonce->user->prenom	}} </strong> </h6> 
                            <br>
                            <p> <strong>Evenement : </strong> {{ $annonce->categorie_evenement->type_evenement}}</p>
								<p> <strong>Service : </strong> {{ $annonce->categorie_service->type_service}}</p>
								<p> <strong>Description : </strong> {{ $annonce->description}}</p>
								<p> <strong>Date d'evenement : </strong> {{ $annonce->date_event}}</p>
								<p> <strong>Adresse de evenement : </strong> {{ $annonce->adresse_event}}</p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</div>
<!-- END SECTION BLOG -->

@endsection