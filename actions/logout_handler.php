<?php
	include ($_SERVER["DOCUMENT_ROOT"] . "/includes/arrays.php"); 

	session_start();
	session_destroy();
	 
	$_SESSION['logged_in'] = false;
	
	
    header("Location: " . $navLinks['login']);
   
	exit;
