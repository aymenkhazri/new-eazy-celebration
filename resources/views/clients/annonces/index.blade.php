@extends('clients.index')
  
@section('content')
<br>
<br>
<br>
<br>
<br>








  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 




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
   
    
  
    <br>

	@if ($errors->any())
    <div class="alert alert-danger">
        <strong>avertissement!</strong> Veuillez vérifier votre code d'entrée<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif		
			      
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br>
    <br>
   

            <!-- START SECTION SHOP -->

	<div class="container">
    	<div class="row">
			<div class="col-12">
            	<div class="row align-items-center mb-4 pb-1">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="product_header_left">
                               <div >
                                  <a class="btn btn-success btn-sm  ml-2" href="{{ route('annoncess.create') }}" data-toggle="modal" data-target="#create">  Créer une nouvelle Annonce</a>
                              </div>
                            </div>
                            <div class="product_header_right">
                            	<div class="products_view">
                                    <a href="javascript:Void(0);" class="shorting_icon grid"><i class="ti-view-grid"></i></a>
                                    <a href="javascript:Void(0);" class="shorting_icon list active"><i class="ti-layout-list-thumb"></i></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div> 
                @foreach ($annonces as $annonce)
                <div class="row shop_container list  ">
               
                    <div class="col-lg-5 col-md-12 col-12 ">
                        <div class="product "  style="  border-radius: 20px;">
                            <div class="product_img " style="  border-radius: 20px;">
                                <a >
                                    <img src="{{asset('images')}}/{{ $annonce->categorie_service->image}}" width="260px;" height="330px;" alt="product_img1">
                                </a>
                               
                            </div>
                           


                                        
     
                               <br>
                              
                               <p>  <strong> Evenement :  </strong> {{ $annonce->categorie_evenement->type_evenement}}    <a class="btn btn-fill-out btn-sm " href="{{ url('/filtre_demande',$annonce->id) }}" style=" margin-left:470px;">   Demandes  </a> </p>
                             
                                  
                                 
                               <p>   <strong >  Service : </strong> {{ $annonce->categorie_service->type_service}} </p>

                                                                
                            


                                    
                                    
                               <p>   <strong > Description : </strong>{{ $annonce->description}} </p>
                                   
                                    
                                  
                               <p>     <strong >Date evenement :   </strong>{{ $annonce->date_event}} </p>
                                 
                                    
                                   
                                <strong > Adresse evenement : </strong>{{ $annonce->adresse_event}} 
                                   
                                
                                    
                                    <div style="text-align:center"> 
                                  
                                                    
                                                  <a  data-id="{{ $annonce->id}}" data-type_evenement="{{ $annonce->categorie_evenement->type_evenement}}"   data-type_service="{{ $annonce->categorie_service->type_service}}" data-description="{{ $annonce->description}}"  data-date_event="{{ $annonce->date_event}}"  data-adresse_event="{{ $annonce->adresse_event}}"
                                                     class="btn btn-info btn-sm   " type="button"  data-toggle="modal" data-target="#show" href=""><i class="far fa-eye"></i></a>

                    
                                                    <a  data-id="{{ $annonce->id}}" data-type_evenement="{{ $annonce->categorie_evenement->type_evenement}}"   data-type_service="{{ $annonce->categorie_service->type_service}}" data-description="{{ $annonce->description}}"  data-date_event="{{ $annonce->date_event}}"  data-adresse_event="{{ $annonce->adresse_event}}"
                                                     class="btn btn-warning btn-sm   " type="button"  data-toggle="modal" data-target="#edit" href=""><i class="far fa-edit"></i></a>


                                                    <button class="btn btn-danger btn-sm " data-catid={{$annonce->id}} data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i></button>
                   
                                   
                                    </div>
                                    
                                        
                                    
                                  



                            
                        </div>

                    </div>
                 
                    
                </div>
                @endforeach
        		<div class="row">
                    <div class="col-12">
                       
                    {!! $annonces->links() !!}      
                     <br>    
                     <br>    
                     <br>    
                     <br>    
                       
                    </div>
                </div>
        	</div>
        </div>
    </div>

<!-- END SECTION SHOP -->

<div class="modal  fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"  style="background-color:#4ECDC4;">
      <h4 class="modal-title text-center" id="myModalLabel"style="color:#ffff;" >Créer une nouvelle annonce</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <form action="{{ route('annoncess.store') }}" method="POST">

      @csrf
	      <div class="modal-body ">
			
        

       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong align="right">Evenement :</strong>
                <select name="categorie_evenement_id" class="form-control">
           
                <option disabled selected >type de evenement</option>  
                    @foreach($type_categories as $type_categorie)
                    <option value="{{$type_categorie->id}}">{{$type_categorie->type_evenement}}</option>
                    @endforeach
                </select>
                
            </div>
        </div>
        
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Service :</strong>
                <select name="categorie_service_id" class="form-control">
           
                <option disabled  selected>type de service</option>  
                @foreach($type_services as $type_service)
       
              <option value="{{$type_service->id}}">{{$type_service->type_service}}</option>
                @endforeach
              </select>
                
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
               <textarea  rows="3" cols="33" class="form-control" name="description" id="description"  >
                </textarea>
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date de evenement:</strong>
                <input type="text" name="date_event" class="form-control" placeholder="date de evenement">
            </div>
        </div>


       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Adresse de evenement:</strong>
                <input type="text" name="adresse_event" class="form-control" placeholder="motpasse">
            </div>
            </div>
        </div>


	    
        
	      <div class="modal-footer">
	        <button type="Reset"class="btn btn-danger btn-sm" data-dismiss="modal"> Annuler</button>
	        <button type="submit" class="btn btn-primary btn-sm">Enregistrer</button>
	      </div>
      </form>
    </div>
  </div>
