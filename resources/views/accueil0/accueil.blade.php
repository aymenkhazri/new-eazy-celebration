@extends('accueil0.index')
  
@section('content')
<link rel="stylesheet" href="{{ asset('accueil0/css/animated-logologinn.min.css') }}"><!-- Logo -->

<!-- START SECTION BANNER -->
<div class="banner_section full_screen staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow carousel_style2" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active background_bg overlay_bg_50" data-img-src="assets/images/service3.jpeg">
      
		
                   
                <div class="banner_slide_content banner_content_inner">
                    
                	<div class="container">
                                          
                   
                    
                    	<div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10">
                                <div class="banner_content text_white text-center">
                                
                      
                               
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">vous êtes le bienvenu </h2>
                                       <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    
                                    <a class="btn btn-fill-out staggered-animation" href="{{ route('register') }}" data-animation="fadeInUp" data-animation-delay="0.5s">S'inscrire</a>
									<a class="btn btn-fill-out staggered-animation" href="{{ route('login') }}" data-animation="fadeInUp" data-animation-delay="0.4s">Se connecter</a>
                                   
                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_50" data-img-src="assets/images/mariage1.jpg">
                <div class="banner_slide_content banner_content_inner">
                	<div class="container">
                    	<div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10">
                                <div class="banner_content text_white text-center">
                              
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">vous êtes le bienvenu </h2>
                                       <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    
                                    <a class="btn btn-fill-out staggered-animation" href="{{ route('register') }}" data-animation="fadeInUp" data-animation-delay="0.5s">S'inscrire</a>
									<a class="btn btn-fill-out staggered-animation" href="{{ route('login') }}"data-animation="fadeInUp" data-animation-delay="0.4s">Se connecter</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_60" data-img-src="assets/images/anniversaire.jpg">
                <div class="banner_slide_content banner_content_inner">
                	<div class="container">
                    	<div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10">
                                <div class="banner_content text_white text-center">
                    
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">vous êtes le bienvenu </h2>
                                       <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    
                                    <a class="btn btn-fill-out staggered-animation" href="{{ route('register') }}" data-animation="fadeInUp" data-animation-delay="0.5s">S'inscrire</a>
									<a class="btn btn-fill-out staggered-animation" href="{{ route('login') }}"data-animation="fadeInUp" data-animation-delay="0.4s">Se connecter</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
</div>


<style>
.header_wrap:not([class*="bg_"]):not([class*="bg-"]).transparent_header {
	background-color: transparent;
}

.footer{

    padding: 30px 0 !important;
	position: relative !important;
}


.navbar .navbar-nav > li > .nav-link {
	font-weight: 500;
	padding: 32px 13px;

	font-size: 20px;
}


.navbar-brand {
    font-size: 30px;
}


.nn {
	background-color: transparent !important;
    color:transparent !important;
}

</style>
<!-- END SECTION BANNER -->




<br>
		<br>







<!-- START SECTION SHOP -->
<div class="section" align="center">
	<div    style=" width: 80%" >
    	<div class="row justify-content-center">
			<div class="col-md-6">
            	<div class="heading_s1 text-center">
                	<h1>Evenements</h1>
					<hr>
                </div>
            </div>
        </div>
		<br>
	
		
		
	
        <div class="row">
            <div class="col-md-12" >

            	<div class="product_slider carousel_slider owl-carousel owl-theme nav_style1  " data-loop="true" data-dots="false"  data-nav="true" data-autoplay="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{}}'>
				@foreach ($categorie_evenements as $categorie_evenement)
                	<div class="item" >
					   
					
                        <div class="blog_post blog_style1 box_shadow1">
                            <div class="blog_img">
                                <a href="shop-product-detail.html">
                                    <img src="{{asset('images')}}/{{ $categorie_evenement->image}}"  height="300px;" alt="product_img1">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        
                                
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog_content bg-white ">
                                <h5 class="product_title text-left "><a href="shop-product-detail.html" >{{ $categorie_evenement->type_evenement}}</a></h5>
                                <div class="product_price">
								<p class="text-left">{{ $categorie_evenement->description}}</p>
                                   
                                   
                                </div>
                                <div class="rating_wrap">
                                  
                                    
                                </div>
                                
                             
                            </div>
							
                        </div>
                    </div>
                 
			    @endforeach
                   
                    
                </div>
            </div>
		</div>
    </div>
</div>
<!-- END SECTION SHOP -->



	








<!-- START SECTION SHOP -->
<div class="section" align="center">
	<div  style=" width: 80%">
    	<div class="row justify-content-center">
			<div class="col-md-6">
            	<div class="heading_s1 text-center">
                	<h1>Services</h1>
					<hr>
                </div>
            </div>
        </div>
		<br>
	
		
		
		

		
        <div class="row">
            <div class="col-md-12">
            	<div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-dots="false"  data-nav="true" data-autoplay="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{}}'>
				@foreach ($categorie_services as $categorie_service)
                	<div class="item" >
					   
					
                        <div class="blog_post blog_style1 box_shadow1">
                            <div class="blog_img">
                                <a href="shop-product-detail.html">
                                    <img src="{{asset('images')}}/{{ $categorie_service->image}}"  height="300px;" alt="product_img1">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        
                                
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog_content bg-white ">
                                <h5 class="product_title text-left"><a href="shop-product-detail.html">{{ $categorie_service->type_service}}</a></h5>
                                <div class="product_price">
								<p class="text-left">{{ $categorie_service->description}}</p>
                                   
                                   
                                </div>
                                <div class="rating_wrap">
                                  
                                    
                                </div>
                                
                             
                            </div>
							
                        </div>
                    </div>
                 
			    @endforeach
                   
                    
                </div>
            </div>
		</div>
    </div>
</div>
<!-- END SECTION SHOP -->
           

<style>



.navbar .navbar-nav > li > .nav-link {
	font-weight: 500;
	padding: 32px 13px;

	font-size: 20px;
}


.navbar-brand {
    font-size: 30px;
}



</style>







<br>
<br>
<br>
<br>
<br>
<br>
<br>




	@endsection