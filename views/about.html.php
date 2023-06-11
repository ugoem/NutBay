<?php 
//testing
$pagetitle = "About";

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


			

			

			<!-- Start about-info Area -->
			<section class="other-issue-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
						<div class="col-lg-4 info-left">
							<img class="img-fluid" src="views/assets/img/about/about-us.jpeg" alt="">
						</div>
						<div class="col-lg-8 info-right" id = "about">
							<h3>About Us</h3>
							<h2>Who We Are?</h2>
							<p>
								NutBay is a social platform where professional nutritionist and herbalist will come together to share ideas about natural solution to several health challenges facing humankind. The sole purpose of the platform is to create a niche where those who believe specifically on the use of natural resources to advance and preserve human health, can connect freely with each other as well as the general public to offer free and paid services, when the need arises, to their prospective beneficiaries. </p>
								<p>
								The fact that average life expectancy of humankind especially in the western civilized world and Africa has drastically reduced and the need to re-engineer the situation inspired this project. Through this project we plan to increase people’s awareness about the potent of natural foods, shrubs and herbs. We believe that reprogramming their mind-set towards falling in love with nature and its natural elements will greatly solve this problem for humanity at large. </p>
								<p>
								This project is part of <a href = "https://www.alxafrica.com/"> ALX Holberton</a> School Portfolio Project required for graduation.  </p>
	<h2>Team Members</h2>
								<p>
								This project would not have been possible without the contributions of my wonderful team members which include the following:
								<li>
									1.	Anionovo Ugochukwu E. ( <a href = "https://www.linkedin.com/in/anionovo-ugochukwu-edebeani/"> Linkedin</a>, <a href = "https://github.com/ugoem">GitHub</a>, <a href ="https://twitter.com/sam_ugoem"> Twitter </a>)  
								</li>
								<li>
										2.	Karlie Moyo (<a href = "https://www.linkedin.com/in/karlie-moyo/"> Linkedin </a>, <a href = "https://github.com/Karlie-crypto"> GitHub </a>, <a href = "https://twitter.com/karlieemoyo/"> Twitter </a>)
								</li>
								<li>
										3.	Edeh Esther N. (<a href = "https://www.linkedin.com/in/nnenna-e-edeh-128045274"> Linkedin </a>, <a href = "http://livinggood.com.ng/"> LivinGood </a> <a href = "https://twitter.com/EstherEdeh18"> Twitter </a>)
								</li>
										</p>
				<h2>Repository</h2>
								<p>Find Git repository for <a href = "https://github.com/ugoem/NutBay"> NutBay </a> Project here  </p>

							
						</div>
					</div>
				</div>	
			</section>
			<!-- End about-info Area -->
			
<!-- Start sub-body area -->

			<?php include 'layouts/sub_body.inc.html.php'; ?>
<!-- /.end sub-body area -->

			
			<!-- End home-about Area -->
			<!-- start footer Area -->		
			<?php include 'layouts/footerfend.inc.html.php'; ?>
			<!-- End footer Area -->
			
			<!-- Core Scripts -->
			<?php include 'layouts/scriptfend.inc.html.php'; ?>
			<!--- Scripts ends here --->

		</body>
	</html>