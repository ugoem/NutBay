<?php 
$pagetitle = "Dashboard";
 /*
if (!userIsLoggedIn())
	{

		include 'views/login.html.php';
		mysqli_close($con);
		exit();
	}
	*/
	
//if ($_SESSION['role'] == 'User') 
 
 include 'models/includes/html-output-helpers.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
		<!-- Start of Header -->
		<?php include 'layouts/headerbend.inc.html.php'; ?>
		<!-- End of Header -->
<body class="hold-transition sidebar-mini layout-navbar-fixed">
			<!-- Scroll to Top-->
			<button onclick="topFunction()" id="myBtn" title = "Go to top">Top</button>
<div class="wrapper">

 	<!-- Check Activation status section begin here -->
 <?php 
		$act_status =  $_SESSION['act_status'];
		
		if ($act_status == '0' )
		{
 ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Welcome! <small>On-Board</small></h3>
				<p align = "right">
                    <a href="?logout" class="dropdown-item" >
						<i title = "Sign out" class="fa fa-sign-out mr-2" ></i> Logout
					</a>
						   </p>

			  </div>
              <!-- /.card-header -->
		   <br>
	    <section class="py-xl bg-cover bg-size--cover" >
        <span class="mask bg-primary alpha-6"></span>
        <div class="container d-flex align-items-center no-padding">
          <div class="col">
		  	
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="card bg-outline text">

                  <div class="card-body" align ="center">
				  	<?php include'views/layouts/messages.inc.html.php'; 
					
					?>
				  
				  <h5 class="heading h5 text-default" align ="center">Thank you for Joining our community! </h5>
				  <p class="heading h5 text-default" align ="center"> But your profile is yet to be activated. 
				  </p> 
					 <a href="." target="_self">
                    <button type="button" class="btn btn-primary btn-nobg btn-zoom--hover mb-5">
                     <span class="btn-inner--icon"><i class="fa fa-arrow-left" title ="Back"></i></span> 
                    </button> 
                    <span class="clearfix"></span>
                   <img src="views/assets/img/logo.png" style="width: 100px;"> 
				   </a>
						 
                    <form  class="form-primary" method="post" name="activate" action ="?activparam=<?php echo $_SESSION['email']; ?> " >
                      <div class="form-group">  <br>
                        <input type="text" class="form-control" name ="activate" id="activate" placeholder="Enter the code sent to your email here to activate and proceed" required="true">
                      </div>

                     
					  
                      <button type="submit" class="btn btn-block btn-lg bg-white mt-4">Activate</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<!-- Core Scripts -->
		<?php include 'layouts/scriptbend.inc.html.php'; ?>
		<!--- Scripts ends here --->
    </section>
		  <!-- main closing brace of activation section-->
	<?php 	
	  unset($_SESSION['act_status']);
	} else { ?>
	<!-- Navbar -->
		<?php include 'layouts/nav_appbend.inc.html.php'; ?>
  <!-- /.navbar -->

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  

       <!-- Content Header (Page header) -->
    <section class="content-header">
      <br>
	  <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><?php echo $pagetitle; ?> </h3>
          </div>
	  
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=".">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $pagetitle; ?></li>
            </ol>
          </div>
        </div>
		
      </div><!-- /.container-fluid -->
    			<!-- Display sign in success messages   -->
	<?php 
	

			include'views/layouts/messages.inc.html.php'; 
		
	?>
	</section>
	
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
	
	
          <div class="col-md-3">
          

<!-- sidebar profile details -->
	<?php 
	

			include'layouts/sidebar_profile.inc.html.php'; 
		
	?>
<!-- /.sidebar profile details -->
            <div class="card card-success card-outline">
              <div class="card-header">
               <a href ="?activity"> <h3 class="card-title"><b>Activities</b></h3>  </a>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-circle text-danger"></i> Important</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-circle text-warning"></i> Promotions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-circle text-primary"></i> Social</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        <div class="col-md-6">
			 <!-- card start a post -->
			  <div class="card">
			   <button type="button" class="btn btn-default btn-block btn-flat" data-toggle="modal" data-target="#modal-default">
                 <em> Start a post ... </em>
                </button>
				
			  </div>  <!-- ./card start a post -->
		      

			 			
	<div class="modal fade card-success card-outline" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Create a Post</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
				         <!-- textarea -->
                 <!--     <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div> -->
            
			       
                    <textarea id="compose-textarea" class="form-control" style="height: 300px">
             
                      <p>Write post ... </p>
                      
                    </textarea>
                

	
           
			  			    
				
                
                <button type="reset" class="btn btn-default"> put emoji here</button>
              
              <!-- /.card-footer -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Discard</button>
              <button type="button" class="btn btn-success">Post</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
             



           
			
          <div class="card card-warning card-outline">
            <div class="card-header">
              <h3 class="card-title">Feeds</h3>

              <div class="card-tools">
                <a href="#" class="btn btn-tool" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5>Feed Subject Is Placed Here</h5>
                <h6>From: support@adminlte.io
                  <span class="mailbox-read-time float-right">15 Feb. 2015 11:03 PM</span></h6>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"  title="Delete">
                    <i class="fa fa-trash"></i>
                  </button>
					  
                <!--  <button type="button" class="btn btn-default btn-sm" data-container="body" title="Reply">
                    <i class="fa fa-reply"></i>
                  </button> -->
                 </div>
                <!-- /.btn-group -->
				<button type="button" class="btn btn-default btn-sm"  title="Share">
                    <i class="fa fa-share"></i>
                  </button>
				  
                <button type="button" class="btn btn-default btn-sm" title="Print">
                  <i class="fa fa-print"></i>
                </button>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p>Hello John,</p>

                <p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird
                  on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical
                  master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack
                  gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon
                  asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu
                  blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American
                  Apparel.</p>

                <p>Raw denim McSweeney's bicycle rights, iPhone trust fund quinoa Neutra VHS kale chips vegan PBR&amp;B
                  literally Thundercats +1. Forage tilde four dollar toast, banjo health goth paleo butcher. Four dollar
                  toast Brooklyn pour-over American Apparel sustainable, lumbersexual listicle gluten-free health goth
                  umami hoodie. Synth Echo Park bicycle rights DIY farm-to-table, retro kogi sriracha dreamcatcher PBR&amp;B
                  flannel hashtag irony Wes Anderson. Lumbersexual Williamsburg Helvetica next level. Cold-pressed
                  slow-carb pop-up normcore Thundercats Portland, cardigan literally meditation lumbersexual crucifix.
                  Wayfarers raw denim paleo Bushwick, keytar Helvetica scenester keffiyeh 8-bit irony mumblecore
                  whatever viral Truffaut.</p>

               

                <p>Thanks,<br>Jane</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-white">
              <ul class="mailbox-attachments clearfix">
                <li>
                 <span class="mailbox-attachment-icon"><i class="fa fa-file"></i></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo1.png</a>
                        <span class="mailbox-attachment-size clearfix mt-1">
                          <span>2.67 MB</span>
                          <a href="#" class="btn btn-default btn-sm float-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
                <li>
                  <span class="mailbox-attachment-icon"><i class="fa fa-file"></i></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo1.png</a>
                        <span class="mailbox-attachment-size clearfix mt-1">
                          <span>2.67 MB</span>
                          <a href="#" class="btn btn-default btn-sm float-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
                <li>
                  <span class="mailbox-attachment-icon has-img"><img src="views/assets/img/o2.jpg" alt="Attachment"></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo1.png</a>
                        <span class="mailbox-attachment-size clearfix mt-1">
                          <span>2.67 MB</span>
                          <a href="#" class="btn btn-default btn-sm float-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
                <li>
                  <span class="mailbox-attachment-icon has-img"><img src="views/assets/img/o3.jpg" alt="Attachment"></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo2.png</a>
                        <span class="mailbox-attachment-size clearfix mt-1">
                          <span>1.9 MB</span>
                          <a href="#" class="btn btn-default btn-sm float-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.card-footer -->
            <div class="card-footer">
              <div class="float-right">
               <!-- <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button> -->
                <button type="button" class="btn btn-default"><i class="fa fa-share" title = "Share"></i> Share</button>
              </div>
              <button type="button" class="btn btn-default"><i class="fa fa-trash" title
			  ="Delete"></i> Delete</button>
              <button type="button" class="btn btn-default"><i class="fa fa-print" title = "Print"></i> Print</button>
			  <button type="button" class="btn btn-default"><i class="fa fa-comment" title ="Comment"></i> Comment</button>
			
			<!-- <i class="fa fa-post" title ="Comment">Repost</i>
			 <i class="fa fa-hand" title ="comment">Like</i>  -->
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
		          <div class="col-md-3">
           

<!-- Right bar content -->
	<?php 
	

			include'layouts/rightbar_app.inc.html.php'; 
		
	?>
<!-- /.Right bar content -->
          </div>
          <!-- /.col -->
      </div>
      <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
	<!-- start footer Area -->		
	<?php include 'layouts/footerbend.inc.html.php'; ?>
	<!-- End footer Area -->

</div>
<!-- ./wrapper -->

<!-- Core Scripts -->
<?php include 'layouts/scriptbend.inc.html.php'; ?>
<!--- Scripts ends here --->

<?php } ?>
</div>    <!-- main Wrapper -->
</body>
</html>
