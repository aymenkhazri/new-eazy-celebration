@extends('accueil0.index')
  
@section('content')

<body>
<br>













<head>
<meta charset="UTF-8">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
	crossorigin="anonymous">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>


<div class="card" style=" margin-left:200px;">
<br>
<a  href="{{ url('/choixpayment') }}" style=" margin-left:50px;"> <i class="fas fa-chevron-circle-left" style="  font-size:35px;"></i> </a>
<br>

    <div class="card-body">
      
        <div class="row">
            <div class="col -md-7">
                <div class="left border">
                    <div class="row" > <span class="header" >Paiement</span>
                        <div class="icons"> <img src="{{ asset('assets/images/visa.png') }}"  /> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /> <img src="https://img.icons8.com/color/48/000000/maestro.png" /> </div>
                    </div>
                    <div class='form-row'>
						<div class='col-md-12 error form-group hide'>
							<div class='alert-danger alert'>Please correct the errors and try
								again.</div>
						</div>
					</div>
                    @if ((Session::has('success-message')))
				<div class="alert alert-success col-md-12">{{
					Session::get('success-message') }}</div>
				@endif @if ((Session::has('fail-message')))
				<div class="alert alert-danger col-md-12">{{
					Session::get('fail-message') }}</div>
				@endif
                <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
                    <form accept-charset="UTF-8" action="{{ url('/payment',$paiement->id) }}" class="require-validation"
					data-cc-on-file="false"
					data-stripe-publishable-key="pk_test_51IwGu8LwwlMMYl2uXq1ZImB3mKeiCxSCaW9FgNs7J0D6NqFDnlc4pNi7qsfWDDdgwmGpVnNFK5aAMio2AtX1XcE3004IAU2H1N"
					id="payment-form" method="post">
	                {{ csrf_field() }}
                

                  

                    <div class='  required'>
                    <label class='control-label' >Nom sur la carte :</label>
                     <input type='text' placeholder="nom sur la carte">
                     </div>
                     <div class='  required'>
                    <label class='control-label' >Prenom sur la carte :</label>
                     <input type='text' placeholder="prenom sur la carte">
                     </div>

                     <div class='  required'>
                     <label class='control-label' >Numéro de carte:</label>
                     <input class=' card-number'	type='text'	autocomplete='off' placeholder="0000 0000 0000 0000">
                     </div>

                        <div class="row">
                        <div class="col-4 cvc required"><label >CVC :</label>
                            <input  autocomplete='off' class=' card-cvc' placeholder='ex. 311' type='text' >
                             </div>



                     


                            <div class="col-4 expiration required"><label >Date d'expiration :</label>
                             <input  class=' card-expiry-month'	type='text' placeholder="MM"> </div>
                          
                             <div class="col-4 expiration required"><label ></label>
                            <input  	class='card-expiry-year'	type='text'  placeholder="YYYY"> </div>
                        
                        </div>

                       

                         <input type="checkbox" id="save_card" class="align-left"> <label for="save_card">Enregistrer les détails de la carte dans le portefeuille</label>
                   
                </div>
            </div>
            <div class="col-md-5">
                <div class="right border">
                    <div class="header">Récapitulatif de l'abonnement</div>
              <br>
                    <div class="row shop_container"  style=" margin-left:150px;">
       
                    <div class="col-lg-8 col-md-12 col-12">
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
                        <h3 class="product_title"><a href="shop-product-detail.html">{{ $paiement->duree}}</a></h3>
                        <hr>
                        <div class="product_price">
                        <h4>  <span class="price"> {{ $paiement->montant}} DT</span></h4>
                        <hr>
                        </div>
                        <div class="rating_wrap">
                            <div class="rating">
                                <div class="product_rate" style="width:80%"></div>
                            </div>
                      
                        </div>
                       
                       
                    </div>
                </div>
            </div>



           


          




          
       
          
           
        </div> 
                   
                    <hr>
                   
                    
                    <div class="row lower">
                        <div class="col text-left"><b>Total à payer</b></div>
                        <div class="col text-right"><b>{{ $paiement->montant}} DT</b></div>
                    </div>
                    <div class="row lower">
                     
                    </div> <button  type='submit' class="btn btn-fill-out btn-radius submit-button">Payer</button>

           
                  
                </div>
                
                </form>
            </div>
        </div>
    </div>
    <div> </div>
