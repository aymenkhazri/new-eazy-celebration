@extends('fournisseurs.index')
  
@section('content')

<!-- START SECTION BANNER -->
<div class="banner_section full_screen staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow carousel_style2" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active background_bg overlay_bg_50" data-img-src="{{asset('assets/images/service3.jpeg')}}">
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
            <div class="carousel-item background_bg overlay_bg_50" data-img-src="{{asset('assets/images/mariage1.jpg')}}">
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
            <div class="carousel-item background_bg overlay_bg_60" data-img-src="{{asset('assets/images/anniversaire.jpg')}}">
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








<!-- START SECTION CATEGORIES -->
<div class="section pt-0 small_pb">
	<div class="container">
    	<div class="row">
        	<div class="col-12">
            	<div class="cat_overlap radius_all_5">
                	<div class="row align-items-center">
        				<div class="col-lg-3 col-md-4">
                        	<div class="text-center text-md-left">
                                <h4>Top 5 Fournisseurs</h4>
                                <p class="mb-2">There are many variations of passages of Lorem</p>
                                <a href="#" class="btn btn-line-fill btn-sm">Voir tout</a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="cat_slider mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-autoplay="true" data-responsive='{"0":{"items": "1"}, "380":{"items": "2"}, "991":{"items": "3"}, "1199":{"items": "4"}}'>
                            @foreach ($fournisseurs as $fournisseur)
                            <div class="item">
                            
                                    <div class="categories_box">
                                        <a href="#" style="  border-radius: 20px;">
                                        <img src="{{asset('images')}}/{{ $fournisseur->avatar}}"  style="  border-radius: 20px;"   height="100px;" width="15px;" alt="product_img1">
                                        
                                            <span>{{ $fournisseur->name}}</span>
                                            <span>{{ $fournisseur->type_service_id}}</span>
                                        </a>
                                    </div>
                                 
                                </div>
                                @endforeach
                             
                                                                                    
                            
                               
                            </div>
                        </div>
            		</div>
            	</div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION CATEGORIES -->




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
            	<div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-dots="false" data-nav="true" data-autoplay="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{}}'>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />




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
@if (session('success'))
    <script >
       
            toastr.success("{{ session('succes') }}");
        
        </script>
    @endif








@endsection