<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Eazy-Celebration</title>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet"  href="<?php echo asset('csss/main.css'); ?>" type="text/css"> 



  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/zabuto_calendar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/gritter/css/jquery.gritter.css') }}" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
  <script src="{{ asset('lib/chart-master/Chart.js') }}"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="accueil" class="logo"><b>Eazy-Celebration  <span><i class="fas fa-glass-cheers"></i>  </span></b></a>
      <!--logo end-->





      
      <div class="nav notify-row" id="top_menu">
      
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
        
        <li>  <a  class="logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      Se déconnecter  <i class="fas fa-sign-out-alt"></i> 
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
         </li>
        
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered"><a href="{{ url('/user/profile') }}"><img src="{{asset('images')}}/{{ Auth::user()->avatar }}" class="img-circle" height="70px;" width="70px;"></a></p> 
       
          <h5 class="centered">  {{ Auth::user()->name }}</h5>

         
          <li class="mt">
            <a  class="active" href="{{url('bienvenue')}}" >
            
            <font size="3.5" color="#D2D2D2" ><span class="fas fa-home"></span> <span>Accueil</span></font>
              </a>
          </li>



          <li class="sub-menu">
      <a class="javascript:;" href="{{ url('/user/profile') }}" >
     
      
              <font size="3.5" color="#D2D2D2" ><span class="fas fa-user""  > </span> <span>Profile</span></font>
      </a>
     
     </li>  


          <li class="sub-menu">
      <a class="javascript:;"  >
     
      
              <font size="3.5" color="#D2D2D2" ><span class="fas fa-list-alt"  > </span> <span>Annonces</span></font>
      </a>
     
     </li>

     <li class="sub-menu">
      <a class="javascript:;" >
     
      
      <font size="3.5" color="#D2D2D2"    > <span class="fas fa-list-alt"> </span> <span>Demandes</span></font>
      </a>
     
     </li>




          <li class="sub-menu">
      <a class="javascript:;"  href="{{url('/user/clients')}}" >
     
      
              <font size="3.5" color="#D2D2D2" ><span class="fas fa-users"> </span> <span>Clients</span></font>
      </a>
     
     </li>


     <li class="sub-menu">
      <a class="javascript:;"   href="{{url('/user/fournisseurs')}}">
     
      
              <font size="3.5" color="#D2D2D2" ><span class="fas fa-users"> </span> <span>Fournisseurs</span></font>
      </a>
     
     </li>




          
  
        


        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
      
      
      <br>
      
      
     

<main class="py-4">
            @yield('content')
        </main>

 
 <br>
      <br>
      
      

      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer  class="fixed-bottom">
      <div class="site-footer" >
     
      </div>
      </div>
    </footer>
    <!--footer end-->
  </section>



  <script src=" {{ asset(' lib/jquery/jquery.min.js') }} "></script>

  <script src="  {{ asset('lib/bootstrap/js/bootstrap.min.js') }} "></script>
  <script class="include" type="text/javascript" src="   {{ asset('lib/jquery.dcjqaccordion.2.7.js') }} "></script>
  <script src=" {{ asset('lib/jquery.scrollTo.min.js') }} "></script>
  <script src=" {{ asset(' lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="  {{ asset('lib/jquery.sparkline.js') }} "></script>
  <!--common script for all pages-->
  <script src="  {{ asset('lib/common-scripts.js') }} "></script>
  <script type=" text/javascript" src="{{ asset('lib/gritter/js/jquery.gritter.js')}}"></script>
  <script type="text/javascript" src="{{ asset('lib/gritter-conf.js')}}"></script>
  <!--script for this page-->
  <script src="  {{ asset('lib/sparkline-chart.js') }} "></script>
  <script src="  {{ asset('lib/zabuto_calendar.js') }} "></script>
 
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>





 
</body>

</html>

