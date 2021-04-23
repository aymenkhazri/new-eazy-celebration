<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
    <meta name="author" content="www.Zerotheme.com">

    <title>Eazy-Celebration </title>







    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
 



	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('accueil0/css/bootstrap_client.min.css') }}" rel="stylesheet">
    
    <!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('accueil0/css/resete.css') }}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{ asset('accueil0/css/style_clienttt.css') }}">
	<link rel="stylesheet" href="{{ asset('accueil0/css/animated-logo.min.css') }}"><!-- Logo -->
	<link rel="stylesheet" href="{{ asset('accueil0/css/our-team.css') }}"> <!-- Resource style -->
	
	<!-- Custom Fonts -->
    <link href="{{ asset('accueil0/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	
	<!-- Js -->
	<script src="{{ asset('accueil0/js/modernizr.js') }}"></script> <!-- Modernizr -->
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" >
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            
                
                
                
                <a class="navbar-brand page-scroll" href="#page-top">Eazy-Celebration client <i class="fas fa-glass-cheers"></i> </a>
            

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li>
                        <a class="page-scroll" href="{{ url('/client/accueil') }}">Accueil</a>
                    </li>
                   
					<li>
					<a class="page-scroll" href="{{ url('/client/annonces') }}"> Annonces</a> 
                    </li>
					<li>
					
					<a class="page-scroll" href="{{ url('/client/boit_chat') }}">Boit chat</a>
				   </li>
                   <li>
                   
                  
   

	              </li>
				  <li>
				  <div  style=" margin-left:400px;"  >
				  <span class="centered"><a data-toggle="modal" data-target="#profil"><img src="{{asset('images')}}/{{ Auth::user()->avatar }}" class="img-circle" height="40px;" width="40px;"></a></span> 
				  <div class="dropdown">
               			 <button class="dropbtn"> <span >{{ Auth::user()->name }}</span> <span >{{ Auth::user()->prenom }}</span>	</button>
  							<div class="dropdown-content">
                              <a data-toggle="modal" data-target="#profil" >	<p>Profile</p></a>
							  <a data-toggle="modal" data-target="#myModal" >	<p>Sécurité</p></a>
  							
								  <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"><p>
                                {{ __('Déconnexion') }}
								</p></a>
                        </form>
 							 </div>
					</div>
			
			</div>
				</li>
   
                </ul>
			
			</div>
			
            <!-- /.navbar-collapse -->
        </div>
		
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->

	<!-- /////////////////////////////////////////Header -->





  <!-- Change mot de passe -->
	<div class="container">  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#4ECDC4;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center"> Change mot de passe</h4>
        </div>
        <div class="modal-body">
		  
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
        <form action="{{ route('changepassword') }}" method="POST">
@csrf
 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="form-group">
            <strong>Actuel mot de passe :</strong>
            <input type="password" name="Ancien" class="form-control" placeholder="Actuel mot de passe">
        </div>
    </div>
    
</div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nouveau mot de passe :</strong>
            <input type="password" name="Nouveau" class="form-control" placeholder="nouveau mot de passe">
        </div>
    </div>

    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirmez le mot de passe:</strong>
            <input type="password" name="Confirmez" class="form-control" placeholder="confirmez le mot de passe">
        </div>
    </div>

    </div>

    <br>
<br>
<div class="modal-footer">
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Changer</button>
            <button type="Reset" class="btn btn-danger">Annuler</button>
    </div>
    </div>
</div>

</form> 
        </div>
       
      </div>
      
    </div>
  </div>
  
