@extends('superviseur.index')
  
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<link rel="stylesheet" href="{{ asset('assets/css/styleeee.css') }}">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


			<div style="width: 75%; margin-left:220px;" >
            <br>
            <br>
         
           
         
            <div align="center">
                <font  size="6.5"   color="#4d1919" >  ** Gestion des Annonces  **  </font>
                </div>
                 
              
               



					<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <br>
            <br>
       
                <font size="5" color="#4d1919">Vérifiez toutes les Annonces : </font>
            </div>
         
            
      

    </div>
    </div>
    <br>
        @if ($message = Session::get('success'))
        <div class="alert alert-success" style="text-align:center" >
            <p>{{ $message }}</p>
        </div>
         @endif

   
    <br>
    

    <div class="row justify-content-center">
        @foreach ($annonces as $annonce)
        	<div class="col-lg-4 col-md-">
            	<div class="blog_post blog_style1 box_shadow1">
                	<div class="blog_img">
                        <a href="blog-single.html">
                        <img src="{{asset('images')}}/{{ $annonce->categorie_service->image}}"  height="180px;" alt="product_img1">
                        <a class="A btn btn-fill-out btn-sm " href="{{ url('/admin/filtre_demande',$annonce->id) }}" >   Les Offres  </a> 
                        </a>
                   
                    </div>
                    <div class=" bg-white"  >
                    <br>
                    <tr>
                    <strong style=" margin-left:15px;" > <img src="{{asset('images')}}/{{ $annonce->user->avatar}}" width="40px;" height="40px;"  style="border-radius:50%;"   /> </strong>  <strong  style=" margin-left:10px;" >{{$annonce->user->name}}</strong>  <strong  >{{$annonce->user->prenom	}} </strong>    <span  style=" margin-left:100px;">
          @if( $annonce->user->isban=='0')
           <label style=" border-radius:10%"  class="B btn py-1 btn-primary">Pas banné</label>
            @elseif($annonce->user->isban=='1')
            <label style=" border-radius:10%" class="B btn py-1 btn-danger"> banné</label>
            @endif
            </span>
                     </tr>
                    </div>
                    <div class="blog_content bg-white">
                    	<div class="blog_text"  >
                       
                   
                            <p>  <strong>Evenement : </strong> {{ $annonce->categorie_evenement->type_evenement}}   
      
			                    </p>
								<p> <strong>Service : </strong> {{ $annonce->categorie_service->type_service}}</p>
								<p> <strong>Description : </strong> {{ $annonce->description}}</p>
								<p> <strong>Date d'evenement : </strong> {{ $annonce->date_event}}</p>
								<p> <strong>Adresse de evenement : </strong> {{ $annonce->adresse_event}}</p>
							
                        </div>
                        <br>
                        <div style="text-align:center"> 
                                   
                      
                                                    
                                                    <a class="btn btn-info btn-sm "  data-toggle="modal" data-target="#Avertir" href="">Avertir</a>


                                                  <select onchange="window.location.href=this.options[this.selectedIndex].value;" class="btn btn-warning btn-sm ">
                                                  <option value="{{ url('/user/changeisban',$annonce->user_id) }}">Statut</option>
                                                      <option value="{{ url('/user/changeisban0',$annonce->user_id) }}">Pas banni</option>
                                                      <option value="{{ url('/user/changeisban1',$annonce->user_id) }}">Banni</option> 
                                         
                                                  </select>
                                                 
                                             
                                                   
                                                
                                                    <button class="btn btn-danger btn-sm " data-catid={{$annonce->id}} data-toggle="modal" data-target="#delete">Supprimer</button>
                                    </div>
                    </div>
                    
                </div>
                
            </div>
            @endforeach
        </div>

                <br>
                <br>
               

<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h1 class="modal-title text-center" id="myModalLabel">Confirmation de suppression</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <form action="{{ route('annonces.destroy',$annonce->id) }}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p >
                    
                  <h2 class="text-center">  Êtes-vous sûr de vouloir le supprimer la annonce ?</h2>
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







