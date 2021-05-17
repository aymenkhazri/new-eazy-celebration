@extends('admin.index')
 
@section('content')

<section id="content">
      <section >
        <div class="row">
          <div class="col-lg-9 main-chart">
            <br>
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3> Anonnces</h3>
            </div>
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span>10.000</span></li>
                <li><span>8.000</span></li>
                <li><span>6.000</span></li>
                <li><span>4.000</span></li>
                <li><span>2.000</span></li>
                <li><span>0</span></li>
              </ul>
              <div class="bar">
                <div class="title">JAN</div>
                <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
              </div>
              <div class="bar ">
                <div class="title">FEB</div>
                <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
              </div>
              <div class="bar ">
                <div class="title">MAR</div>
                <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
              </div>
              <div class="bar ">
                <div class="title">APR</div>
                <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
              </div>
              <div class="bar">
                <div class="title">MAY</div>
                <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
              </div>
              <div class="bar ">
                <div class="title">JUN</div>
                <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
              </div>
              <div class="bar">
                <div class="title">JUL</div>
                <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
              </div>
            </div>
            <!--custom chart end-->
            
            <br>
            <br>
            <br>
            <div class="row mt">
              <!-- SERVER STATUS PANELS -->
              <div class="col-md-6 col-sm-4 mb">
               <a  href="{{route('clients.index')}}" >
                <div class="darkblue-panel pn"  style="  border-radius: 50px;">
                     <br>

                <font size="5" color="#D2D2D2" ><span class="fas fa-users"> </span>    <span> Les  Clients </span></font> 
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
                  
                    <div class="col-sm-12 col-xs-4">
                      <h3>{{ $clients}} clients</h3>
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
                </a>
              </div>
              <!-- /col-md-4-->
              <div class="col-md-6 col-sm-4 mb">
                <a  href="{{route('fournisseurs.index')}}">
                <div class="darkblue-panel pn"  style="  border-radius: 50px;">
                     <br>

                <font size="5" color="#D2D2D2" ><span class="fas fa-users"> </span>    <span> Les  Fournisseurs </span></font> 
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
                      <h3>{{ $fournisseurs}} fournisseurs</h3>
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
                </a>
              </div>
              <!-- /col-md-4 -->
        
              <!-- /col-md-4 -->
            </div>
         
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <div class="donut-main">
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
            <div class="panel terques-chart">
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
    













    
@endsection
