@extends('admin.index')
  
@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/styleeee.css') }}">


<!-- START SECTION BLOG -->
<div class="section small_pt pb_70">
         <div style=" margin-left:100px;"  >
           <h2 > <a   href="{{url('/admin/annonces')}}"> <i class="fas fa-chevron-circle-left"></i> </a></h2> 
     
         </div>
	<div class="container-fluid" >
    	<div class="row justify-content-center">
        	<div class="col-lg-4 col-md-8">
            	<div class="heading_s1 text-center">
                <h1>Demandes</h1>
					<hr>
                </div>
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
                        <P class=" text-center" ><img src="{{asset('images')}}/{{ $demande->user->avatar}}" width="40px;" height="40px;"  style="border-radius:50%;"   />  <strong  style=" margin-left:10px;">{{$demande->user->name}}</strong>  <strong >{{$demande->user->prenom	}} </strong> </P> 
                            <br>
                            <p> <strong>Montant : </strong> {{ $demande->montant}} DT</p>
								<p> <strong>Description : </strong> {{ $demande->description}}</p>
								
								
                        </div>
                        <br>    
                        <div style="text-align:center"> 
                                    <form action="{{ route('annonces.destroy',$demande->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-info btn-sm" href="{{ route('annonces.show',$demande->id) }}">Avertir</a>

                                                    <a class="btn btn-warning btn-sm" href="{{ route('annonces.edit',$demande->id) }}">Banner</a>
                                                    

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
        
    </div>
</div>
<!-- END SECTION BLOG -->

@endsection