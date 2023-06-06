<?php 
		$appTitle = "NutBay";
		$phtitle  = "<b>Nut</b>Bay";
		$separator = " | ";
		include 'models/includes/html-output-helpers.inc.php';
?>  
<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		
		<!-- Author Meta -->
		<meta name="author" content="<?php echo $appTitle; ?> ">
		<!-- Meta Description -->
		<meta name="description" content="NutBay is a social platform where professional nutritionist and herbalist conglomerate to share ideas about natural solution to several health challenges facing humankind. The sole purpose of the platform is to create a niche where those who believe specifically on the use of natural resources to advance and preserve human health, can connect freely with each other as well as the general public to offer free and paid services to their prospective beneficiaries. ">
		<!-- Meta Keyword -->
		<meta name="keywords" content="social platform, natural resources, advance and preserve, human health, nutritionist, herbalist, and dietitian">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
	 	<title> <?php echo  $appTitle .  $separator. $pagetitle; ?></title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		  <!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="views/assets/css/linearicons.css">
			<link rel="stylesheet" href="views/assets/css/font-awesome.min.css">
			<link rel="stylesheet" href="views/assets/css/bootstrap.css">
			<link rel="stylesheet" href="views/assets/css/magnific-popup.css">
			<link rel="stylesheet" href="views/assets/css/jquery-ui.css">				
			<link rel="stylesheet" href="views/assets/css/nice-select.css">  
			<!-- Font Awesome 
			<link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
			  <!-- summernote -->
			<link rel="stylesheet" href="views/assets/plugins/summernote/summernote-bs4.min.css">  				
			
			<link rel="stylesheet" href="views/assets/css/animate.min.css">
			<link rel="stylesheet" href="views/assets/css/owl.carousel.css">				
			<link rel="stylesheet" href="views/assets/css/main.css">
			<!-- Calendar -->
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/wrick17/calendar-plugin@master/style.css">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/wrick17/calendar-plugin@master/theme.css">
			
			<!-- Favicon CSS -->
			<link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-touch-icon.png">
			<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
			<link rel="manifest" href="../favicon/site.webmanifest">
			<link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
			<link rel="shortcut icon" href="../favicon/favicon.ico">
			<meta name="msapplication-TileColor" content="#da532c">
			<meta name="msapplication-config" content="browserconfig.xml">
			<meta name="theme-color" content="#ffffff">
		
		<!-- Style for move to top button-->
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 20px;
		}

		#myBtn {
			display: none;
			position: fixed;
			bottom: 20px;
			right: 30px;
			z-index: 99;
			font-size: 18px;
			border: none;
			outline: none;
			background-color: gray;
			color: white;
			cursor: pointer;
			padding: 15px;
			border-radius: 4px;
		}

		#myBtn:hover {
			background-color: #555;
		}
	</style>
	
	<!-- Style for password validation section and script-->	
	<style>
		/* Style all input fields */
		input {
			width: 100%;
			padding: 1px;
			border: 1px solid #ccc;
			border-radius: 1px;
			box-sizing: border-box;
			margin-top: 1px;
			margin-bottom: 0px;
		}

		/* Style the submit button */
		input[type=submit] {
			background-color: #04AA6D;
			color: white;
		}


		/* The message box is shown when the user clicks on the password field */
		#message {
			display:none;
			background: #f1f1f1;
			color: #000;
			position: relative;
			padding: 1px;
			margin-top: 4px;
		}

		#message p {
			padding: 0px 0px;
			font-size: 10px;
		}

		/* Add a green text color and a checkmark when the requirements are right */
		.valid {
			color: green;
		}

		.valid:before {
			position: relative;
			left: -10px;
			content: "[✔]";
		}

		/* Add a red text color and an "x" when the requirements are wrong */
		.invalid {
			color: red;
			}

		.invalid:before {
			position: relative;
			left: -10px;
			content: "[✖]";
		}
	</style>
	
</head>