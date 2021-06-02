@extends('accueil0.index')
  
@section('content')

<br>
<br>
<br>
<br>
<br>
<br>
<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">

			<div class="container"  >
				<div class="row heading">
					<div class="col-lg-12">
	                   
                <div class="heading_s1 text-center">
                	<h1>Contact</h1>
					<hr>
                </div>
						<br>
<br>
	                    <h5>N'hésitez pas à me contacter en cas de besoin</h5>
	                </div>
				</div>
				<br>
<br>
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
										<button type="submit" class="btn btn-fill-out  " name="btnContactUs" id="btnContactUs" style=" margin-left:480px;">
									Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>


		<br>
<br>
<br>
<br>
<br>
<br>
		<br>
<style>
		.nn {
	background-color: #4ECDC4 !important;


}

</style>
@endsection

