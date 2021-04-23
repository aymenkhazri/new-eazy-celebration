@extends('fournisseurs.index')

@section('content')
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>

<div class="container" >
    <div align="center">
     <h1>  </h1>
     <div class="row heading">
					<div class="col-lg-12" style="text-align:center">
						<h2>Modifier votre Profile </h2>
						<hr>
				
					</div>
                    <br>
<br>
     <br>
     <div style=" margin-left:1200px;" >
            <a class="btn btn-primary" data-toggle="modal" data-target="#profil" >Profile</a>
          
        </div>
   </div>
   <br>
   <br>
   
   
   <table  >
  
    <tr>
   
      <td >
      <div class="card"> 
      
      
      @if ($message = Session::get('succes'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br>
      
    <font size="4" color="#4d1919" align="center">Mettre à jour l'image de profil </font>

    <br>
      <br>

      <div align="center">
    <img src="{{asset('images')}}/{{  Auth::user()->avatar }}" style="width:170px; height:170px;  border-radius:50%; "> 
    </div>
    <br>
    <br>
      <br>
    <form enctype="multipart/form-data" action="{{  url('/user/edit_profile') }}" method="POST">
    <br>
    

                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <br>
                <div class=" text-center">
                 <button type="submit" class="btn btn-primary">Modifier</button>
                 </div>
    
    </form>

    
</div>


</div>
      
      </td>

      <td >
        
        
<div class="row"  style=" margin-left:400px;"  >

<div class="card">       



<form action="{{ route('update_fournisseurs')}}" method="POST">
        @csrf
       
 <table >

 
 @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <br>
@if(session('error'))
<div class="alert alert-danger" role="alert">
{{session('error')}}
</div>
@endif
 <br>

  <tr>
    <td >
       
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom :</strong>
                    <input type="text" name="name" value="{{ Auth::user()->name}}" class="form-control" placeholder="nom">
                </div>
            </div>





            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ Auth::user()->email}}" class="form-control" placeholder="email">
                </div>
            </div>


         
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Genre:</strong>
                    <select name="genre" class="form-control">
                    <option value="{{ Auth::user()->genre}}">{{Auth::user()->genre}}</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
                   
                </div>
            </div>


         

            
        
   </td>
            <td >

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prenom :</strong>
                    <input type="text" name="prenom" value="{{ Auth::user()->prenom}}" class="form-control" placeholder="prenom">
                </div>
            </div>
            





          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date de naissance:</strong>
                    <input type="text" name="date_naissance" value="{{ Auth::user()->date_naissance}}" class="form-control" placeholder="date_naissance">
                </div>
            </div>


            
    
            
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adresse:</strong>
                    <input type="text" name="adresse" value="{{ Auth::user()->adresse}}" class="form-control" placeholder="adresse">
                </div>
            </div>
            </td>
    </tr>
    <tr>  
    <td >
          
            <div class="col-xs-12 col-sm-12 col-md-12"  >
                <div class="form-group" >
                    <strong>Telephone:</strong>
                    <input type="text" name="telephone" value="{{ Auth::user()->telephone}}" class="form-control" placeholder="telephone">
                </div>
            </div>
            </td>

            <td >
          
          <div class="col-xs-12 col-sm-12 col-md-12"  >
              <div class="form-group" >
                  <strong>Type de service :</strong>
                 
                  <select name="type_service_id" class="form-control">
                  <option ></option>
              @foreach($categorie_services as $categorie_service)
              <option value="{{$categorie_service->type_service}}" @if($categorie_service->type_service === Auth::user()->type_service_id) selected @endif>
              
               {{$categorie_service->type_service}}</option>
              @endforeach
          </select>
              </div>
          </div>
          </td>
            </tr>
            <br>
   
      <tr>  
      <td colspan="2">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="Reset" class="btn btn-danger">Annuler</button>
            </div>
        </div>
        </td>
        </tr>
    </form>
   
    </div>
    </table>
   

</div>
      
      </td>
    
    </tr>
    </table>
   
   
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>










@endsection