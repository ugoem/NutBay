<?php 
$pagetitle = "Login";
?>
	<!DOCTYPE html>
	<html lang="en" class="no-js">
<!-- Start of Header -->
		<?php include 'views/layouts/headerfend.inc.html.php'; ?>
		<!-- End of Header -->
		<body class="hold-transition ">	
			<!-- Scroll to Top-->
			<button onclick="topFunction()" id="myBtn" title = "Go to top">Top</button>
			<!-- header for navigation -->
			<?php include 'views/layouts/navfend.inc.html.php'; ?>
			<!-- #header for Navigation-->
	  
			<!-- start banner Area -->
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Login				
							</h1>	
							
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  
			
			<!-- Start Login-page Area -->
		<section class="contact-page-area section-gap" >
			<div class="container" align ="center" >
				  
			<div class="map-wrap" style="width:500px; height: 445px;" >
					<div class="login-box  d-flex flex-column" >
					  <!-- /.login-logo -->
					  <div class="card card-outline card-warning">
						<div class="card-header text-center">
						  <a href="." class="h1"><?php echo $phtitle; ?></a>
						</div>
							<!-- Display message here-->  
							<p align="center" style="font-size:16px; color:red"> 
						   
							<?php if(isset($error)) { echo html($error);  } ?></p>
						   
							<?php include'layouts/messages.inc.html.php'; ?>
							<p align="center" style="font-size:16px; color:red"> 
							<?php if (isset($GLOBALS['loginError'])): ?>
							<?php echo html($GLOBALS['loginError']); ?></p>
							<?php endif; ?>
						<div class="card-body">
						<h1 class="text"> Login </h1>
						  <p class="login-box-msg"><i>Sign in to start your session</i></p>

						  <form action="" method="post">
							<div class="input-group mb-3">
							  <input name "email" value = "<?php  echo $email; ?>" type="email" class="form-control" placeholder="Enter Registered Email" required>
							  <div class="input-group-append">
								<div class="input-group-text">
								  <span class="fa fa-envelope"></span>
								</div>
							  </div>
							</div>
							<div class="input-group mb-3">
							  <input name="password" type="password"  class="form-control" placeholder="Password" required>
							  <div class="input-group-append">
								<div class="input-group-text">
								  <span class="fa fa-lock"></span>
								</div>
							  </div>
							</div>
							<div class="row">
							  <div class="col-8">
								<div class="icheck-primary">
								  <input type="checkbox" id="remember" name = "remember" value "1" >
								  <label for="remember">
									Remember Me
								  </label>
								</div>
							  </div>
							  <!-- /.col -->
							  <div class="col-4">
							  <input type="hidden" name = "action" value = "login"/>
							<input type="submit" class="btn btn-success btn-block" value = "Log in"/>
							  </div>
							  <!-- /.col -->
							</div>
						  </form>

						  <div class="social-auth-links text-center mt-2 mb-3">
							<a href="#" class="btn btn-block btn-primary">
							  <i class="fa fa-facebook mr-2"></i> Sign in using Facebook
							</a>
							<a href="#" class="btn btn-block btn-danger">
							  <i class="fa fa-google mr-2"></i> Sign in using Google
							</a>
						  </div>
						  <!-- /.social-auth-links -->

						  <p class="mb-1"> Forgot password?
							<a href="?forgot_password">Retrieve</a>
						  </p>
						  <p class="mb-0"> New to this space? 
							<a href="?sign_up" class="text-center">Sign Up</a>
						  </p>
						</div>
						<!-- /.card-body -->
					  </div>
					  <!-- /.card -->
					</div>
					<!-- /.login-box -->
				</div>	
				
			</div>	
		</section>
			
			<!-- start footer Area -->		
			<?php include 'views/layouts/footerfend.inc.html.php'; ?>
			<!-- End footer Area -->
			
			<!-- Core Scripts -->
			<?php //include 'includes/layouts/scriptfend-did.inc.html.php'; ?>
			<?php include 'views/layouts/scriptfend.inc.html.php'; ?>
			<!--- Scripts ends here --->
		</body>
	</html>