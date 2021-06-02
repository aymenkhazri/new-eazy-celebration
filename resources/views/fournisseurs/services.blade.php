@extends('fournisseurs.index')
  
@section('content')



<br>
<br>

       

<!-- START SECTION SHOP -->
<div class="section" align="center">
	<div  style=" width: 80%">
    	<div class="row justify-content-center">
			<div class="col-md-6">
            	<div class="heading_s1 text-center">
                	<h1>Notre services</h1>
					<hr>
                </div>
            </div>
        </div>
	
		
	        

<!-- START SECTION BLOG -->
<div class="section small_pt pb_70">
	<div class="container">
    	
        <div class="row justify-content-center">
        @foreach ($categorie_services as $categorie_service)
        	<div class="col-lg-4 col-md-6">
            	<div class="blog_post blog_style1 box_shadow1">
                	<div class="blog_img">
                        <a href="blog-single.html">
                            <img src="{{asset('images')}}/{{ $categorie_service->image}}" height="200px;" >
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                    	<div class="blog_text">
                        <h5 class="product_title text-left" ><a href="shop-product-detail.html">{{ $categorie_service->type_service}}</a></h5>
                          
                            <p class="text-left">{{ $categorie_service->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          
        </div>
    </div>
</div>
<!-- END SECTION BLOG -->



{!! $categorie_services->links() !!}




    </div>
</div>


           

@endsection