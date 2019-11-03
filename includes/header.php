<?php

session_start();
if (!isset($_SESSION['logged_in'])) $_SESSION['logged_in'] = false;

include ($_SERVER["DOCUMENT_ROOT"] . "/includes/arrays.php"); 

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Aggregames</title>
		
		<link rel="stylesheet" type="text/css" href="/includes/style.css">
		<link rel="icon" type="image/x-icon" href="/resources/favicon.ico"/>
	</head>

	<body class="stack" id="page-wrapper">
		<div class="header-bar">
			<?php echo '<a href="' . $navLinks['dashboard'] . '"> <img src="/resources/quadrant-logo.png" id="logo-img"> </a>'; ?> 
			
			<h1> Aggregames </h1>
			
			
			<?php 
			$buttonText = "";
			$buttonLink = "";
			
			//<!-- if NOT logged in, display MY ACCOUNT button, link to login.php -->
			if ($_SESSION['logged_in'] == false)
			{
				$buttonText = "Log In";
				$buttonLink = $navLinks['login'];
			}							
			//<!-- if LOGGED in, display Hi, $NAME!, link to account.php -->
			else 
			{
				$buttonText = "Hi, {$_SESSION['username']}!";
				$buttonLink = $navLinks['account'];
			}
			
			echo '<div class="button-wrapper r-align">  <a href="' . $buttonLink . '" id="account-btn">' . $buttonText . '</a>'; 
			
			if ($_SESSION['logged_in'] == true) echo '<form method="POST" action="/actions/logout_handler.php" class="r-align top-margin"> <input  type="submit" value="Log Out?"/> </form>';
			
			echo '</div>';
			
			?>
			
		</div>
		
		<div class="toolbar">
			<!-- add some buttons maybe -->
		</div>
		
		<div class="hori">