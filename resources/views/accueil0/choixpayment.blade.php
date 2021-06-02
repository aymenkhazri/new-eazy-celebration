@extends('accueil0.index')
  
@section('content')


<br>
<br>








<!-- START SECTION SHOP -->
<div class="section small_pt pb_70">


						 <a  href="{{ url('/register') }}" style=" margin-left:200px;"> <i class="fas fa-chevron-circle-left" style="  font-size:35px;"></i> </a>
                        
	<div class="container">
 
		<div class="row justify-content-center">
			<div class="col-md-6">
                <div class="heading_s4 text-center">
                 
                </div>
                <h4 class="text-center leads"style="color:red;" >Pour valider votre inscription vous devez payer un abonnement s'il vous plaît choisies un </h4>
            </div>
		</div>
        <br>
        
    
        
        <div class="pull-left">
               
               <font size="5" color="#4d1919">Notre Abonnement : </font>
           </div>
        <br>
        
        <div class="row justify-content-center ">
        @foreach ($paiements as $paiement)
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product_box text-center bg-white" style="  border-radius: 30px;">
                    <div class="product_img">
                        <a href="shop-product-detail.html">
                        <img  src="{{asset('images')}}/{{ $paiement->image}}"  height="200px;" alt="furniture_img1">
                        </a>
                        <div class="product_action_box">
                            <ul>
                           
                                
                             
                            </ul>
                        </div>
                    </div>
                    <div class="product_info">
                        <h4 class="product_title"><a href="shop-product-detail.html">{{ $paiement->duree}}</a></h4>
                        <hr>
                        <div class="product_price">
                        <h5>  <span class="price">$ {{ $paiement->montant}} DT</span></h5>
                        <hr>
                        </div>
                        <div class="rating_wrap">
                            <div class="rating">
                                <div class="product_rate" style="width:80%"></div>
                            </div>
                      
                        </div>
                       
                        <div class="add-to-cart">
                            <a href="{{ url('/indexpayment',$paiement->id) }}" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Acheter  </a>
                        </div>
                    </div>
                </div>
            </div>



            @endforeach


          




          
       
          
           
        </div> 
    </div>
</div>
<!-- END SECTION SHOP -->





<br>





@endsection