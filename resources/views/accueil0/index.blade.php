

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
<link rel="stylesheet" href="{{ asset('assets/css/styleeee.css') }}">
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
    	<div style="width: 97%;">
            <nav class="navbar navbar-expand-lg"> 
                <a class="navbar-brand"  >
                 
				
                <font  color="#4ECDC4" > <strong style=" margin-left:150px;" >Eazy-Celebration  <i class="fas fa-glass-cheers"></i></strong></font>
                </a>
               
                <div class="collapse navbar-collapse justify-content-center" >
                
                
                    <ul class="navbar-nav" style=" margin-left:170px;">
                        <li>
                         <a  class="nav-link  " href="{{ url('/accueil') }}"> Accueil</a>
                          
                        </li>
                        <li  >
                            <a class="  nav-link " href="{{ url('/evenements') }}" >Evenements</a>
                           
                        </li>
                        <li >
                            <a class=" nav-link" href="{{ url('/services') }}" >Services</a>
                            
                            
                        </li>
                        <li class="dropdown" >
                            <a class=" nav-link" href="{{ url('/propos') }}" >A propos </a>
                            
                        </li>
                        <li >
                            <a class=" nav-link" href="{{ url('/contact') }}" >Contact</a>
                            
                        </li>
                     
                    

                    </ul>
                </div>
                <ul class="navbar-nav  align-items-center"  >
                <a class="nn btn  btn-sm staggered-animation " href="{{ route('register') }}"  data-animation="fadeInUp" data-animation-delay="0.5s" >S'inscrire</a>
				<a class="nn  btn btn-sm  staggered-animation" data-animation="fadeInUp"    data-animation-delay="0.4s"  href="{{ route('login') }}" >Se connecter</a>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->




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

 



</body>

</html>