@extends('clients.index')
  
@section('content')


<br>
<br>





	



<!-- START SECTION BLOG -->
<div class="section small_pt pb_70">
         <div style=" margin-left:100px;"  >
           <h2 > <a   href="{{ url('/annonces') }}"> <i class="fas fa-chevron-circle-left"></i> </a></h2> 
     
         </div>
	<div class="container" >
    	<div class="row justify-content-center">
        	<div class="col-lg-6 col-md-8">
            	<div class="heading_s1 text-center">
                <h1>Evenements</h1>
					<hr>
                </div>
<br>
<br>


            </div>
        </div>
        
       <br>
       <br>
        <div class="row justify-content-center">
        @foreach ($demandes as $demande)
        	<div class="col-lg-5 col-md-6 " >
            	<div class="blog_post blog_style1 box_shadow1">
                	
                  
                    <div class="blog_content bg-white">
                    	<div class="blog_text"  >
                        <h6 class=" text-center" ><img src="{{asset('images')}}/{{ $demande->user->avatar}}" width="40px;" height="40px;"  style="border-radius:50%;"   />  <strong  style=" margin-left:10px;">{{$demande->user->name}}</strong>  <strong >{{$demande->user->prenom	}} </strong> </h6> 
                            <br>
                            <p> <strong>Montant : </strong> {{ $demande->montant}} DT</p>
								<p> <strong>Description : </strong> {{ $demande->description}}</p>
								
								
                        </div>
                        <a class="btn btn-fill-out btn-sm " href="" style=" margin-left:300px;">   Accepter  </a>
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</div>
<!-- END SECTION BLOG -->

@endsection