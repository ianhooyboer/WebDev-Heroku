<?php
	include ($_SERVER["DOCUMENT_ROOT"] . "/includes/arrays.php"); 

    session_start();

	$messages = array();
    $presets = $_POST;
    $sentiment = '';
	
	$user = $_POST['username'];
	$messages[] =  $user;
	if (strlen($user) < 4)
	{
		$messages[] = "Username must be at least four characters.";
		unset($presets['username']);
	}
	
	$pass = $_POST['password']; 
	$messages[] =  $pass;
	if (strlen($pass) < 8)
	{
		$messages[] = "Password must be at least eight characters.";
		unset($presets['password']);
	}
	
	$email = $_POST['email'];
	$messages[] = $email;
	//TODO: Validate Email with RegEx here
	
	if (count($messages) > 0)
	{
		$_SESSION['messages'] = $messages;
		$_SESSION['form_data'] = $presets;
		$_SESSION['sentiment'] = 'bad';
		
		header("Location: " . $navLinks['createuser']);
		exit;
	}
	unset($_SESSION['messages']);
    unset($_SESSION['form_data']);
	
	require_once ($_SERVER["DOCUMENT_ROOT"] . "/Dao.php");
	$dao = new Dao();
	$result = $dao->saveUser($user, $password, $email);
	if ($result == true)
	{
		$_SESSION['message'] = "New user created";
		$_SESSION['sentiment'] = 'good';
		header("Location: " . $navLinks['login']);		
	}
	else 
	{
		$_SESSION['message'] = "New user failed to be created";
		$_SESSION['sentiment'] = 'bad';
		header("Location: " . $navLinks['createuser']);
	}
		