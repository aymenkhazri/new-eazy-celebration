@extends('clients.index')
  
@section('content')

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

                                <a href="{{ url('/annonces') }}"> <h3 class="btn btn-fill-out   staggered-animation "  style="  font-size:14px;" data-animation="fadeInDown" data-animation-delay="0.2s">Ajouter une annonce</h3></a>
                               
                               <br>
                               <br>
              
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">Bienvenu sur votre profile </h2>

                                   
                                    
                                   
                                   
                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_50" data-img-src="assets/images/anniversaire.jpg">
                <div class="banner_slide_content banner_content_inner">
                	<div class="container">
                    	<div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10">
                                <div class="banner_content text_white text-center">
                               
                                <a href="{{ url('/annonces') }}"> <h3 class="btn btn-fill-out   staggered-animation "  style="  font-size:14px;" data-animation="fadeInDown" data-animation-delay="0.2s">Ajouter une annonce</h3></a>
                               
                               <br>
                               <br>
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">Bienvenu sur votre profile </h2>
                                    
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_60" data-img-src="assets/images/mariage1.jpg">
                <div class="banner_slide_content banner_content_inner">
                	<div class="container">
                    	<div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10">
                                <div class="banner_content text_white text-center">
                                <a href="{{ url('/annonces') }}"> <h3 class="btn btn-fill-out   staggered-animation "  style="  font-size:14px;" data-animation="fadeInDown" data-animation-delay="0.2s">Ajouter une annonce</h3></a>
                               
                               <br>
                               <br>>
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">Bienvenu sur votre profile </h2>
                                    
                                   
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
<!-- END SECTION BANNER -->

<style>
.header_wrap:not([class*="bg_"]):not([class*="bg-"]).transparent_header {
	background-color: transparent;
}

</style>




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

            	<div class="product_slider carousel_slider owl-carousel owl-theme nav_style1  " data-loop="true" data-dots="false"  data-autoplay="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{}}'>
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
            	<div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-dots="false"  data-autoplay="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{}}'>
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
           









<br>
<br>
<br>
<br>
<br>
<br>
<br>






@endsection