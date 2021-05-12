<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
    <meta name="author" content="www.Zerotheme.com">

    <title>Eazy-Celebration </title>

 
  
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('accueil0/css/bootstrapp.min.css') }}" rel="stylesheet">
    
    <!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('accueil0/css/reset.css') }}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{ asset('accueil0/css/styleee.css') }}">
	<link rel="stylesheet" href="{{ asset('accueil0/css/animated-logo.min.css') }}"><!-- Logo -->
	<link rel="stylesheet" href="{{ asset('accueil0/css/our-team.css') }}"> <!-- Resource style -->
	
	<!-- Custom Fonts -->
    <link href="{{ asset('accueil0/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	
	<!-- Js -->
	<script src="{{ asset('accueil0/js/modernizr.js') }}"></script> <!-- Modernizr -->
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Eazy-Celebration <i class="fas fa-glass-cheers"></i> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li>
                        <a class="page-scroll" href="#page-top">Accueil</a>
                    </li>
                    <li>
					<a class="page-scroll" href="#services"> Evenements</a> 
                    </li>
					<li>
					<a class="page-scroll" href="#new"> Services</a> 
                    </li>
					<li>
					
					<a class="page-scroll" href="#about">A propos</a>
				   </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->

	<!-- /////////////////////////////////////////Header -->

	<!-- Header -->
	


	<div id="page-content" class="index-page">
		
            @yield('content')
       
	</div>
	
	<!-- /////////////////////////////////////////Content -->

	<!-- /////////////////////////////////////////Footer -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					
				<div >
			<div class="container">
				<div class="row">
					
					<div class="col-md-4">
						<ul class="list-inline">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-google"></i></a>
                            </li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>	
					
				</div>
			</div>
		</div>
		
	</footer>
	<!-- Footer -->

	
	<!-- jQuery -->
	<script src="{{ asset('accueil0/js/jquery-2.1.1.js') }}"></script>
	<script src="{{ asset('accueil0/js/masonry.pkgd.min.js') }}"></script>
	<script src="{{ asset('accueil0/js/jquery.flexslider-min.js') }}"></script>
	<script src="{{ asset('accueil0/js/main.js') }}"></script> <!-- Resource jQuery -->

	<!-- Bootstrap Core JavaScript -->
	<script src="{{ asset('accueil0/js/bootstrap.min.js') }}"></script>

	<!-- Custom Theme JavaScript -->
	<script src="{{ asset('accueil0/js/agency.js') }}"></script>

	<!-- Animated Top -->
	<script src="{{ asset('accueil0/js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('accueil0/js/classie.js') }}"></script>
	<script src="{{ asset('accueil0/js/cbpAnimatedHeader.js') }}"></script>

</body>
</html>