</div>



<div class="modal  fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"  style="background-color:#4ECDC4;">
      <h4 class="modal-title text-center" id="myModalLabel"style="color:#ffff;" >Modifier une annonce</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <form action="{{route('annoncess.update','test')}}" method="POST">
      {{method_field('patch')}}
      		{{csrf_field()}}
	      <div class="modal-body ">
			
        <br>
        <input type="hidden" name="id" id="id" value="">
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong align="right">Evenement :</strong>
                <input   id="type_evenement" class="for-control" >
                <select name="type_evenement" id="type_evenement"   class="form-control">
           
          
                    @foreach($type_categories as $type_categorie)
                    <option value="{{$type_categorie->id}}" >{{$type_categorie->type_evenement}}</option>
                    @endforeach
                </select>
        
            </div>
        </div>
        
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Service :</strong>
                <input   id="type_service" class="for-control" >
                <select name="type_service"  id="type_service"  class="form-control">
           
             
                @foreach($type_services as $type_service)
       
              <option value="{{$type_service->id}}">{{$type_service->type_service}}</option>
                @endforeach
              </select>
            
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
            
                <textarea  rows="3" cols="33" class="form-control" name="description" id="description"  >
                </textarea>
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date de evenement:</strong>
                <input type="text" name="date_event" id="date_event" class="form-control" >
            </div>
        </div>


       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Adresse de evenement:</strong>
                <input type="text" name="adresse_event" id="adresse_event" class="form-control" >
            </div>
            </div>
        </div>


	    
        
	      <div class="modal-footer">
	        <button type="Reset"class="btn btn-danger btn-sm" data-dismiss="modal"> Annuler</button>
	        <button type="submit" class="btn btn-primary btn-sm">Enregistrer</button>
	      </div>
      </form>
    </div>
  </div>
</div>




<div class="modal  fade" id="show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"  style="background-color:#4ECDC4;">
      <h4 class="modal-title text-center" id="myModalLabel"style="color:#ffff;" >Afficher une annonce</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <form action="{{route('annoncess.update','test')}}" method="POST">
    
	      <div class="modal-body ">
			
        <br>
        <input type="hidden" name="id" id="id" value="">
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong align="right">Evenement :</strong>
                
                <input type="text" name="type_evenement" id="type_evenement" class="form-control" >
                
                
                
            </div>
        </div>
        
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Service :</strong>
                <input type="text" name="type_service" id="type_service" class="form-control" >
                
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
            
                <textarea  rows="3" cols="33" class="form-control" name="description" id="description"  >
                </textarea>
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date de evenement:</strong>
                <input type="text" name="date_event" id="date_event" class="form-control" >
            </div>
        </div>


       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Adresse de evenement:</strong>
                <input type="text" name="adresse_event" id="adresse_event" class="form-control" >
            </div>
            </div>
        </div>


	    
        
	      <div class="modal-footer">
	        <button type="Reset"class="btn btn-danger btn-sm" data-dismiss="modal"> Annuler</button>
	      
	      </div>
      </form>
    </div>
  </div>
</div>





<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#4ECDC4;">
      <h4 class=" text-center" id="myModalLabel" style="color:#ffff;" >Confirmation de suppression</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <form action="{{ route('annoncess.destroy',$annonce->id) }}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p >
                    
                  <h5 class="text-center">  Êtes-vous sûr de vouloir le supprimer la annonce ?</h5>
				</p>
	      		<input type="hidden" name="annonce_id" id="cat_id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Non, Annuler</button>
	        <button type="submit" class="btn btn-danger btn-sm">Oui, Supprimer</button>
	      </div>
      </form>
    </div>
  </div>
</div>


<script src="{{asset('js/app.js')}}"></script>
<script>

$('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('catid') 
      var modal = $(this)
      modal.find('.modal-body #cat_id').val(cat_id);
})


</script>




<script>

$('#edit').on('show.bs.modal',function(event){
var button =$(event.relatedTarget)
var id  =button.data('id')
var  type_evenement =button.data('type_evenement')
var  type_service =button.data('type_service')
var description  =button.data('description')
var date_event  =button.data('date_event')
var adresse_event  =button.data('adresse_event')

var modal =$(this)

modal.find('.modal-body #id').val(id);
modal.find('.modal-body #type_evenement').val(type_evenement);
modal.find('.modal-body #type_service').val(type_service);
modal.find('.modal-body #description').val(description);
modal.find('.modal-body #date_event').val(date_event);
modal.find('.modal-body #adresse_event').val(adresse_event);

});



</script>

<script>

$('#show').on('show.bs.modal',function(event){
var button =$(event.relatedTarget)
var id  =button.data('id')
var  type_evenement =button.data('type_evenement')
var  type_service =button.data('type_service')
var description  =button.data('description')
var date_event  =button.data('date_event')
var adresse_event  =button.data('adresse_event')

var modal =$(this)

modal.find('.modal-body #id').val(id);
modal.find('.modal-body #type_evenement').val(type_evenement);
modal.find('.modal-body #type_service').val(type_service);
modal.find('.modal-body #description').val(description);
modal.find('.modal-body #date_event').val(date_event);
modal.find('.modal-body #adresse_event').val(adresse_event);

});

</script>

<style>
.w-5{
    display:none ;
}

.footer{

padding: 30px 0 !important;
position: relative !important;
}
.for-control {
    color: #000;
    box-shadow: none;
    height: 30px;
    padding: 8px 15px;
}
.for-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>



@endsection