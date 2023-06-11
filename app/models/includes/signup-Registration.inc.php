<?php 
	//Control sign up page activities
	//empty sign-up page-front end is built up and dispalyed with minimal items
	if (isset($_GET['sign_up'])) 
	{
		//$pagetitle = 'New User';
		$action = "add_data";
		$username = '';
		$fname=  '';
		$lname=  '';
		$contno= '';
		$email = '';
		$act_type = '';
		$id = '';
		$created_at = '';
		$act_status = '';
		$activ_code ='';
		$terms = '';	
		$button = 'Sign Up';
		include 'views/signup.html.php';
		exit(0);
	}
	//register new user
	if (isset($_GET['add_data']))
	{
				session_start();
				include 'dbConfig.inc.php' ;
				$salt = '5e7bf38ae95cce501c3f5357b919c12c' ;
				// receive all input values from the form. and prepare them for use in database
				$username = mysqli_real_escape_string($con, $_POST['username']);
				$fname = mysqli_real_escape_string($con, $_POST['firstname']);
				$lname = mysqli_real_escape_string($con, $_POST['lastname']);
				$contno = mysqli_real_escape_string($con, $_POST['phone']);
				$_SESSION['email'] =  $email = mysqli_real_escape_string($con, $_POST['email']);
				$password = MD5($_POST['password'].$salt);
				$act_status = 0;
				$activ_code = mysqli_real_escape_string($con,random_int(100000, 9999999));
				$_SESSION['activ_code_hash']   = md5($activ_code);
				//$activ_code_hash = md5($activ_code);
				$created_at = date('Y-m-d H:i:s');
				//$maxsize = 1000000; // this is equivalent to 100kb
				$terms = mysqli_real_escape_string($con, $_POST['terms']);
				$button = 'sign Up';
				$role = "User";

						mysqli_query($con, "SET AUTOCOMMIT=0");
						mysqli_query($con, "START TRANSACTION");
						
						$sql = "INSERT INTO user SET
						username ='$username', 
						firstname = '$fname', 
						lastname = '$lname', 
						phone = '$contno',  
						account_status ='$act_status',
						terms = '$terms',					
						activation_code = '$activ_code', 
						created_at = '$created_at', 
						email = '$email', 
						password = '$password' ";
						if (!mysqli_query($con, $sql))
						{
							$error = 'Error adding submitted user details.'. mysqli_error($con);
							unset($_SESSION['activ_code_hash'] );
							include 'views/signup.html.php';
							exit();
						}

						//insert registered user ID into user_role table
						$userid = mysqli_insert_id($con);
	
						$sql = "INSERT INTO user_role SET
						userid = '$userid',
						roleid = '$role' ";
						if (mysqli_query($con, $sql)) 
						{
  	
							mysqli_query($con, "COMMIT");

							//function send activation message here
							
							//Send activation code message
							$ip = getenv('HTTP_CLIENT_IP')?:
							getenv('HTTP_X_FORWARDED_FOR')?:
							getenv('HTTP_X_FORWARDED')?:
							getenv('HTTP_FORWARDED_FOR')?:
							getenv('HTTP_FORWARDED')?:
							getenv('REMOTE_ADDR');

							$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
							$query2 = @json_decode(file_get_contents("https://api.ipdata.co/{$ip}"));

							if($query && $query['status'] == 'success') 
							{
								$ipDetails = 'You visited us from '.$query['country'].', '.$query['regionName'] .', '.$query['city'].' with IP Address of - '.$query['query'];
							} else 
							{
								$ipDetails = $ip. ' | '.@$query2->country . ' | '.@$query2->region. ' | '. @$query2->city ;

							}

							$to = $email;      //Receipient email
							$from = "no-reply@nutbay.com.ng";
			
							//$headers .= $from;
						//	$headers .= "Sign up Activation Code!\r\n";
							$headers = 'MIME-Version: 1.0' ."\r\n";
							$headers .= 'Content-Type: text/html; charset=utf-8' ."\r\n";
							$subject = "Sign UP Activation Code!";
							
							//message header 
							$headers .= 'From: ' . $from. "\r\n". 'Reply-To: '. 'info@nutbay.com.ng'. "\r\n";
							
						   /*
							$message = "This is your activation code: ". $activ_code ."\r\n";
							$message .=  "Use it to complete your registration \r\n";
							$message .=  "This email was sent from " . $_SERVER['HTTP_REFERER'] . "\r\n";

							$message .=  $ipDetails ."\r\n";
							*/
							
							//get html content of the email
		$htmlcontent = 
			'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

			<html xmlns="http://www.w3.org/1999/xhtml">
			  <head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta http-equiv="X-UA-Compatible" content="IE=edge" />
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />
				<title>NutBay | Welcome Email</title>
				
				<style type="text/css">
				  body {
					margin: 0;
					background-color: #eceff1;
					font-family: sans-serif;
				  }
				  table {
					border-spacing: 0;
				  }
				  td {
					padding: 0;
				  }
				  img {
					border: 0;
				  }
				  .wrapper {
					width: 100%;
					table-layout: fixed;
					background-color: #eceff1;
					padding-bottom: 60px;
				  }
				  .main {
					background-color: #ffffff;
					margin: 0px auto;
					width: 100%;
					border-spacing: 0;
					color: #000000;
					border-radius: 10px;
					border-color: #ebebeb;
					border-width: 1px;
					border-style: solid;
					padding: 50px;
					line-height: 20px;
				  }
				  .button {
					background-color: #000000;
					color: #ffffff;
					text-decoration: none;
					padding: 12px 20px;
					font-weight: bold;
					border-radius: 5px;
				  }
				  .logo {
					width: 600px;
					margin: 0px auto;
				  }
				  .link {
					color: #535353;
					text-decoration-color: #535353;
				  }
				  .footer {
					margin-top: 20px auto;
					width: 100%;
				  }
				  .content {
					line-height: 25px;
				  }
				</style>
			  </head>
			  <body>
				<center class="wrapper">
				  <table class="logo" width="100%">
					<tr>
					  <td style="text-align: center">
						<a href="https://nutbay.com.ng"
						  ><img
							src="https://nutbay.com.ng/views/assets/img/logo.png"
							width="130"
							style="width: 100%"
							alt="Logo"
						/></a>
					  </td>
					</tr>
				  </table>
				  <table class="main" width="100%">
					<tr>

					  <td style="text-align: center">
							<h2>' . $subject. '</php></h2>
				
						<p style="font-size: 30px">Hi <strong>'. $fname. '!</strong></p>
					  </td>
					</tr>
					<tr>
					  <td style="text-align: center">
						<img src="https://nutbay.com.ng/views/assets/img/waving-hand.png" alt="Waving Hand" />
					  </td>
					</tr>
					<tr>
					  <td
						style="
						  font-size: 16px;
						  text-align: center;
						  width: 100%;
						  padding: 30px 5px;
						"
					  >
						<p class="content">
						  Thank you for joining our community. <br>Please spare a second to confirm your email.
						</p>
					  </td>
					</tr>
					<tr style="text-align: center">
					  <td>
						<button  class="button">'. $activ_code. '</button>
					<!--	<a target="__blank" href="https://nutbay.com.ng/?confirm-email" class="button">Click Here! to CONFIRM</a> -->
					<br>
					<p> This email was sent from <a target="__blank" href="' . $_SERVER["HTTP_REFERER"] .'"><b>this link </b></a>
					</p>
					  <p>'.$ipDetails.' </p>
					  </td>

					</tr>
				  </table>

				  <!-- Footer -->

				  <table class="footer">
					<tr>
					  <td style="text-align: center; color: #858585">
						<p> <strong > &copy;'. date("Y"). '<a href="https://nutbay.com.ng" class="link" > NutBay </a>.  </strong>All rights reserved. |<br> Block B, Electrical Engineering Dept. Unizik Awka Anambra State.</p>
						<a data-target="#modal-terms" href="https://nutbay.com.ng/?terms" class="link">Terms of Service</a>
						<a data-target="#modal-privacy" href="https://nutbay.com.ng/?privacy" class="link" style="padding-left: 15px">Privacy Policy</a>
						<br>
						 <p>Powered by <a href="https://auenetengtech.com.ng" class="link"><strong>AUENET</strong></a></p>
						 
						 <span class="link"> Follow us @ </span>
							<a href="https://web.facebook.com/nutbay"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/nutbay"><i class="fa fa-twitter"></i></a>
							<a href="https://twitter.com/nutbay"><i class="fa fa-youtube"></i></a>
							<a href="https://www.linkedin.com/in/nutbay"><i class="fa fa-linkedin"></i></a>
							<a href="https://medium.com/@nutbay"><i class="fa fa-medium"></i></a>
					  </td>
					</tr>
				   
				  </table>
				</center>
			  </body>
			</html> ';
							
							//sending email
							$send  = @mail($to, $subject, $htmlcontent, $headers);

							$_SESSION['msg'] = "User Details added successfully. 
							An email had been sent to the email address provided with activation code.";
							//include 'pages/welcome-msg.html.php';
							include 'views/signup.html.php';
							exit();
						} else 
						{ 
							$error = 'Error recording user ID to user role table.'. mysqli_error($con);
							unset($_SESSION['activ_code_hash'] );

							mysqli_query($con, "ROLLBACK");
							include 'views/signup.html.php';
							exit(0);
						}
						
	}


	
?>