</div>




















	<!-- Profil -->
	<div class="container">  
  <!-- Modal -->
  <div class="modal fade" id="profil" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#4ECDC4;">
          <button type="button" class="close"  data-dismiss="modal">&times;</button>
          <h4 class="modal-title"  align="center">Profil</h4>
        </div>
        <div class="modal-body"  >


        <div class="row" >
   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group"  align="center">
                   
                <img src="{{asset('images')}}/{{ Auth::user()->avatar}}" style=" border-radius:50%; ">
                </div>
            </div>    
        </div>
        <br>
        <div class="row" >
	<div class="col-xs-12 col-sm-12 col-md-12">
				 <div class="form-group">
					
				 <h3>Nom : {{ Auth::user()->name }}</h3>
				 </div>
			 </div>    
		 </div>
		 <div class="row" >
	<div class="col-xs-12 col-sm-12 col-md-12">
				 <div class="form-group">
					
				 <h3>Prenom : {{Auth::user()->prenom }}</h3>
				 </div>
			 </div>    
		 </div>
 
		 <div class="row" >
	<div class="col-xs-12 col-sm-12 col-md-12">
				 <div class="form-group">
					
				 <h3>Email : {{ Auth::user()->email }}</h3>
				 </div>
			 </div>    
		 </div>

		 <div class="row" >
	<div class="col-xs-12 col-sm-12 col-md-12">
				 <div class="form-group">
					
				 <h3>Date de naissance:  {{ Auth::user()->date_naissance }}</h3>
				 </div>
			 </div>    
		 </div>
		 <div class="row" >
	<div class="col-xs-12 col-sm-12 col-md-12">
				 <div class="form-group">
					
				 <h3>Adresse : {{ Auth::user()->adresse }}</h3>
				 </div>
			 </div>    
		 </div>
		 <div class="row" >
	<div class="col-xs-12 col-sm-12 col-md-12">
				 <div class="form-group">
					
				 <h3>Telephone : {{Auth::user()->telephone }}</h3>
				 </div>
			 </div>    
		 </div>
		
         <div class="row" >
	<div class="col-xs-12 col-sm-12 col-md-12">
				 <div class="form-group">
					
				 <h3>Genre : {{ Auth::user()->genre }}</h3>
				 </div>
			 </div>    
		 </div>

			</div>

<div class="modal-footer" >
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

    <a  href="{{  url('/client/edit_profile') }}" > <button type="submit" class=" btn btn-sm btn-primary" > Modifier</button></a>
    <button  type="button"  data-dismiss="modal" class="btn btn-danger">Annuler</button>
    </div>
       
       </div>

        </div>
       
      </div>
      
    </div>
  </div>
  
</div>


















	<!-- Header -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page">
		
            @yield('content')
       
	</div>
	
	<!-- /////////////////////////////////////////Footer -->
	<footer>
		<div class="wrap-footer">
			
			
			<div class="container" align="center">
				<div class="row">
					
					<div >
						<ul class="list-inline">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-google"></i></a>
                            </li>
						</ul>
					</div>
					<div >
						<ul class="list-inline">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>	
					
				</div>
			
		</div>
		
	</footer>
	<!-- Footer -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
	<!-- jQuery -->
	<script src="{{ asset('accueil0/js/jquery-2.1.1.js') }}"></script>
	<script src="{{ asset('accueil0/js/masonry.pkgd.min.js') }}"></script>
	<script src="{{ asset('accueil0/js/jquery.flexslider-min.js') }}"></script>
	<script src="{{ asset('accueil0/js/main.js') }}"></script> <!-- Resource jQuery -->

	<!-- Bootstrap Core JavaScript -->
	<script src="{{ asset('accueil0/js/bootstrap.min.js') }}"></script>

	<!-- Custom Theme JavaScript -->
	<script src="{{ asset('accueil0/js/agency.js') }}"></script>

	<!-- Animated Top -->
	<script src="{{ asset('accueil0/js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('accueil0/js/classie.js') }}"></script>
	<script src="{{ asset('accueil0/js/cbpAnimatedHeader.js') }}"></script>

    @if ($message = Session::get('success'))
    <script >
       
            toastr.success( "{{ $message }}");
        
        </script>
    @endif
    

@if(session('error'))
<script >

toastr.error("{{session('error')}}") 

</script>
@endif
@if (session('succes'))
    <script >
       
            toastr.success("{{ session('succes') }}");
        
        </script>
    @endif

</html>