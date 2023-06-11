<?php 
//
$appversion = "1.0";
$year = date('Y');
?>
	
			<footer class="footer-area section-gap">
				<div class="container">

					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About NUTsBAY</h6>
								<p>
									NUTsBAY is an easy to use social platform where professional nutritionist, herbalist, and dietitians as well as other internet users conglomerate to share ideas about natural solution to several health challenges facing humankind. 
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Useful Links</h6>
								<div class="row">
									<div class="col">
										<ul>
											<li><a href="../">Home</a></li>
											<li><a href="../#">Feature</a></li>
											<li><a href="../#">How it Works</a></li>
											<li><a href="../#">Portfolio</a></li>
										</ul>
									</div>
									<div class="col">
										<ul>
											<li><a href="../#">Team</a></li>
										<!--	<li><a href="#">Pricing</a></li>-->
											<li><a href="../#">Blog</a></li>
											<li><a href="../?contact_us">Contact</a></li>
										</ul>
									</div>										
								</div>							
							</div>
						</div>							
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
					<!-- DIspalys messages-->
					<?php 
				 
						//include'views/layouts/messages.inc.html.php'; 
						
						?>
								
								<!-- <h6>Newsletter</h6>
								<p>
									Sign up for our newsletters here. We don't sparm you.									
								</p> 								

	                <form method="post" action="?newsletters#newsletter">
                        <div class="input-group">
                            <input name = "newsl" type="email" class="form-control form-control-lg" placeholder="Enter your email to subscribe" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email to subscribe '" required>
                            <div class="input-group-append">
                                <button type="submit" class="btn bb-btn" title = "Subscribe" id = "newsletter">
                                    <span class="lnr lnr-location"></span>
                                </button>
                            </div>
                        </div>
                    </form>   -->
							</div>
						</div>  
	<div class="col-lg-3  col-md-6 col-sm-6">
												
							<!-- <div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">InstaFeed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div> -->
			 <h6 > Calendar </h6>  
					<div class="calendar-wrapper single-footer-widget" id="calendar-wrapper"></div>      
							

								<!--- Calender ends here --->
		
	</div>					
					</div>
<!-- copyright section -->							 
					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<?php echo $year; ?> NutBay All Rights Reserved. Made with <i class="fa fa-heart-o" aria-hidden="true"></i> @ <a href="https://github.com/ugoem/NutBay" target="_blank">NutBay</a>
						</p>
						<div class="col-lg-4 col-sm-12 footer-social">
								<a href="https://web.facebook.com/nutbay"><i class="fa fa-facebook"></i></a>
								<a href="https://twitter.com/nutbay"><i class="fa fa-twitter"></i></a>
								<a href="https://youtube.com/nutbay"><i class="fa fa-youtube"></i></a>
								<a href="https://www.linkedin.com/in/nutbay"><i class="fa fa-linkedin"></i></a>
								<a href="https://medium.com/@nutbay"><i class="fa fa-medium"></i></a>
							 <b>Version</b> <?php echo $appversion; ?>

						</div>
					</div>
				</div>
			</footer>