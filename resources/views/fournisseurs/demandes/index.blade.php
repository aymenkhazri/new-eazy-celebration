@extends('fournisseurs.index')
  
@section('content')
<br>
<br>
<br>
<br>                                

    
        <div style=" margin-left:100px;"  >
           <h2 > <a   href="{{ url('/demandes') }}"> <i class="fas fa-chevron-circle-left"></i> </a></h2> 
     
        </div>
			<div class="container"  >
				<div >
					<div class="col-lg-12" style="text-align:center">
						<h2> Demande</h2>
					
						
                        </div>
                        </div>
					
					
                    
   

    
               
  
  
   <table  class="table    " >
  
    <tr >
   
      <td style="width:40%"    >
      <div >
      
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
<br>
 
    <br>

    <div class="pull-right">
                <a class="btn btn-success btn-sm"href="{{ url('fournisseur/create',$annonce->id) }}">  Créer votre demande</a>
            </div> 
           
    <br>
    
    @foreach ($demandes as $demande) 
     
    <div class="row justify-content-center">
      
      <div class="col-lg-12 col-md-12">
          <div class="blog_post blog_style1 box_shadow1">
              
              <div class="blog_content bg-white">
                  <div class="blog_text"  >
               
                      <br>
                      <h4 style="text-align:center">Votre demande </h4>
                      
                      <br>
                 
                 
                     
                               

   

   
       <div class=" col-sm-8 col-md-8"  style=" margin-left:70px;" >
           <div class="form-group">
          <strong> Montant : </strong> 
               <input name="montant" value="{{ $demande->montant}} DT" class="form-control" >
           </div>
       </div>
<br>
       
       
       <div class=" col-sm-8 col-md-10"  style=" margin-left:40px;">
           <div  >
             
           <strong>Description : </strong> 
               {{ $demande->description}}
               
           </div>
       </div>

   
      <br> 
     
     


       <div class=" col-sm-12 col-md-8 text-center" style=" margin-left:70px;">
   
     
   
   

       <a class="btn btn-danger btn-sm " href="{{  url('destroydemande',$demande->id) }}">Supprimer</a>



       <br> 

                   



               
       </div>
  
      
     


                  </div>
                  
              </div>
              
          </div>
      </div>
    
  </div>
  @endforeach


  @forelse ($AccepterRefusers as $AccepterRefuser) 
     
     <div class="row justify-content-center">
       
       <div class="col-lg-12 col-md-12">
           <div class="blog_post blog_style1 box_shadow1">
               
               <div class="blog_content bg-white">
                   <div class="blog_text"  >
                
                       <br>
                       <h4 style="text-align:center">Réponse sur votre demande </h4>
                       
                      
                      
 
    
 
    
        <div class=" col-sm-12 col-md-12"   >
         <strong> {{ $AccepterRefuser->message}} </strong> 
            
        
        </div>
 <br>
        
        
      
 
    
 
 
        <div class=" col-sm-12 col-md-8 text-center" style=" margin-left:70px;">
    
      
    
    
 
        <a class="btn btn-info btn-sm " href="{{  url('/boit_chat') }}">Discuter</a>
 
        @empty
         <p> aaa</p>
 
        <br> 
 
                    
 
 <br>
 
                
        </div>
   
       
      
 
 
                   </div>
                   
               </div>
               
           </div>
       </div>
     
   </div>
   @endforelse












    
    




</div>
      </td>


      <td  >

      </td>
      <td  style="width:40%"   >
      <div >

<br>
<br>
<br>
<br>
      <div class="row justify-content-center">
      
        	<div class="col-lg-12 col-md-12">
            	<div class="blog_post blog_style1 box_shadow1">
                
                	<div class="blog_img">
                    
                        <a href="blog-single.html">
                        <img src="{{asset('images')}}/{{ $annonce->categorie_service->image}}"  height="150px;" alt="product_img1">
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                    	<div class="blog_text"  >
                        <p>   <strong>Anonnce de  : </strong>  {{$annonce->user->name}}  {{$annonce->user->prenom	}} </p>
                        
                            <p> <strong>Evenement : </strong> {{ $annonce->categorie_evenement->type_evenement}}</p>
								<p> <strong>Service : </strong> {{ $annonce->categorie_service->type_service}}</p>
								<p> <strong>Description : </strong> {{ $annonce->description}}</p>
								<p> <strong>Date d'evenement : </strong> {{ $annonce->date_event}}</p>
								<p> <strong>Adresse de evenement : </strong> {{ $annonce->adresse_event}}</p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
          
        </div>
</div>
	


      
      </td>
    
    </tr>
    </table>
   
   
</div>



</div>
			
			
			
			</div>






            <br>
            <br>
            <br>
            <br>

@endsection