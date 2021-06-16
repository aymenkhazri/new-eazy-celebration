@extends('superviseur.index')
 
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/styleeee.css') }}">
<section id="content">
      <section >
        <div class="row">
          <div class="col-lg-9 main-chart">
            <div class="row mt">
              <!-- SERVER STATUS PANELS -->
              <div class="col-md-6 col-sm-4 mb">
               <a  href="{{url('/user/clients')}}" >
                <div class="darkblue-panel pn" style="  border-radius: 50px;">
                     <br>

                <font size="5" color="#343a40" ><span class="fas fa-users"> </span>    <span> Les  Clients </span></font> 
                <br>
                
              
          
                 

                  <canvas id="serverstatus02" height="120" width="120"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 90,
                        color: "#1c9ca7"
                      },
                      {
                        value: 10,
                        color: "#f68275"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                  </script>
                 
                  <footer>
                  <br>
                    <div class="col-sm-12 col-xs-4">
                     
                      <font size="5" color="#FFFFF" >    <span> {{ $clients}} clients</span></font> 
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
                </a>
              </div>
              <!-- /col-md-4-->
              <div class="col-md-6 col-sm-4 mb">
                <a  href="{{url('/user/fournisseurs')}}">
                <div class="darkblue-panel pn" style="  border-radius: 50px;">
                     <br>

                <font size="5" color="#343a40" ><span class="fas fa-users"> </span>    <span> Les  Fournisseurs </span></font> 
                <br>
                
              
          
                 

                  <canvas id="serverstatus022" height="120" width="120"></canvas>
                  <script>
                    var doughnutDataa = [{
                        value: 10,
                        color: "#1c9ca7"
                      },
                      {
                        value: 90,
                        color: "#f68275"
                      }
                    ];
                    var myDoughnutt = new Chart(document.getElementById("serverstatus022").getContext("2d")).Doughnut(doughnutDataa);
                  </script>
                 
                  <footer>
                  
                    <div class="col-sm-12 col-xs-4">
                      <br>
                      <font size="5" color="#FFFFF" >    <span> {{ $fournisseurs}} fournisseurs</span></font> 
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
                </a>
              </div>
              <!-- /col-md-4 -->
        
              <!-- /col-md-4 -->
            </div>
         
<br>
<br>
<br>
            <div class="row justify-content-center" >
        @foreach ($annonces as $annonce)
       
        	<div class="col-lg-4 col-md-6">
          <a href="{{ route('annonces.index')}}">
            	<div class="blog_post blog_style1 box_shadow1">
                	<div class="blog_img">
                       
                        <img src="{{asset('images')}}/{{ $annonce->categorie_service->image}}"  height="180px;" alt="product_img1">
                      
                    </div>
                    <div class="blog_content bg-white">
                    	<div class="blog_text"  >
                       
                            <p> <strong>Evenement : </strong> {{ $annonce->categorie_evenement->type_evenement}}</p>
								<p> <strong>Service : </strong> {{ $annonce->categorie_service->type_service}}</p>
					
								<p> <strong>Date d'evenement : </strong> {{ $annonce->date_event}}</p>
								<p> <strong>Adresse de evenement : </strong> {{ $annonce->adresse_event}}</p>
                        </div>
                        
                    </div>
                    
                </div>
                </a>
            </div>
       
            @endforeach
        </div>
<br>
<br>
<br>


          </div>
     


          
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds ">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <div class="donut-main ">
              <h4>COMPLETED ACTIONS & PROGRESS</h4>
              <canvas id="newchart" height="130" width="130"></canvas>
              <script>
                var doughnutData = [{
                    value: 70,
                    color: "#4ECDC4"
                  },
                  {
                    value: 30,
                    color: "#fdfdfd"
                  }
                ];
                var myDoughnut = new Chart(document.getElementById("newchart").getContext("2d")).Doughnut(doughnutData);
              </script>
            </div>
            <!--NEW EARNING STATS -->
            <div class="panel terques-chart ">
              <div class="panel-body">
                <div class="chart">
                  <div class="centered">
                    <span>TODAY EARNINGS</span>
                    <strong>$ 890,00 | 15%</strong>
                  </div>
                  <br>
                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                </div>
              </div>
            </div>
            <!--new earning end-->
           
    
            <!-- USERS ONLINE SECTION -->
            <h3 class="centered mt">Superviseurs en ligne</h3>
            <!-- First Member -->
            @foreach ($superviseurs as $superviseur)
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="{{asset('images')}}/{{ $superviseur->avatar}}"  width="40px" height="40px" >       
              </div>
              <div class="details">
                <h5>
                  <a href="#"> {{ $superviseur->name}} {{ $superviseur->prenom}}</a><br/>
                  <muted>Disponible</muted>
              </h5>
              </div>
            </div>
            @endforeach
            <!-- CALENDAR-->
           
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    




<style>
.darkblue-panel {
    text-align: center;
    background: #576475b8;
}

.header, .footer {
    min-height: 70px;
    padding: 0 15px;
}

ul.top-menu > li > .logout {
    color: #f2f2f2;
    font-size: 13px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    border: 1px solid #64c3c2 !important;
    padding: 5px 15px;
    margin-right: 15px;
    background: #4ECDC4;
    margin-top: 15px;
}
</style>








    
@endsection
