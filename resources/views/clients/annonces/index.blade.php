@extends('clients.index')
  
@section('content')
<br>
<br>
<br>
<br>



			<div class="container" >
				
					<div class="col-lg-12" style="text-align:center">
						<h2>Gestion des Annonces</h2>
						<hr>
						
					</div>

             
					<div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
            <br>
            <br>
                <font size="5" color="#4d1919">Vérifiez toutes les Annonces : </font>
            </div>
           
        
           
        </div>
    </div>
   
    
  

			
			      
    @if ($message = Session::get('success'))
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
                               <div >
                                  <a class="btn btn-success btn-sm  ml-2" href="{{ route('annonces.create') }}">  Créer une nouvelle Annonce</a>
                              </div>
                            </div>
                            <div class="product_header_right">
                            	<div class="products_view">
                                    <a href="javascript:Void(0);" class="shorting_icon grid"><i class="ti-view-grid"></i></a>
                                    <a href="javascript:Void(0);" class="shorting_icon list active"><i class="ti-layout-list-thumb"></i></a>
                                </div>
                                <div class="custom_select">
                                    <select class="form-control ">
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
                <div class="row shop_container list  ">
               
                    <div class="col-lg-5 col-md-4 col-6 ">
                        <div class="product "  style="  border-radius: 20px;">
                            <div class="product_img " style="  border-radius: 20px;">
                                <a >
                                    <img src="{{asset('images')}}/{{ $annonce->categorie_service->image}}" width="250px;" height="300px;" alt="product_img1">
                                </a>
                               
                            </div>
                           


                                        
     
                               <br>
                              
                               <p>  <strong> Evenement :  </strong> {{ $annonce->categorie_evenement->type_evenement}}    <a class="btn btn-fill-out btn-sm " href="{{ url('/filtre_demande',$annonce->id) }}" style=" margin-left:470px;">   Demandes  </a> </p>
                             
                                  
                                 
                               <p>   <strong >  Service : </strong> {{ $annonce->categorie_service->type_service}} </p>

                                                                
                            


                                    
                                    
                               <p>   <strong > Description : </strong>{{ $annonce->description}} </p>
                                   
                                    
                                  
                               <p>     <strong >Date evenement :   </strong>{{ $annonce->date_event}} </p>
                                 
                                    
                                   
                                <strong > Adresse evenement : </strong>{{ $annonce->adresse_event}} 
                                   
                                
                                    
                                    <div style="text-align:center"> 
                                    <form action="{{ route('annonces.destroy',$annonce->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-info btn-sm" href="{{ route('annonces.show',$annonce->id) }}"><i class="far fa-eye"></i></a>

                                                    <a class="btn btn-warning btn-sm" href="{{ route('annonces.edit',$annonce->id) }}"><i class="far fa-edit"></i></a>
                                                    

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                                                </form> 
                                   
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
<!-- END SECTION SHOP -->

<style>
.w-5{
    display:none ;
}

.footer{

padding: 30px 0 !important;
position: relative !important;
}
</style>



@endsection