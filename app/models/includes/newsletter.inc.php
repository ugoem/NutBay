<?php 
			//newsletters
	if (isset($_GET['newsletters'])) 
	{ 
		include 'app/models/includes/dbConfig.inc.php' ;
		$newsl = mysqli_real_escape_string($con, $_POST['newsl']);
		
		// check if the email is already subscribed
		$result = mysqli_query($con, "SELECT nid FROM newsletters WHERE nemail = '$newsl' ");
		$rowcount =  mysqli_num_rows($result);
		if ($rowcount > 0)
		{
			$error = 'Error subscribing to newsletter. This email subscribed already!';
							
			include 'views/home.html.php';
			mysqli_close($con);
			exit (0);
		}
			$sql = "INSERT INTO newsletters SET
					nemail ='$newsl'";
			$result = mysqli_query($con, $sql);
 
				$_SESSION['msgr'] = "Thank you for subscribing to our newsletter." ;
				include 'views/home.html.php';
				mysqli_close($con);
				exit (0);
	}
	
?>