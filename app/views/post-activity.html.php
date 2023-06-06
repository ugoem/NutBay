<?php 
$pagetitle = "Post Activity";

if (!userIsLoggedIn())
	{

		include 'views/login.html.php';
		mysqli_close($con);
		exit();
	}
?>
?>
<!DOCTYPE html>
<html lang="en">
		<!-- Start of Header -->
		<?php include 'layouts/headerfend.inc.html.php'; ?>
		<!-- End of Header -->
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper">

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
          <a href="#" class="dropdown-item">
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
	  
	   <h3>Post Activity </h3>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
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
             <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
            <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="views/assets/img/profile.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Anionovo Ugochukwu</a>
                          <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="fa fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="views/assets/img/profile.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Anionovo Ugochukwu</a>
                          <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="views/assets/img/profile.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Anionovo Ugochukwu</a>
                          <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                        </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="views/assets/img/o3.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="views/assets/img/o4.jpg" alt="Photo">
                              <img class="img-fluid" src="views/assets/img/b3.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="views/assets/img/b2.jpg" alt="Photo">
                              <img class="img-fluid" src="views/assets/img/b1.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="fa fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            <!-- /.card-body -->
           
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
</body>
</html>
