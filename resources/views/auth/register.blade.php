

<!DOCTYPE html>
<html lang="en">
<head>
	<title>S'inscrire</title>
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
                
            <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
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
					S'inscrire
					</span>


				<table >
						<tr>
							<td>
											<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required" >
											<input class="input1000" :value="__('Name')" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder=" nom">
												
												<span class="focus-input100"></span>
												<span class="symbol-input100">
													<i class="fa fa-user"></i>
												</span>
							
											</div>

							</td>
							<td>
                                                <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required" style=" margin-left:20px;" >
                                                    <input class="input1000" :value="__('Prenom')" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus  placeholder=" prenom">
                                                    <span class="focus-input100"></span>
                                                    <span class="symbol-input100">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>

							</td>
						
						<tr>

					</table >			
					

					


					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100"  :value="__('Email')" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder=" email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>


					
					

					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required" >
						<input class="input100" :value="__('Password')" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" placeholder=" mode de passe">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-lock"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required" >
						<input class="input100"  :value="__('Confirm Password')" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required placeholder=" confirm mode de passe">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-lock"></i>
						</span>
					</div>


					<div  data-validate = "Username is required"  style=" margin-left:100px; "  >
					<select name="role_id" class="input100"  :value="__('register as')">
                    
						<option class="input100" value="client">Client</option>
						<option class="input100" value="fournisseur">Fournisseur</option>
					  </select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						
						</span>
					</div>



					
					<div class="container-login100-form-btn p-t-10" style=" margin-left:20px;" >
					<button  class="login100-form-btn"  >
                    {{ __('Inscrire') }}
                     </button>
					</div>

					<div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà enregistré?') }}
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
