<?php
	include ($_SERVER["DOCUMENT_ROOT"] . "/includes/arrays.php"); 

	session_start();
	session_destroy();
	
	session_start();
	$_SESSION['logged_in'] = false;
	
	
    header("Location: " . $navLinks['login']);
   
	exit;
