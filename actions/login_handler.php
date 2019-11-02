<?php

include ($_SERVER["DOCUMENT_ROOT"] . "/includes/arrays.php"); 

session_start();

$username = $_POST['login'];
$password = $_POST['password'];

// $valid = $dao->isValidUser($username, $password);

$valid = false;
if ($username == "asdf" && $password == "asdf") {
  $valid = true;
}

$_SESSION = array();
if ($valid) 
{
	$_SESSION['logged_in'] = true;
   
	header("Location: " . $navLinks['dashboard']);
	
	exit;
} 
else 
{ 
   $_SESSION['logged_in'] = false;
   $_SESSION['message'] = "Error: Invalid username or password";
   
   header("Location: " . $navLinks['login']);
   
   exit;
}

?>