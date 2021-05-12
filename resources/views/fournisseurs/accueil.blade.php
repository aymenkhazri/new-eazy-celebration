@extends('fournisseurs.index')
  
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
								<a href="{{ url('/demandes') }}"> <h3 class="btn btn-fill-out   staggered-animation "  style="  font-size:14px;" data-animation="fadeInDown" data-animation-delay="0.2s">Chercher une annonce</h3></a>
                               
									<br>
									<br>
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">Bienvenu sur votre profile </h2>
                                   
                                    
                                   
                                   
                   
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
                                <a href="{{ url('/demandes') }}"> <h3 class="btn btn-fill-out   staggered-animation "  style="  font-size:14px;" data-animation="fadeInDown" data-animation-delay="0.2s">Chercher une annonce</h3></a>
                               
                               <br>
                               <br>
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">Bienvenu sur votre profile </h2>
                                    
    
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
								<a href="{{ url('/demandes') }}"> <h3 class="btn btn-fill-out   staggered-animation "  style="  font-size:14px;" data-animation="fadeInDown" data-animation-delay="0.2s">Chercher une annonce</h3></a>
                               
									<br>
									<br>
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

.footer{

    padding: 30px 0 !important;
	position: relative !important;
}
</style>
@endsection