</div>






	<script src="https://code.jquery.com/jquery-1.12.3.min.js"
		integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
		crossorigin="anonymous"></script>
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
		integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
		crossorigin="anonymous"></script>
	<script>
		$(function() {
			  $('form.require-validation').bind('submit', function(e) {
			    var $form         = $(e.target).closest('form'),
			        inputSelector = ['input[type=email]', 'input[type=password]',
			                         'input[type=text]', 'input[type=file]',
			                         'textarea'].join(', '),
			        $inputs       = $form.find('.required').find(inputSelector),
			        $errorMessage = $form.find('div.error'),
			        valid         = true;
			    $errorMessage.addClass('hide');
			    $('.has-error').removeClass('has-error');
			    $inputs.each(function(i, el) {
			      var $input = $(el);
			      if ($input.val() === '') {
			        $input.parent().addClass('has-error');
			        $errorMessage.removeClass('hide');
			        e.preventDefault(); // cancel on first error
			      }
			    });
			  });
			});
			$(function() {
			  var $form = $("#payment-form");
			  $form.on('submit', function(e) {
			    if (!$form.data('cc-on-file')) {
			      e.preventDefault();
			      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
			      Stripe.createToken({
			        number: $('.card-number').val(),
			        cvc: $('.card-cvc').val(),
			        exp_month: $('.card-expiry-month').val(),
			        exp_year: $('.card-expiry-year').val()
			      }, stripeResponseHandler);
			    }
			  });
			  function stripeResponseHandler(status, response) {
			    if (response.error) {
			      $('.error')
			        .removeClass('hide')
			        .find('.alert')
			        .text(response.error.message);
			    } else {
			      // token contains id, last4, and card type
			      var token = response['id'];
			      // insert the token into the form so it gets submitted to the server
			      $form.find('input[type=text]').empty();
			      $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
			      $form.get(0).submit();
			    }
			  }
			})
		</script>
</body>
</html>
<br>
<br>
<br>



<style>


body {
    background: #dee2e660 none repeat scroll 0 0;
    color: #687188;
    font-family: 'cursive', sans-serif;
    font-size: 16px;
}
.navbar-nav {
    float: left;
    margin: -15px;
}

.navbar-brand {
    float: left;
    height: 50px;
  
    font-size: 25px;
    line-height: 20px;
}
.header_wrap.transparent_header {
    position: initial;
    height: 80px ;
  
}
.card {
  
    font-size: 1.6rem;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2  );
  transition: 0.3s;
  width: 80%;
  border-radius: 5px;
}







#logo {
    font-family: 'Dancing Script';
    font-weight: bold;
    font-size: 2.6rem
}

.card-body {
    padding: 0 5rem 5rem 5rem;
 
 
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
 
  border-radius: 5px;
}


    .card-top {
        padding: 0.7rem 1rem
    }
}

.row {
    margin: 0
}

.upper {
    padding: 1rem 0;
    justify-content: space-evenly
}

#three {
    border-radius: 1rem;
    width: 22px;
    height: 22px;
    margin-right: 3px;
    border: 1px solid blue;
    text-align: center;
    display: inline-block
}

#payment {
    margin: 0;
    color: blue
}

.icons {
    margin-left: auto;
   
}

form span {
    color: rgb(179, 179, 179)
}

form {
    padding: 2vh 0
}

input {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247)
}

input:focus::-webkit-input-placeholder {
    color: transparent
}

.header {
    font-size: 2.5rem
}

.left {
    background-color: #ffffff;
    padding: 2vh;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  
  border-radius: 5px;
}
.left:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4);
}

.left img {
    width: 2rem
}

.left .col-4 {
    padding-left: 0
}

.right .item {
    padding: 0.3rem 0
}

.right {
    background-color: #ffffff;
    padding: 2vh;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  
  border-radius: 5px;
}

.right:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4);
}

.col-8 {
    padding: 0 1vh
}

.lower {
    line-height: 2
}

.btn {
  
    border-color: #4ECDC4;
    color: white;
    width: 100%;
    font-size: 1.7rem;
    margin: 4vh 0 1.5vh 0;
    padding: 1.5vh;
    border-radius: 0
}

.btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none
}

.btn:hover {
    color: white
}

a {
    color: black
}

a:hover {
    color: black;
    text-decoration: none
}

input[type=checkbox] {
    width: unset;
    margin-bottom: unset
}

#cvv {
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.575), rgba(255, 255, 255, 0.541)), url("https://img.icons8.com/material-outlined/24/000000/help.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center
}
.nn {
	background-color: #4ECDC4 !important;


}
#cvv:hover {}
 </style>  
  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection