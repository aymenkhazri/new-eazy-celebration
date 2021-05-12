@extends('fournisseurs.index')
  
@section('content')
<br>
<br>
<br>
<br>                                

    
        <div style=" margin-left:100px;"  >
           <h2 > <a   href="{{ url('/indexdemande',$annonce->id) }}"> <i class="fas fa-chevron-circle-left"></i> </a></h2> 
     
        </div>
			<div class="container"  >
				<div >
					<div class="col-lg-12" style="text-align:center">
						<h2> Demande</h2>
						<hr>
						
                        </div>
                        </div>
					
					
                    
   

    
 
  
  
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
<br>
 
    <br>
    <br>

    <div class="row justify-content-center">
      
      <div class="col-lg-5 col-md-12">
          <div class="blog_post blog_style1 box_shadow1">
              
              <div class="blog_content bg-white">
                  <div class="blog_text"  >
               
                      <br>
                      <h4 style="text-align:center">Créer votre demande </h4>
                      
                      <br>
                      <br>
                     
                     
    <form action="{{ url('fournisseur/store',@$annonce->id) }}"  method="POST" >
   
   @csrf
   
       <div class=" col-sm-8 col-md-8"  style=" margin-left:70px;" >
           <div class="form-group">
           
               <input type="text" name="montant" class="form-control" placeholder="montant">
           </div>
       </div>
<br>
       
       
       <div class="col-sm-8 col-md-8" style=" margin-left:70px;">
           <div class="form-group">
             
              
               <textarea rows="4" cols="30" name="description" class="form-control" placeholder="description">
                  </textarea>
           </div>
       </div>

   
      <br> 
      <br> 


       <div class=" col-sm-12 col-md-8 text-center" style=" margin-left:70px;">
       <button type="submit" class="btn btn-primary btn-sm">Demander</button>
               <button type="Reset" class="btn btn-danger btn-sm">Annuler</button>
<br>
               
       </div>
  
      
</form>


                  </div>
                  
              </div>
              
          </div>
      </div>
    
  </div>
















    
    






@endsection