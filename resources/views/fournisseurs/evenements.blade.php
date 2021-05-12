@extends('fournisseurs.index')
  
@section('content')







	

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
    	<div class="row justify-content-center">
			<div class="col-md-6">
            	<div class="heading_s1 text-center">
                	<h1>Evenements</h1>
					<hr>
                </div>
            </div>
        </div>
		<br>
		<br>
		<br>
		
		<h3 >Notre evenements </h3>
		<br>
		<br>
        <div class="row">
            <div class="col-md-12">
            	<div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
				@foreach ($categorie_evenements as $categorie_evenement)
                	<div class="item" >
					   
					
                        <div class="blog_post blog_style1 box_shadow1">
                            <div class="blog_img">
                                <a href="shop-product-detail.html">
                                    <img src="{{asset('images')}}/{{ $categorie_evenement->image}}" height="150px;" alt="product_img1">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        
                                
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog_content bg-white">
                                <h6 class="product_title"><a href="shop-product-detail.html">{{ $categorie_evenement->type_evenement}}</a></h6>
                                <div class="product_price">
								<p>{{ $categorie_evenement->description}}</p>
                                   
                                   
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
@endsection