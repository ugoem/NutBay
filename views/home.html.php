<?php 
//testing
$pagetitle = "Home";

 //error_reporting(0);
?>

	<!DOCTYPE html>
	<html lang="en" class="no-js">
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
			<section class="banner-area relative">
			<br><br>
				<div class="overlay overlay-bg"></div>				
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						
						<div class="col-lg-6 col-md-6 banner-left">
						<p class="text-white"><small><em>..Home of nature enthusiast..</em></small></p>
							<h5 class="text-white">Are You Truly in Love with Nature?</h5>		
							<h1 class="text-white">NutBay Community is your Sure Bet!</h1>
							<p class="text-white">
								For you are one step away from Natural Solution to your  Concern...
							</p>
							<a href="?sign_up" class="primary-btn text-uppercase">Get Started</a>
						</div>
 					<div class="col-lg-4 col-md-6 banner-right">
						<!-- Search form -->
						<div class="widget-wrap">							

								<div class="single-sidebar-widget search-widget ">
									<form class="search-form" action="#">
			                            <input placeholder="Search Community" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Community'" >
			                            <button type="submit"><i class="fa fa-search"></i></button>
			                        </form>
								</div>
						</div>
							  
					</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->


			

			

			<!-- Start top community Area -->
			<section class="other-issue-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-9">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Top Community Members</h1>
		                        <p>Checkout our Top community members. You too can be member.</p>
		                    </div>
		                </div>
						
		            </div>					
					<div class="row">
              <div class="col-md-6 col-lg-3 col-xl-4">
                <div class="thumb">
                  <img class="profile-user-img img-fluid img-circle" src="views/assets/img/profile.jpg" alt="profile">
                  <div >
				
								<a href="#">
									<h4>Anionovo Ugochukwu</h4>
								</a>
								<p >
									Am a Software Engineer, Electrical Engineer, Freelancer, and University Teacher. Am passionate about nature and the use of natural product to improve and preserve human health.
									 </p>
									
								
									<h6> Follow @ </h6>
									<a href="https://www.linkedin.com/in/anionovo-ugochukwu-edebeani/"><i class="fa fa-linkedin"></i></a>
									<a href="https://github.com/ugoem"><i class="fa fa-github"></i></a>
									<a href="https://twitter.com/sam_ugoem"><i class="fa fa-twitter"></i></a>
                  </div>
                </div>
				
              </div>
	              <div class="col-md-6 col-lg-3 col-xl-4">
                <div class="thumb">
                  <img class="profile-user-img img-fluid img-circle" src="views/assets/img/user1-128x128.jpg" alt="profile">
                  <div >
				
								<a href="#">
									<h4>Jonathan Burke Jr.</h4>
								</a>
								<p >
									Am a Software Developer, Freelancer, and Nature Enthusiast. Am passionate about nature and the use of natural product to improve and preserve human health.
									 </p>
									
								
									<h6> Follow @ </h6>
									<a href="https://www.linkedin.com/in/Jonathan-Burke-jr/"><i class="fa fa-linkedin"></i></a>
									<a href="https://github.com/Burke"><i class="fa fa-github"></i></a>
									<a href="https://twitter.com/jr_Burke"><i class="fa fa-twitter"></i></a>
                  </div>
                </div>
				
              </div>
						
              <div class="col-md-6 col-lg-3 col-xl-4">
                <div class="thumb">
                  <img class="profile-user-img img-fluid img-circle" src="views/assets/img/user4-128x128.jpg" alt="profile">
                  <div >
				
								<a href="#">
									<h4>Nina Mcintire</h4>
								</a>
								<p >
									Am a Web designer, Nutritionist, and Freelancer. Am passionate about nature and the use of natural product to improve and preserve human health.
									 </p>
									
								
									<h6> Follow @ </h6>
									<a href="https://www.linkedin.com/in/nina-mcintire/"><i class="fa fa-linkedin"></i></a>
									<a href="https://github.com/ninam"><i class="fa fa-github"></i></a>
									<a href="https://twitter.com/m_nina"><i class="fa fa-twitter"></i></a>
                  </div>
                </div>
				
              </div>																		
					</div>
				</div>	
			</section>
			<!-- End top community Area -->
			

<!-- Start sub-body area -->

			<?php include 'layouts/sub_body.inc.html.php'; ?>
<!-- /.end sub-body area -->
			
			<!-- start footer Area -->		
			<?php include 'layouts/footerfend.inc.html.php'; ?>
			<!-- End footer Area -->
			
			<!-- Core Scripts -->
			<?php include 'layouts/scriptfend.inc.html.php'; ?>
			<!--- Scripts ends here --->

		</body>
	</html>