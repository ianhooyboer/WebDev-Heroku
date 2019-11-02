<?php

include ($_SERVER["DOCUMENT_ROOT"] . "/includes/arrays.php");
 
echo $_SERVER["DOCUMENT_ROOT"] . "/includes/pages/dashboard.php";

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
			<?php 
			echo '<a href="' . $navLinks['dashboard'] . '"> <img src="/resources/quadrant-logo.png" id="logo-img"> </a>';
			?> 
			
			<h1> Aggregames </h1>
		</div>
		
		<div class="toolbar">
			<!-- add some buttons maybe -->
		</div>
		
		<div class="hori">