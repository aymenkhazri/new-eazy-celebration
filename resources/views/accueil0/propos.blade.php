@extends('accueil0.index')
  
@section('content')
<br>
<br>
<br>
<br>
		<br>





			<div >
			<div class="col-lg-12" >
						<h1 style="text-align:center">A propos</h1>
						<hr>
						
					</div>
				</div>
				<br>
				<br>
			<table >
			<tr >
   
   <td style="width:50%"    >

              
					<div class="col-lg-12"  style=" margin-left:100px;" >
					    <h5>Notre concepte, Notre histoire et Notre cible</h5>
					
						
								<div class="timeline-panel">
								<br>
								
								
										<h4 class="subheading">Notre concepte</h4>
										<br>
								
									<div>
									<p class="subheading">Eazy-celebration est le premier site tunisien  
										<br>qui permet aux particuliers et aux entreprises de commander et organiser une fete:
										<br>marriage, céremonie,anniversaire et les fetes religieuse...
										<br>plus que la mise en relation, notre mission est de révolutionner ce secteur en gérant de A à Z
										<br>les prestations pour nos clients, en respectant trois promesses: 
										<ul class="subheading">
										<li>qualité de service,</li>
										<li>un grand choix a votre disposition,</li>
										<li>et tout un service pour favoriser votre confort. </li>
										</ul>
									 </p>
									</div>
								</div>
						
			
					
					</div>
				</div>




      </td>


      <td  >

      </td>
      <td  style="width:50%"   >

				
			<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 ">
                <div id="carouselExampleControls" class="carousel slide light_arrow" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active background_bg rounded" data-img-src="assets/images/mariage1.jpg" >
                            <div class="banner_slide_content banner_content_inner">
                                <div class="col-lg-8 col-10">
                                    <div class="banner_content overflow-hidden">
                                      
                                        <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Mariage</h2>
                                        <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase" href="{{ url('/evenements') }}" data-animation="slideInLeft" data-animation-delay="1.5s">Voir notre événements</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item background_bg rounded" data-img-src="assets/images/anniversaire.jpg">
                            <div class="banner_slide_content banner_content_inner">
                                <div class="col-lg-8 col-10">
                                    <div class="banner_content overflow-hidden">
                                       
                                        <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Anniversaire</h2>
                                        <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase" href="{{ url('/evenements') }}" data-animation="slideInLeft" data-animation-delay="1.5s">Voir notre événements</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item background_bg rounded" data-img-src="assets/images/ouverture.jpg">
                            <div class="banner_slide_content banner_content_inner">
                                <div class="col-lg-8 col-10">
                                    <div class="banner_content overflow-hidden">
                                     
                                        <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Ouverture</h2>
                                        <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase" href="{{ url('/evenements') }}" data-animation="slideInLeft" data-animation-delay="1.5s">Voir notre événements</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators indicators_style1">
                        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
				
				   
				</td>
    
    </tr>
    </table>
	<br>
<br>
	<hr>
			</div>
           
		
            <style>
		.nn {
	background-color: #4ECDC4 !important;


}

</style>	

@endsection