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

?>

<!DOCTYPE html>
<html lang="en">
		<!-- Start of Header -->
		<?php include 'layouts/headerfend.inc.html.php'; ?>
		<!-- End of Header -->
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper">

 	<!-- Check Activation status section begin here -->
 <?php 
		$act_status =  $_SESSION['act_status'];
		$act_type = $_SESSION['account_type'];
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
                    <a href="?logout" class="dropdown-item" align = "right" >
						<i title = "Sign out" class="fas fa-sign-out-alt mr-2" ></i> Logout
					</a>
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
				  <a href="." target="_self"> 
				  <h5 class="heading h5 text-white" align ="center">Thank you for Joining our community! </h5>
				  <p class="heading h5 text-white" align ="center"> But your profile is yet to be activated. 
				  </p>
                    <button type="button" class="btn btn-primary btn-nobg btn-zoom--hover mb-5">
                     <span class="btn-inner--icon"><i class="fas fa-arrow-left" title ="Back"></i></span> 
                    </button> </a>
                    <span class="clearfix"></span>
                   <img src="views/assets/img/logo.png" style="width: 100px;"> 
					  
                    <form  class="form-primary" method="post" name="signup" action ="?activparam=<?php echo $_SESSION['email']; ?> " >
                      <div class="form-group">
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
		  <!-- main closing brace of activation section-->
<?php 	} else { ?>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
				      <!-- Logo area -->
					  <div id="logo" >
				        <a href="."><img src="views/assets/img/logo.png" alt="nutbay_logo" title="Logo" " /></a>
				     
					 </div>
      </li>

      <!-- Navbar Search -->
    <!--  <li class="nav-item">
                <div class="col-md-12 offset-md-2">
                    <form action="?search">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-md btn-success">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
      </li>    -->
	  
	  
			  <!-- SidebarSearch Form -->
	<!--	<li class="nav-item">
			  <div class="form-inline">
				<div class="input-group" >
				  <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				  <div class="input-group-append">
					<button class="btn btn-sidebar">
					  <i class="fa fa-search fa-fw"></i>
					</button>
				  </div>
				</div>
			  </div>  
		</li>        -->
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fa fa-search" title ="Search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fa fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
	   
		<li class="nav-item dropdown">
			<a class="nav-link" data-widget="home" href="." role="button">
			<i class="fa fa-home" title = "Home"></i>   
			</a>
		<!--	  <small class="text-sm text-muted"> Home </small>  -->
		</li>
      <li class="nav-item">
        <a class="nav-link" data-widget="networks" href="#" role="button">
          <i class="fa fa-users" title = "Networks"></i>
		 <!-- <p> <small class="text-sm text-muted"> Networks </small>  </p>   -->
        </a>
      </li>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comment" title ="Messaging"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="views/assets/img/b1.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="views/assets/img/b1.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="views/assets/img/b1.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell" title ="Notifications"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
	        <!-- Profile Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user-circle" title ="Account/Settings"></i>
          <span class="badge badge-success navbar-badge">Me</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">put profile pix here</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-user mr-2"></i> Accounts
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> Manage
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> Settings
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
			<div class="dropdown-divider"></div>
          <a href="?logout" class="dropdown-item">
            <i class="fa fa-sign-out mr-2"></i> Logout
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fa fa-expand" title = "Fullscreen"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
	<br>
      <div class="container-fluid">
	  
		<h3><?php echo $pagetitle; ?> </h3>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
		
		<!-- DIspalys messages-->
	<?php 
		if (isset($_GET['newsletters'])) 
		{ 
			include'views/layouts/messages.inc.html.php'; 
						
		}	?>		
          <div class="col-md-3">
          

            <div class="card card-success card-outline">

	       
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
             
			 <div class="widget-user-header text-white"
                   style="background: url('views/assets/img/b2.jpg') center center;">
                <h3 class="widget-user-username text-right">Anionovo Ugochukwu E.</h3>
                <h5 class="widget-user-desc text-right"><em>Software Engineer</em></h5>
              </div>
              <div class="widget-user-image" >
                <img class="img-circle elevation-2" src="views/assets/img/profile.jpg" alt="User Avatar">
              </div> <br>
			 <div class="card-body box-profile"> 
			  <br>
                <h2 class="profile-username text-center">Anionovo Ugochukwu E.</h2> 

                <p class="text-muted text-center"><em>Software Engineer</em></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <strong>Followers</strong> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    Following <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    Friends <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-default btn-block">Follow</a>
				</div>
            </div>
            <!-- /.widget-user -->

            </div>
            <!-- /.card -->
            <div class="card card-success card-outline">
              <div class="card-header">
               <a href ="?activity"> <h3 class="card-title">Activities</h3>  </a>

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
             
                      <p>Test post here</p>
                      <ul>
                        <li>List item one</li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                      </ul>
                      <p>Thank you,</p>
                      <p>John Doe</p>
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
              <h3 class="card-title">News Feeds</h3>

              <div class="card-tools">
                <a href="#" class="btn btn-tool" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5>Message Subject Is Placed Here</h5>
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
              <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
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
           

            <div class="card card-success card-outline">
              <div class="card-header">
                <h3 class="card-title">Add Feed</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item active">
                    <a href="#" class="nav-link">
                      <i class="fa fa-inbox"></i> Inbox
                      <span class="badge bg-success float-right">12</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa fa-envelope"></i> Sent
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa fa-file"></i> Drafts
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa fa-filter"></i> Junk
                      <span class="badge bg-warning float-right">65</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa fa-trash"></i> Trash
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card card-success card-outline">
              <div class="card-header">
                <h3 class="card-title">Suggested Networks</h3>

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
      </div>
      <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
	<!-- start footer Area -->		
	<?php include 'layouts/footerfend.inc.html.php'; ?>
	<!-- End footer Area -->

</div>
<!-- ./wrapper -->

<!-- Core Scripts -->
<?php include 'layouts/scriptfend.inc.html.php'; ?>
<!--- Scripts ends here --->

<?php } ?>
</div>    <!-- main Wrapper -->
</body>
</html>
