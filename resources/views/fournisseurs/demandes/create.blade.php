@extends('fournisseurs.index')
  
@section('content')

<section class="box-content box-1" >
    
<div style=" margin-left:100px;"  >
           <h2 > <a   href="{{ url('/fournisseur/demandes') }}" > <i class="fas fa-chevron-circle-left"></i> </a></h2> 
     
        </div>
			<div class="container"  >
				<div >
					<div class="col-lg-12" style="text-align:center">
						<h2> Demande</h2>
						<hr>
						
                        </div>
                        </div>
					
					
                    
   
<br>
     <br>
    
  
   <br>
   <br>
   <br>
   <br>
   <br>
   <br> <br>
   <br>
   <table   >
  
    <tr >
   
      <td style="width:40%"    >
      <div  class="card" >
      
      @if ($message = Session::get('succes'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
<br>
    
      
    <h4 style="text-align:center">Créer votre demande </h4>

    <br>
    <br>
    
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

    
        


        <div class=" col-sm-12 col-md-8 text-center" style=" margin-left:70px;">
        <button type="submit" class="btn btn-primary">Demander</button>.
                <button type="Reset" class="btn btn-danger">Annuler</button>
<br>
                
        </div>
   
       
</form>














    
    




</div>
      </td>


      <td  >

      </td>
      <td  style="width:40%"   >
      <div  class="card">
        


     

<div class="col-sm-12 box-item" >
<h4 style="text-align:center">Annonce </h4>
<br>

<table class="table   table-bordered "  style="background-color:#e1f1f0;" >
<tr style="background-color:#4ECDC4;">

 <td colspan="2"  style="text-align:center"> <h6><img src="{{asset('images')}}/{{ @$annonce->user->avatar}}" width="40px;" height="40px;"  style="border-radius:50%;"   />  <strong  style=" margin-left:80px;">{{@$annonce->user->name}}</strong>  <strong>{{@$annonce->user->prenom	}} </strong> </h6></td>

</tr>
<tr >
<td  > Categorie : </td><td >{{@$annonce->type_categorie_id}} </td>
</tr>
<tr >

<td > Les services :</td><td >  @foreach($annonce->categorie_services as $anno)
								 {{ $anno->type_service}},
							  @endforeach</td>

</tr>
<tr >
<td > Description :</td><td >{{ @$annonce->description}} </td>
</tr>
<tr >
<td >Date evenement :</td><td >{{ @$annonce->date_event}} </td>
</tr>
<tr >
<td > Adresse evenement </td><td >{{ @$annonce->adresse_event}} </td>
</tr>


	

</table>



</div>
</div>
	


      
      </td>
    
    </tr>
    </table>
   
   
</div>



</div>
			
			
			
			</div>






            </section>

@endsection