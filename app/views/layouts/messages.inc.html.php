
<!-- Displays contact form success msg -->
<?php if (isset($_SESSION['msg'])): ?>
  <div class="alert alert-success alert-dismissible" role="alert" align = "center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php
      echo nl2br(html($_SESSION['msg']));
      unset($_SESSION['msg']);
	  
    ?>
  </div>
<?php endif; ?>

 <!--- Displays contact form error msg -->
<?php if (isset($_SESSION['error'])): ?>

  <div class="alert alert-danger alert-dismissible" role="alert" align = "center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php
      echo nl2br(html($_SESSION['error']));
      unset($_SESSION['error']);
    ?>
  </div>                 
<?php endif; ?>

 <!-- Dispalys newsletter  success. -->
<?php if (isset($_SESSION['msgr'])): ?>
  <div class="alert alert-success alert-dismissible" role="alert" align = "center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php
      echo nl2br(html($_SESSION['msgr']));
	
      unset($_SESSION['msgr']);
	  
    ?>
  </div>
<?php endif; ?>

<!-- Dispalys sign in success msg on dashboard. -->
<?php if (isset($_SESSION['msg_signin'])): ?>
  <div class="alert alert-success alert-dismissible" role="alert" align = "center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php
      echo nl2br(html($_SESSION['msg_signin']));
	
      unset($_SESSION['msg_signin']);
	  
    ?>
  </div>
<?php endif; ?>

<!-- Dispalys sign out success msg on login page. -->
<?php if (isset($_SESSION['msg_signout'])): ?>
  <div class="alert alert-success alert-dismissible" role="alert" align = "center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php
      echo nl2br(html($_SESSION['msg_signout']));
	
      unset($_SESSION['msg_signout']);
	  
    ?>
  </div>
<?php endif; ?>
<!-- Dispalys signup form success. -->
<?php if (isset($_SESSION['msg_add'])): ?>
  <div class="alert alert-success alert-dismissible" role="alert" align = "center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php
      echo nl2br(html($_SESSION['msg_add']));
	
      unset($_SESSION['msg_add']);
	  
    ?>
  </div>
<?php endif; ?>

    
<!-- Dispalys general error -->
	<?php if (isset($error)): ?>
	  <div class="alert alert-danger alert-dismissible" role="alert" align = "center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php 
			// echo html($error);  
		   echo nl2br($error);
		?> 

		 </div>
	   <?php endif; ?>
	   
	   