@extends('admin.index')
  
@section('content')
			<div class="container" >

            <div style="text-align:center">
             <font    color="#bf4040" > <h1> **   Annonces  ** </h1> </font>
            </div>
           

					<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <br>
            <br>
                <font size="5" color="#4d1919">Vérifiez toutes les Annonces : </font>
            </div>
            <br>
            <br>
            <br>
            <br>
            
        </div>
    </div>
   
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br>
    <br>

    <div class="row"   >
				@foreach ($annonces as $annonce)
               
					<div class="col-sm-6 box-item" >
                    <div class="carde">
                  
                    
					<table class="table   table-bordered "  style="background-color:#e1f1f0;">
                    <tr style="background-color:#4ECDC4;">
					<td  style="text-align:center">Annonce n {{ ++$i }} </td><td style="text-align:center" ><a class="btn btn-primary" href="">Demandes</a></td>
					</tr>
					<tr >
					<td  > Categorie : </td><td >{{ $annonce->type_categorie_id}} </td>
					</tr>
					<tr >
					<td > Les services :</td><td >  @foreach($annonce->categorie_services as $anno)
                                                     {{ $anno->type_service}},
                                                  @endforeach</td>


            


					</tr>
					<tr >
					<td > Description :</td><td >{{ $annonce->description}} </td>
					</tr>
					<tr >
					<td >Date evenement :</td><td >{{ $annonce->date_event}} </td>
					</tr>
					<tr >
					<td > Adresse evenement </td><td >{{ $annonce->adresse_event}} </td>
					</tr>
                    <tr >
					<td colspan="2" style="text-align:center"> 
                    
                    <form action="{{ route('annonces.destroy',$annonce->id) }}" method="POST">
                                    
                                    <a class="btn btn-info" href="{{ route('annonces.show',$annonce->id) }}"><i class="far fa-eye"></i></a>

                                    <a class="btn btn-warning" href="{{ route('annonces.edit',$annonce->id) }}"><i class="far fa-edit"></i></a>
                                    

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                 </form> 
                     </td>
					</tr>
						
					
					</table>
				
                    
                    </div>
					</div>
					@endforeach	
					
                </div>	

                <br>
                <br>
               
                
               
               
<br>

    
       
   <div align="center">
  
    {!! $annonces->links() !!}
    </div>

			
			
			
			</div>






           
@endsection