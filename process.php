<?php
session_start();
require('new-connection.php');
$errors = array();


	if(isset($_POST['f_name']) && $_POST['f_name'] != null )
	
		{
			if(is_numeric($_POST['f_name']))
				$errors[] ="This is not a valid first name";
		}
		else 
		{
			$errors [] = "Name should not be empty";
		}



	if(empty($_POST['quote']))
			{
				$errors [] = "Quote field can not be left blank";
			}
		
	

	if(! empty($errors))
	{
		$_SESSION['errors'] = $errors;
		header("Location: index.php");
		die();
	}

	else 
	{
		$query = "Insert INTO users (name, quote, created_at)
		VALUES('{$_POST['f_name']}', '{$_POST['quote']}', NOW())";

		if(run_mysql_query($query))
		{
		    $_SESSION['message'] = "New Interest has been added correctly!";
		}
		else
		{
		    $_SESSION['message'] = "Failed to add new Interest"; 
		}
		unset($_SESSION['message']);
		header('Location: main.php');
		die();
		}
	



?>