<div class="modal  fade" id="Avertir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h1 class="modal-title text-center" id="myModalLabel">Écrivez votre avertissement</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <form action="{{ url('/user/avertissement',$annonce->user_id) }}" method="POST">

      @csrf
	      <div class="modal-body">
			<br>
        <div class="form-group">
             
        <strong>Avertissement :</strong>
             <textarea rows="4" cols="30" name="avertissement" class="form-control" placeholder="écrivez votre avertissement">
                </textarea>
         </div>
	      </div>
        <br>
	      <div class="modal-footer">
	        <button type="Reset"class="btn btn-danger btn-sm" data-dismiss="modal"> Annuler</button>
	        <button type="submit" class="btn btn-primary btn-sm">Avertir</button>
	      </div>
      </form>
    </div>
  </div>
</div>




<div class="modal  fade" id="Bannir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h1 class="modal-title text-center" id="myModalLabel">Bannir ce client</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
    


      <form action="{{ url('/admin/changeisban',$annonce->user_id) }}" method="POST">
	      <div class="modal-body">
   
      <div class="row" >
   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group"  align="center">
                   
                <img src="{{asset('images')}}/{{ $annonce->user->avatar}}" style="  border-radius: 50px;"   height="140px;" width="140px;">
                </div>
            </div>    
        </div>
        <br>

        <div class="row" >
        <div  style="width: 75%; margin-left:350px; margin-left:300px;">
          @if( $annonce->user->isban=='0')
           <label style=" border-radius:30%" class="btn py-1 btn-primary">Pas banni</label>
            @elseif($annonce->user->isban=='1')
            <label style=" border-radius:30%" class="btn py-1 btn-danger"> Banni</label>
            @endif
            </div>
			</div>
 
<br>
<br>
      <div class="row" >
	<div class="col-xs-12 col-sm-12 col-md-8">
         <div class="input-group">
					<div class="input-group-prepend ">
				 <span class="input-group-text "><h3> Nom Prenom  </h3> </span>
         </div>
         <input type="text" name="name" id="name"  class="form-control" >
         <input type="text" class="form-control" name="prenom" id="prenom"  />
				 
				 </div>
			 </div>    
		 </div>
		 

     <br>
   

     <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
 <span >Pas banni</span>
  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
  Banni
  </label>
</div>
     <br>

     
	      <div class="modal-footer">
	        <button type="Reset"class="btn btn-danger btn-sm" data-dismiss="modal"> Annuler</button>
	        <button type="submit" class="btn btn-primary btn-sm">Bannir</button>
	      </div>
      </form>
    </div>
  </div>
</div>
               
<br>




    
       
   <div align="center">
  
    {!! $annonces->links() !!}
    </div>

			
			
			
			</div>






 <script>

$('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('catid') 
      var modal = $(this)
      modal.find('.modal-body #cat_id').val(cat_id);
})


</script>
<script>

$('#Bannir').on('show.bs.modal',function(event){
var button =$(event.relatedTarget)
var avatar  =button.data('avatar')
var  name =button.data('name')
var  prenom =button.data('prenom')
var user_id  =button.data('user_id')
var isban  =button.data('isban')

var modal =$(this)

modal.find('.modal-body #avatar').val(avatar);
modal.find('.modal-body #name').val(name);
modal.find('.modal-body #prenom').val(prenom);
modal.find('.modal-body #user_id').val(user_id);
modal.find('.modal-body #isban').val(isban);

});

</script>




<script>







 </script>

 <style>
 .A {
    padding: 8px 20px;
}
.B {
    padding: 8px 12px;
}
.btn-group-sm > .btn, .btn-sm {
    padding: 8px 18px;
}
.btn + .btn {
    margin-left: 8px;
}
.btn {
    display: inline-block;
   
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
  
    border-radius: 4px;


    border-width: 1px;
    cursor: pointer;
    line-height: normal;
   
    text-transform: capitalize;
    transition: all 0.3s ease-in-out;
}

.btn-warning {
    color: #fff;
    background-color: #f0ad4e;
    border-color: #eea236;
}

.btn-info {
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
}


.form-control {
 
    font-size: 1.5rem;


}

.modal-body {
 
    padding: 2rem;
}

.toggle.btn {
    min-width: 150px;
    min-height: 34px;
}


#sidebar h5 {
    color: #f2f2f2;
    font-weight: 700;
}
.centered {
    text-align: center;
}
.h5, h5 {
    font-size: 15px;
}
.h4, .h5, .h6, h4, h5, h6 {
    margin-top: 10px;
    margin-bottom: 10px;
}
     </style>

           
@endsection