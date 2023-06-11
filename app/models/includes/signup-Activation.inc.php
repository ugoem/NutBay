<?php 

	//function perform activation proper is here
	if (isset($_GET['activparam']))
	{
		//session_start();
		include 'dbConfig.inc.php' ;
		$activ_code = mysqli_real_escape_string($con, $_POST['activate']);
		$activ_code_hash_comfirm = MD5($activ_code);
		$email =  $_GET['activparam'];
	
		//	$email=  $_SESSION['email'];
		//echo $email;
 
		//echo $activ_code_hash_comfirm;
 
		/* else  if (isset($_GET['activation_link']))
		{
		$activ_code_hash_comfirm =  $_GET['activation_link'];
		$email =  $_GET['email'];    
		}    */
		$act_status = 1;
		$activated_on = date('Y-m-d H:i:s');  
		$sql = "SELECT id, activation_code FROM user WHERE email = '$email'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result);

		$userid = $row['id'];
		$activ_c_db = $row['activation_code'];
		$activ_c_db_hash = MD5($activ_c_db);

		if ($activ_c_db_hash !== $activ_code_hash_comfirm)
		{
			session_start();
			$button = 'Sign Up';
			$_SESSION['activ_code_hash']  = $activ_code_hash_comfirm;
			//  $_SESSION['error'] = 'Activation code entered not correct! Please try again.'. mysqli_error($con);
	
			echo ' <br>
			<div class="alert alert-danger alert-dismissible" role="alert" align = "center">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
			Activation code entered not correct! Please try again
			</div>';
	
			include 'views/signup.html.php';
			mysqli_close($con);
			exit(0);	
		}
		$sql = "UPDATE user SET
		account_status ='$act_status', 
		activation_date = '$activated_on'
		WHERE email='$email'";
		if (!mysqli_query($con, $sql))
		{
	
			$_SESSION['error'] = 'Error updating user account status! Please try again.'. mysqli_error($con);
			include 'views/signup.html.php';
			mysqli_close($con);
			exit(0);
		} 
		//$_SESSION['msg'] = "Activation successful. You may proceed to login";
		//echo "<script>alert('Activation successful. You may proceed to login.');</script>";
		
	 
		if(empty($_SESSION['activ_code_hash']))
		{
			
			echo '
				<div align="center" class="alert alert-success" style=" background-color:green;"><i class="fa fa-fw fa-thumbs-up"></i><font color="white"><i class="glyphicon glyphicon-ok"></i><b>&nbsp;Activation successful. You may proceed to login </b></font></div>
				';
	 			
			unset($_SESSION['activ_code_hash']);
			mysqli_close($con);
			
			echo ' <div style="visibility:hidden">
				<script>
				
				window.parent.location.href="."
				 </script>
				</div>';
			exit(0);
		} else 
		{
				
			echo '
			<div align="center" class="alert alert-success" style=" background-color:green;"><i class="fa fa-fw fa-thumbs-up"></i><font color="white"><i class="glyphicon glyphicon-ok"></i><b>&nbsp;Activation successful. You may proceed to login </b></font></div>
			';
			unset($_SESSION['activ_code_hash']);
			mysqli_close($con);
			echo ' <div style="visibility:hidden">
				<script>
				
					window.parent.location.href="app/"
				</script>
				</div>';	
			exit(0);
		}
	
		
	 /*
		echo '
				<div style="visibility:hidden">
				<script>
				window.location.href=".";
				</script>
				</div>';
				*/
				//header('Location: .') ;
				
			
		
	}

?>