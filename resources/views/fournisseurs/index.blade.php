
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
<meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

<!-- SITE TITLE -->
<title>Eazy-Celebration </title>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>







<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
<!-- Animation CSS -->


<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">	
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
<!-- Google Font -->
<link href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;display=swap') }}" rel="stylesheet"> 
<link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap') }}" rel="stylesheet"> 
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons.css') }}">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}">
<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.default.min.css') }}">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
<!-- Slick CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/stylee.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>

<!-- LOADER -->

<!-- END LOADER -->

<!-- Home Popup Section -->

<!-- End Screen Load Popup Section --> 

<!-- START HEADER -->
<header class="header_wrap fixed-top dd_dark_skin transparent_header">
    <div class="light_skin main_menu_uppercase">
    	<div class="container-fluid">
            <nav class="navbar navbar-expand-lg"> 
                <a class="navbar-brand"  style=" margin-left:200px;"  >
                   
				
				<font size="5.8" color="#4ECDC4" > <strong>Eazy-Celebration  <i class="fas fa-glass-cheers"></i></strong></font>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" >
                    <ul class="navbar-nav">
                        <li>
                            <a  class="nav-link  " href="{{ url('/accueilll') }}">Accueil</a>
                          
                        </li>
                        <li >
                            <a class="  nav-link " href="{{ url('/evenement') }}" >Evenements</a>
                           
                        </li>
                        <li >
                            <a class=" nav-link" href="{{ url('/service') }}" >Services</a>
                            
                            
                        </li>
                        <li >
                            <a class=" nav-link" href="{{ url('/demandes') }}">Annonces</a>
                            
                        </li>
                        <li >
                            <a class=" nav-link" href="{{ url('/boit_chat') }}" >Boit chat</a>
                            
                        </li>
                    


                        
                        </div>
   
                      
                    </ul>
               
                <ul class="navbar-nav attr-nav align-items-center">
                    
                <li class="dropdown" >
                <span class="centered"><a data-toggle="modal" data-target="#profil"><img src="{{asset('images')}}/{{ Auth::user()->avatar }}" class="rounded-circle" height="40px;" width="40px;"></a></span> 
                <a>  <font color="#ffffff">  <span >{{ Auth::user()->name }} </span> <span >{{ Auth::user()->prenom }}</span></font></a>
              
                        <div class="dropdown-menu rounded">
                            <ul> 
                                <li><a class="dropdown-item nav-link nav_item" data-toggle="modal" data-target="#profil" href="index.html">Profile</a></li>
                                <li><a class="dropdown-item nav-link nav_item" data-toggle="modal" data-target="#myModal" href="index-2.html">Sécurité</a></li>


                                <li>
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                    <a class="dropdown-item nav-link nav_item "  href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();" >
                                             {{ __('Déconnexion') }}</a>
                                             </form>
                                </li>
                               
                            </ul>
                        </div>   
                    </li>   
                </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->








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
















<!-- END MAIN CONTENT -->




<div class="main_content">

<div id="page-content" class="index-page">
		
		@yield('content')
   
</div>





<!-- END MAIN CONTENT -->

<!-- START FOOTER -->
<footer class="footer_dark">
	<div class="footer_top">
        <div class="container">
        	
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                	<div class="widget">
                        <h6 class="widget_title">Contact info</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>Dar Châabane El Fehri, Nabeul, Tunisie</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com"> maya.elabed22.05@gmail.com aymenkhazri6@gmail.com   </a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>53 686 823 /  20 327 836</p>
                                
                            </li>
                           
                        </ul>
                    </div>
                    <div class="widget">
                        <ul class="social_icons rounded_social">
                            <li><a href="{{ url('https://www.facebook.com/aymen.stifler.10/') }}" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"  class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="{{ url('https://mail.google.com/mail/u/0/#inbox') }}"  class="sc_google"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="{{ url('https://www.instagram.com/') }}"class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
        		</div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">Liens utiles</h6>
                        <ul class="widget_links">
                            <li><a href="{{ url('/propos') }}" >À propos</a></li>
    
                            <li><a href="{{ url('https://www.google.com/maps/place/Dar+Chaabane+Al+Fehri/@36.4618475,10.7336854,14z/data=!3m1!4b1!4m5!3m4!1s0x1302a2a14f916b27:0xc9d10e73748bb66e!8m2!3d36.4626965!4d10.7492466') }}">Location</a></li>
                      
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">Mon compte</h6>
                        <ul class="widget_links">
                            <li><a href="#">Mon compte  </a></li>
                            <li><a href="{{ route('login') }}">Se connecter</a></li>
                            <li><a href="{{ route('register') }}">S'inscrire</a></li>
                       
                           
                        
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                	<div class="widget">
                        <h6 class="widget_title">Instagram</h6>
                        <ul class="widget_instafeed instafeed_col4">
                            <li><a href="{{ url('https://www.instagram.com/') }}"><img src="{{ asset('assets/images/service.jpg') }}" alt="insta_img" height="84px;"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="{{ url('https://www.instagram.com/') }}"><img src="{{ asset('assets/images/mariage.jpg') }}" alt="insta_img" height="84px;" ><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="{{ url('https://www.instagram.com/') }}"><img src="{{ asset('assets/images/anniversaire.jpg') }}"  height="84px;"alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="{{ url('https://www.instagram.com/') }}"><img src="{{ asset('assets/images/mariage1.jpg') }}"  height="84px;"alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="{{ url('https://www.instagram.com/') }}"><img src="{{ asset('assets/images/ouverture.jpg') }}" height="84px;" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="{{ url('https://www.instagram.com/') }}"><img src="{{ asset('assets/images/service3.jpeg') }}" height="84px;"alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="{{ url('https://www.instagram.com/') }}"><img src="{{ asset('assets/images/mariage-impot-.jpg') }}"  height="84px;"alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="{{ url('https://www.instagram.com/') }}"><img src="{{ asset('assets/images/waiters.jpg') }}" height="84px;" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer bg_dark4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left">© 2020 All Rights Reserved by Bestwebcreator</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-md-right">
                        <li><a href="#"><img src="{{ asset('assets/images/visa.png') }}" alt="visa"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/discover.png') }}" alt="discover"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/master_card.png') }}" alt="master_card"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/paypal.png') }}" alt="paypal"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/amarican_express.png') }}" alt="amarican_express"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script> 
<!-- popper min js -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script> 
<!-- owl-carousel min js  --> 
<script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script> 
<!-- magnific-popup min js  --> 
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script> 
<!-- waypoints min js  --> 
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script> 
<!-- parallax js  --> 
<script src="{{ asset('assets/js/parallax.js') }}"></script> 
<!-- countdown js  --> 
<script src="{{ asset('assets/js/jquery.countdown.min.js 	') }}"></script> 
<!-- fit video  -->
<script src="{{ asset('assets/js/Hoverparallax.min.js') }}"></script>
<!-- jquery.countTo js  -->
<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
<!-- imagesloaded js --> 
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- isotope min js --> 
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<!-- jquery.appear js  -->
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<!-- jquery.parallax-scroll js -->
<script src="{{ asset('assets/js/jquery.parallax-scroll.js') }}"></script>
<!-- jquery.dd.min js -->
<script src="{{ asset('assets/js/jquery.dd.min.js') }}"></script>
<!-- slick js -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- elevatezoom js -->
<script src="{{ asset('assets/js/jquery.elevatezoom.js') }}"></script>
<!-- scripts js --> 
<script src="{{ asset('assets/js/scripts.js') }}"></script>
















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



</body>

</html>




































