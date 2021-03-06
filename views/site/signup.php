<?php include('include/header.php'); ?>

	<!-- signup-page -->
	<section id="main" class="clearfix user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="user-account">
						<h2>Create a new Account</h2>
						<form action="#">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Full Name" >
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email Address">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Confirm Password">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Mobile Number">
							</div>
							<!-- select -->
							<select class="form-control">
								<option value="#">Select Country</option>
								<option value="#">London UK</option>
								<option value="#">Newyork, USA</option>
								<option value="#">Seoul, Korea</option>
								<option value="#">Beijing, China</option>
							</select><!-- select -->
							
							<div class="checkbox">
								<label class="pull-left checked" for="signing"><input type="checkbox" name="signing" id="signing"> By signing up for an account you agree to our Terms and Conditions </label>
							</div><!-- checkbox -->	
							<button type="submit" href="#" class="btn">Registration</button>	
						</form>
						<!-- checkbox -->
										
					</div>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signup-page -->
	
	
	
<?php include('include/footer.php'); ?>