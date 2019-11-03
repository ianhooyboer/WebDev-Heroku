<?php

include ($_SERVER["DOCUMENT_ROOT"] . "/includes/arrays.php"); 

session_start();

$username = $_POST['login'];
$password = $_POST['password'];

require_once ($_SERVER["DOCUMENT_ROOT"] . "/Dao.php");
$dao = new Dao();
$valid = $dao->isValidUser($username, $password);

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