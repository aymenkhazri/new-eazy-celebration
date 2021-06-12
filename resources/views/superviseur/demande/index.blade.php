@extends('superviseur.index')
  
@section('content')


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<link rel="stylesheet" href="{{ asset('assets/css/styleeee.css') }}">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



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
         
                @if ($message = Session::get('success'))
        <div class="alert alert-success" style="text-align:center" >
            <p>{{ $message }}</p>
        </div>
         @endif
                
         <br>
            <br>
      
        <div class="row justify-content-center">
        @foreach ($demandes as $demande)
        	<div class="col-lg-5 col-md-6 " >
            	<div class="blog_post blog_style1 box_shadow1">
                	
                  
                    <div class="blog_content bg-white">
                    	<div class="blog_text"  >
                      <span  ><img src="{{asset('images')}}/{{ $demande->user->avatar}}" width="40px;" height="40px;"  style="border-radius:50%;"   />  <strong  style=" margin-left:10px;">{{$demande->user->name}}</strong>  <strong >{{$demande->user->prenom	}} </strong> 
                        <span style=" margin-left:25px;">
                        @if( $demande->user->isban=='0')
                        <label style=" border-radius:10%"  class="B btn py-1 btn-primary">Pas banné</label>
                          @elseif($demande->user->isban=='1')
                          <label style=" border-radius:10%" class="B btn py-1 btn-danger"> banné</label>
                          @endif
                        </span>
                        
                        <a class="btn btn-fill-out btn-sm " href="" style=" margin-left:170px;">   Annonce  </a> </span>
                            <br>
                            <p> <strong>Montant : </strong> {{ $demande->montant}} DT    </p>
								<p> <strong>Description : </strong> {{ $demande->description}}</p>
								
								
                        </div>
                        <br>    
                        <div style="text-align:center"> 
                                   
                                                    
                                    <a class="btn btn-info btn-sm "  data-toggle="modal" data-catid={{$demande->user_id}} data-target="#Avertir" href="">Avertir</a>


                                    <select onchange="window.location.href=this.options[this.selectedIndex].value;" class="btn btn-warning btn-sm ">
                                                  <option>Statut</option>
                                                      <option value="{{ url('/admin/changedemandeisban0',$demande->user_id) }}">Pas banni</option>
                                                      <option value="{{ url('/admin/changedemandeisban1',$demande->user_id) }}">Banni</option> 
                                         
                                                  </select>
                                                 
                                             
                                                   
                                                
                                                    <button class="btn btn-danger btn-sm " data-catid={{$demande->id}} data-toggle="modal" data-target="#delete">Supprimer</button>
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




<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h1 class="modal-title text-center" id="myModalLabel">Confirmation de suppression</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <form action="{{ route('demandes.destroy','cat_id') }}" method="post">
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
      <form action="{{ url('/user/avertissement_demande') }}" method="POST">

      @csrf
	      <div class="modal-body">
			<br>
            <input type="hidden" name="user_id" id="cat_id" value="">
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





<script>

$('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('catid') 
      var modal = $(this)
      modal.find('.modal-body #cat_id').val(cat_id);
})

$('#Avertir').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('catid') 
      var modal = $(this)
      modal.find('.modal-body #cat_id').val(cat_id);
})

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
     </style>
           
@endsection