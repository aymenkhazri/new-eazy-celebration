@extends('fournisseurs.index')
  
@section('content')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<br>
<br>
<br>
<br>  
<br>


			<div class="container" >
				<div >
					<div class="col-lg-12" style="text-align:center">
						<h2>Annonces</h2>
						<hr>
							
						</div>

 







		 




<br>
<br>
<font size="5" color="#4d1919">Vérifiez toutes les Annonces : </font>
@if ($message = Session::get('succes'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


            <!-- START SECTION SHOP -->
            <div class="section">
	<div class="container">
    	<div class="row">
			<div class="col-12">
            	<div class="row align-items-center mb-4 pb-1">
                    <div class="col-12">
                        <div class="product_header">
                        <div class="product_header_left">
                                <div class="form-control custom_select">




                                <div class="dropdown  ">
                                    <a class="btn btn  btn-sm  " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Choisir une service
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    @foreach($categorie_services as $categorie_service)
                                        <a class="dropdown-item" href="{{ url('/filter',@$categorie_service->id) }}">{{$categorie_service->type_service}}</a>
                                        @endforeach
                                       
                                    </div>
                                    </div>









                                   
                                </div>
                            </div>
                            <div class="product_header_right">
                            	<div class="products_view">
                                    <a href="javascript:Void(0);" class="shorting_icon grid"><i class="ti-view-grid"></i></a>
                                    <a href="javascript:Void(0);" class="shorting_icon list active"><i class="ti-layout-list-thumb"></i></a>
                                </div>
                                <div class="custom_select">
                                    <select class="form-control">
                                        <option value="">Showing</option>
                                        <option value="9">9</option>
                                        <option value="12">12</option>
                                        <option value="18">18</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                @foreach ($annonces as $annonce)
                <div class="row shop_container list">
               
                    <div class="col-lg-5 col-md-4 col-6 ">
                        <div class="product " style="  border-radius: 20px;" >
                            <div class="product_img  " style="  border-radius: 20px;" >
                                <a href="shop-product-detail.html">
                                <img src="{{asset('images')}}/{{ $annonce->categorie_service->image}}" width="250px;" height="305px;"alt="product_img1">
                                </a>
                               
                            </div>
                           


                                        
                           <br>
               
                               
                           <p>     <strong> Evenement : </strong><td style="text-align:center ;" >{{ $annonce->categorie_evenement->type_evenement}} <strong style=" margin-left:430px;"> <img src="{{asset('images')}}/{{ $annonce->user->avatar}}" width="40px;" height="40px;"  style="border-radius:50%;"   />  <strong  style=" margin-left:10px;">{{$annonce->user->name}}</strong>  <strong >{{$annonce->user->prenom	}} </strong></strong> </td> </p>
                               
                                    
                                 
                                  <p>  <strong >  Service : </strong> {{ $annonce->categorie_service->type_service}}</p>

                                                               
                            


                                    
                                    
                                  <p> <strong > Description : </strong><td >{{ $annonce->description}} </p>
                                   
                                   
                                  
                                    <p>  <strong >Date evenement : </strong><td >{{ $annonce->date_event}} </p>
                                 
                                  
                                   
                                      <strong > Adresse evenement : </strong><td >{{ $annonce->adresse_event}} 
                                   
                                    
                                    
                                    <div style="text-align:center"> 
                                   
                                                    
                                                    <a class="btn btn-info btn-sm" href="{{ url('indexdemande',$annonce->id) }}">Demander</a>

                                                   
                                                    

                                                   
                                   
                                    </div>
                                    
                                        
                                    
                                  



                            
                        </div>

                    </div>
                 
                    
                </div>
                @endforeach
        		<div class="row">
                    <div class="col-12">
                       
                            {!! $annonces->links() !!}
                         
                       
                    </div>
                </div>
        	</div>
        </div>
    </div>
</div>
</div>

<!-- END SECTION SHOP -->

<style>
.w-5{
    display:none ;
}


</style>





@endsection