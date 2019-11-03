<?php
	include ($_SERVER["DOCUMENT_ROOT"] . "/includes/arrays.php"); 

    session_start();

	$messages = array();
    $presets = $_POST;
    $sentiment = '';
	
	$name = $_POST['name'];
	if (empty($name))
	{
		$messages[] = "Game name cannot be empty.";
		unset($presets['name']);
	}
	
	$genre = $_POST['genre'];
	if (empty($genre))
	{
		$messages[] = "Genre cannot be empty.";
		unset($presets['genre']);
	}

    $competitive = 0;
    $_POST['competitive'];
	if ($_POST['competitive'] != "Yes")
    {
        $competitive = 1;
    }

    $avgplaytime = $_POST['avgplaytime'];
    if (empty($avgplaytime))
    {
        $messages[] = "Average play time cannot be empty.";
        unset($presets['avgplaytime']);
    }

    $numplayers = $_POST['numplayers'];
    if (empty($numplayers))
    {
        $messages[] = "Number of Players cannot be empty.";
        unset($presets['numplayers']);
    }
	
	if (count($messages) > 0)
	{
		$_SESSION['messages'] = $messages;
		$_SESSION['form_data'] = $presets;
		$_SESSION['sentiment'] = 'bad';
		
		header("Location: " . $navLinks['newgame']);
		exit;
	}
	
	unset($_SESSION['messages']);
    unset($_SESSION['form_data']);
	
	require_once ($_SERVER["DOCUMENT_ROOT"] . "/Dao.php");
	$dao = new Dao();
	$result1 = $dao->saveNewGame($name, $genre, $competitive, $avgplaytime, $numplayers);
	$result2 = $dao->addToCollection($name);

	if ($result1 == true)
	{
		$_SESSION['message'] = "New game added!";
		$_SESSION['sentiment'] = 'good';
		header("Location: " . $navLinks['dashboard']);
	}
	else 
	{
		$_SESSION['message'] = "New game failed to be created";
		$_SESSION['sentiment'] = 'bad';
		header("Location: " . $navLinks['newgame']);
	}
		