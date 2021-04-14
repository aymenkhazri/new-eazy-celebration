

  



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href=" {{ asset('loginn/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset('loginn/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset('loginn/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset('loginn/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset('loginn/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href=" {{ asset('loginn/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset('loginn/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset('loginn/css/utill.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{ asset('loginn/css/mainnn.css') }}">
<!--===============================================================================================-->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Validation Errors -->
        
        <link rel="stylesheet" href="{{ asset('accueil0/css/animated-logologinn.min.css') }}"><!-- Logo -->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('bg-1.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
           
				<form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
            @csrf

				
                   
                    <div class="o-container">
						<div class="c-slack">
						  <span class="c-slack__dot c-slack__dot--a"></span>
						  <span class="c-slack__dot c-slack__dot--b"></span>
						  <span class="c-slack__dot c-slack__dot--c"></span>
						  <span class="c-slack__dot c-slack__dot--d"></span>
						</div>
					</div>

                    <span class="loginn100-form-title ">
                        
                        <x-auth-validation-errors  :errors="$errors" />
                        </span>
                        <div class="pull-right" style=" margin-left:600px;" >
                        <a class="btn btn-info" href="{{ url('/') }}">Retour</a>
                         </div>
                    <span class="login100-form-title p-t-20 p-b-45">
                    Connexion
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
                

                     <input class="input100"   :value="__('Email')" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                  

                <input class="input100"  :value="__('Password')" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password" placeholder="Mot de passe" />
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

                    
					<div class="container-login100-form-btn p-t-10" style=" margin-left:20px;" >
					<button  class="login100-form-btn"  >
                    {{ __('Connecter') }}
                     </button>
					</div>
					
                    <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span  class="txt1">{{ __('Souviens-toi de moi') }}</span>
                </label>
            </div>

			<div class="text-center w-full p-t-25 p-b-230" class="txt1">
			@if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié 	?') }}
                    </a>
                @endif
                <br>
                <a href="{{ route('register') }}" class="txt1">
                        Créer un nouveau compte
						</a>
					</div>







				
				
</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src=" {{ asset('loginn/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src=" {{ asset('loginn/vendor/bootstrap/js/popper.js') }}"></script>
	<script src=" {{ asset('loginn/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src=" {{ asset('loginn/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src=" {{ asset('loginn/js/main.js') }}"></script>

</body>
</html>

