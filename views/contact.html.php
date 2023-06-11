<?php 
$pagetitle = "Contact";
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
<!-- Start of Header -->
		<?php include 'layouts/headerfend.inc.html.php'; ?>
		<!-- End of Header -->
		<body>	
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
								<?php echo $pagetitle; ?>				
							</h1>	
							<p class="text-white link-nav"><a href=".">Home </a>  <span class="lnr lnr-arrow-right"></span><?php echo $pagetitle; ?></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
	<div class="map-wrap" style="width:100%; height: 445px;" >
					 <!-- [START maps_add_map_heading] -->
			<font color="0080ff">  <h3><b>Find us on Map</b></h3> </font>   <br>
		<div class="mapouter">
			

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1354116728767!2d7.1173190737443175!3d6.245880193742494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104378edb8d8e37d%3A0x9f32c5103b825233!2sNnamdi%20Azikiwe%20University!5e0!3m2!1sen!2sng!4v1685383452009!5m2!1sen!2sng" width="100%" height="450" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"style="border:0;" allowfullscreen="yes" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}
				</style>
			
		</div>
	</div>  
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Awka, Anambra Nigeria</h5>
									<p>
										Nnamdi Azikiwe University, Enugu-Onitsha expressway
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>+234 703 890 8180</h5>
									<p>Mon to Sat 9am to 6 pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>info@nutsbay.com</h5>
									<p>Send us your query anytime!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form class="form-area contact-form text-right" id="myForm" action="?sendmail" method="post">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary" style="float: right;">Send Message</button>											
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->
			
			<!-- start footer Area -->		
			<?php include 'layouts/footerfend.inc.html.php'; ?>
			<!-- End footer Area -->
			
			<!-- Core Scripts -->
			<?php //include 'includes/layouts/scriptfend-did.inc.html.php'; ?>
			<?php include 'layouts/scriptfend.inc.html.php'; ?>
			<!--- Scripts ends here --->
		</body>
	</html>