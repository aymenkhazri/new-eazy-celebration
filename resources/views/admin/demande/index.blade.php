@extends('admin.index')
  
@section('content')









<link rel="stylesheet" href="{{ asset('assets/css/stylee.css') }}">	



<!-- START SECTION BLOG -->
<div class="section small_pt pb_70">
        
	<div class="container-fluid" >
              <div align="center">
                <font    color="#bf4040" > <h1> ** Gestion des offres  ** </h1> </font>
                </div>



            </div>
        </div>
        
  
            
            
            
            <div class="row justify-content" style=" margin-left:140px;">
       
                <font size="5" color="#4d1919">Vérifiez toutes les offres : </font>
                </div>
         
         
                <br>
            <br> <br>
            <br>
      
        <div class="row justify-content-center">
        @foreach ($demandes as $demande)
        	<div class="col-lg-5 col-md-6 " >
            	<div class="blog_post blog_style1 box_shadow1">
                	
                  
                    <div class="blog_content bg-white">
                    	<div class="blog_text"  >
                        <p ><img src="{{asset('images')}}/{{ $demande->user->avatar}}" width="40px;" height="40px;"  style="border-radius:50%;"   />  <strong  style=" margin-left:10px;">{{$demande->user->name}}</strong>  <strong >{{$demande->user->prenom	}} </strong> <a class="btn btn-fill-out btn-sm " href="" style=" margin-left:260px;">   Annonce  </a> </p> 
                            <br>
                            <p> <strong>Montant : </strong> {{ $demande->montant}} DT    </p>
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
       
<div align="center">
  
  {!! $demandes->links() !!}
  </div>
<!-- END SECTION BLOG -->

@endsection