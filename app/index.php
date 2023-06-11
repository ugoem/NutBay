<?php 
		//error_reporting(E_ALL);
			
		error_reporting(0);
		require_once 'models/includes/access.inc.php';
		
		include 'models/includes/signup-Activation.inc.php';
	
		//------

		
		//Controls user login access
		if (!userIsLoggedIn())
		{
			//$action = 'dashboard';
			include 'views/login.html.php';
			mysqli_close($con);
			exit(0);
		}
		
		
		//Temporal Control Post activity page
		if (isset($_GET['activity'])) 
		{ 
			include 'views/post-activity.html.php';

			exit(0);
		}



	
 	/**
	 * this section should always be the last on this index * page.
	 */	
	//THis section retireves the role assigned to user
/*
	include 'includes/dbConfig.inc.php';

	$email = mysqli_real_escape_string($con, $_SESSION['email']);
	//$role = mysqli_real_escape_string($con, $role);

	$uid = mysqli_real_escape_string($con, $_SESSION['userid']);

	$sql = "SELECT * FROM user
	LEFT JOIN user_role ON user.id = userid
	LEFT JOIN role ON roleid = role.id
	WHERE email = '$email' AND userid = '$uid' "; 
	$result = mysqli_query($con, $sql);
	
	if (!$result)
	{
		$error = 'Error searching for user roles.' . mysqli_error($con);
		
		include 'pages/error-page.html.php';
		mysqli_close($con);
		exit(0);
	}
	$row = mysqli_fetch_array($result);
	//$row = mysqli_fetch_assoc($result);
	
	if ($row)
	{
		$_SESSION['role'] = $row['roleid'];
	}
		   */
	//display the app dashboard page when user is logged in
	include 'views/dashboard.html.php';