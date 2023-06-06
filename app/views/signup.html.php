<?php 
$pagetitle = "Sign Up";
//include 'models/includes/html-output-helpers.inc.php';
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
<!-- Start of Header -->
		<?php include 'layouts/headerfend.inc.html.php'; ?>
		<!-- End of Header -->
		<body class="hold-transition ">	
			<!-- Scroll to Top-->
			<button onclick="topFunction()" id="myBtn" title = "Go to top">Top</button>
			<!-- header for navigation -->
			<?php include 'layouts/navfend.inc.html.php'; ?>
			<!-- #header for Navigation-->
	  
			<!-- start banner Area -->
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Sign Up				
							</h1>	
							
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  
	<!-- Sign up activation form begins here-->		  
	<?php   
	if($_SESSION['activ_code_hash'])  
	{  ?>
	
	<section class="contact-page-area section-gap" >
		<div class="container" align ="center" >
          <div class="col">
		  	
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="card bg-outline text-white">

                  <div class="card-body" align ="center">
				  <a href="." target="_self"> 
                    <button type="button" class="btn btn-info btn-nobg btn-zoom--hover mb-5">
                     <span class="btn-inner--icon"><i class="fa fa-arrow-left" title ="Back"></i></span> 
                    </button> </a>
                    <span class="clearfix"></span>
	<?php include'views/layouts/messages.inc.html.php'; ?>
                    <h5 class="heading h5 text-white" align ="center">Thank you for Joining our Community! </h5>
                   
 
                    <form  class="form-primary" method="post" name="signup" action ="?activparam=<?php echo $_SESSION['email']; ?> " >
                      <div class="form-group" align= "center" >
                        <input type="text" class="form-control" name ="activate" id="activate" placeholder="Enter the code sent to your email here to activate" required="true">
                      </div>

                     
					  
                      <button type="submit" class="btn btn-block btn-lg bg-white mt-4">Activate</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	  <!-- Activation section ends here-->
<?php 
	  
	  unset($_SESSION['activ_code_hash']);
	  
	} else
	{  ?>	  
	    		
			<!-- Start sign up-page Area -->
		<section class="contact-page-area section-gap" >
			<div class="container" align ="center" >
				   
				<div class="map-wrap" style="width:500px; height: 600px;" >
					<div class="register-box  d-flex flex-column" >
					  <!-- /logo -->
						
						  <div class="card card-outline card-warning">

								
							<div class="card-header text-center">
							  <a href="." class="h1"><?php echo $phtitle; ?></a>
							
							</div>
							<div class="card-body">
							  <p class="login-box-msg"><i>Sign up to get started</i></p>

							  <form method="post" name="signup" action="?<?php htmlout($action). '&activation_code='.$activ_code_hash. '&email='. $email; ?>"  onSubmit="return checkpass();" enctype="multipart/form-data">
								
								<div class="input-group mb-3">
								  <input name = "firstname" value = "<?php   echo $fname; ?>" type="text" class="form-control" placeholder="First name" required>
								  <div class="input-group-append">
									<div class="input-group-text">
									  <span class="fa fa-user"></span>
									</div>
								  </div>
								</div>
								
								<div class="input-group mb-3">
								  <input name = "lastname" value = "<?php  echo $lname; ?>" type="text" class="form-control" placeholder="Last name" required>
								  <div class="input-group-append">
									<div class="input-group-text">
									  <span class="fa fa-user"></span>
									</div>
								  </div>
								</div>
								
								<div class="input-group mb-3">
								  <input name = "email" value = "<?php  echo $email; ?>" type="email" class="form-control" placeholder="Use Functional Email" required>
								  <div class="input-group-append">
									<div class="input-group-text">
									  <span class="fa fa-envelope"></span>
									</div>
								  </div>
								</div>
								
								<div class="input-group mb-3">
								  <input name = "phone" value = "<?php  echo $phone; ?>" type="text" class="form-control" placeholder="Phone Number" required>
								  <div class="input-group-append">
									<div class="input-group-text">
									  <span class="fa fa-phone"></span>
									</div>
								  </div>
								</div>
								
								<div class="input-group mb-3" id="password_validations">
								  <input name = "password" type="password" value = "" id="passwordd" class="form-control" placeholder="Password (Max 8 Charaters)" maxlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
								  <div class="input-group-append">
									<div class="input-group-text">
									  <span class="fa fa-lock"></span>
									</div>
								  </div>
								<div id="message">
									<h7>Password Requirements:</h7>
									<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
									<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
									<p id="number" class="invalid">A <b>number</b></p>
									<p id="length" class="invalid">Minimum <b>8 characters</b></p>
								</div> 
								</div>
								
								<div class="input-group mb-3">
								  <input type="password" name="repeatpassword" value = "" id="repeatpassword" class="form-control" placeholder="Retype password (Max 8 Charaters)" maxlength="8" required>
								  <div class="input-group-append">
									<div class="input-group-text">
									  <span class="fa fa-lock"></span>
									</div>
								  </div>
								</div>

								
								<div class="row">
								  <div class="col-8">
									<div class="icheck-primary">
									  <input type="checkbox" id="agreeTerms" name="terms" value="agree">
									  <label for="agreeTerms">
									   I agree to the <a href="#">terms</a>
									  </label>
									</div>
								  </div>
								  <!-- /.col -->
								  <div class="col-4">
									<button type="submit" class="btn btn-success btn-block"><?php  htmlout($button); ?></button>
								  </div>
								  <!-- /.col -->
								</div>
							  </form>

							  <div class="social-auth-links text-center">
								<a href="#" class="btn btn-block btn-primary">
								  <i class="fa fa-facebook mr-2"></i>
								  Sign up using Facebook
								</a>
								<a href="#" class="btn btn-block btn-danger">
								  <i class="fa fa-google mr-2"></i>
								  Sign up using Google
								</a>

							  </div>
								 Already  a member?    
							  <a href="?login" class="text-center"> Login</a> 
							</div>
							<!-- /.form-box -->
						  </div><!-- /.card -->
					
					</div>
					<!-- /.login-box -->
				</div>	
<?php 
	} ?>				
			</div>	
		</section>
			
			<!-- start footer Area -->		
			<?php include 'layouts/footerfend.inc.html.php'; ?>
			<!-- End footer Area -->
			
			<!-- Core Scripts -->
			<?php //include 'includes/layouts/scriptfend-did.inc.html.php'; ?>
			<?php include 'layouts/scriptfend.inc.html.php'; ?>
			<!--- Scripts ends here --->
		</body>
	</html>