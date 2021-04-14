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
    <link rel="stylesheet" href="{{ asset('accueil0/css/stylee.css') }}">
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
                        <a class="page-scroll" href="#contact">Contacte</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->

	<!-- /////////////////////////////////////////Header -->
	<header id="page-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="o-container">
						<div class="c-slack">
						  <span class="c-slack__dot c-slack__dot--a"></span>
						  <span class="c-slack__dot c-slack__dot--b"></span>
						  <span class="c-slack__dot c-slack__dot--c"></span>
						  <span class="c-slack__dot c-slack__dot--d"></span>
						</div>
					</div>
				<div>
				<a class="btn btn-1 btn-sm" href="{{ route('register') }}"> S'inscrire</a>
                    <a class="btn btn-1 btn-sm" href="{{ route('login') }}">Se connecter</a>
                </div> 
					<div class="intro-text">
						<div class="intro-lead-in">eazy-celebration</div>
						<div class="intro-heading">vous êtes le bienvenu </div>
					</div>
					

				</div>
			</div>
		</div>
    </header>
	<!-- Header -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page">
		
		<!-- ////////////Content Box 01 -->
		<section id="evenements" class="box-content box-1">
			<div class="container" id="services">
				<div class="row heading">
					<div class="col-lg-12">
						<h2>evenements</h2>
						<hr>
						<div class="intro">eazy-celebration solution et evenement</div>
					</div>
				</div>
				<h3 class="black" align="left">Notre evenements</h3>
				<div class="row">
				@foreach ($categorie_evenements as $categorie_evenement)
					<div class="col-sm-3 box-item">
						<div class="wrap-img">
						<img src="{{asset('images')}}/{{ $categorie_evenement->image}}" width="150px;" height="70px;"/>
						</div>
						<h3 class="red">{{ $categorie_evenement->type_evenement}}</h3>
						<p>{{ $categorie_evenement->description}}</p>
						<br>
					
				
					</div>
					@endforeach	
				</div>	
			
			</div>
			
			<section  class="box-content box-2 box-style">
			<blockquote>The more you praise and celebrate your life, the more there is in life to celebrate.</blockquote>
		</section>
			<div class="container" id="new"> 
				<div class="row heading">
					<div class="col-lg-12">
					<br>
					<br>
					<br>
					<br>
						<h2  >Services</h2>
						<hr>
						<div class="intro">eazy-celebration solution et service</div>
					</div>
				</div>
			<h3 class="black" align="left" >Notre service</h3>
			<div class="row">
				@foreach ($categorie_services as $categorie_service)
					<div class="col-sm-3 box-item">
						<div class="wrap-img">
						<img src="{{asset('images')}}/{{ $categorie_service->image}}" width="150px;" height="70px;"/>
						</div>
						<h3 class="red">{{ $categorie_service->type_service}}</h3>
						<p>{{ $categorie_service->description}}</p>
						<br>
					
				
					</div>
					@endforeach	
				</div>	
			
		</section>
		
		<!-- ////////////Content Box 02 -->
		<section  class="box-content box-2 box-style">
			<div class="container">
				<div class="row">
					<blockquote>The more you praise and celebrate your life, the more there is in life to celebrate.</blockquote>
				</div>		
			</div>
		</section>
		
		<!-- ////////////Content Box 03 -->
		<section id="about" class="box-content box-3">
			<div class="container">
				<div class="row heading">
					<div class="col-lg-12">
						<h2>A propos</h2>
						<hr>
						<div class="intro">Notre concepte, Notre histoire et Notre cible</div>
					</div>
				</div><div class="row" align="center">
					<div class="col-lg-12">
				
					<img src="image.jpg"   style="width:1000px; height:200px; "  >
						<ul>
							<li>
								<div class="timeline-panel">
								<br>
								<br>
								<br>
										<h4 class="subheading">Notre concepte</h4>
										<br>
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
									 </p>
									</div>
								</div>
							</li>
			
						</ul>
					</div>
				</div>		
			</div>
		</section>
		
		<!-- ////////////Content Box 04 -->
		<section id="new" class="box-content box-2 box-style">
			<div class="container">
				<div class="row">
					<blockquote>The more you praise and celebrate your life, the more there is in life to celebrate.</blockquote>
				</div>		
			</div>
		</section>
		
		<!-- ////////////Content Box 05 -->
		<section class="box-content box-5" id="contact">
			<div class="container"  >
				<div class="row heading">
					<div class="col-lg-12">
	                    <h2>Contact</h2>
						<hr>
	                    <div class="intro">N'hésitez pas à me contacter en cas de besoin</div>
	                </div>
				</div>
					<div class="col-md-12">
						<div id="contact-form">
							<form name="form1" method="post" action="contact.php">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
											placeholder="Message"></textarea>
										</div>						
										<button type="submit" class="btn btn-3 btn-block" name="btnContactUs" id="btnContactUs">
									Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		
	</div>
	
	<!-- /////////////////////////////////////////Footer -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					
				<div >
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>Copyright &copy; Your Website - Designed by <a href="https://www.Zerotheme.com">Zerotheme</a></p>
					</div>
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