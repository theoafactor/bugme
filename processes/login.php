<?php
require "functions/auth_functions.php";

if(isset($_POST['login'])){

	$username = trim($_POST["username"]);
	$password = trim($_POST["password"]);

	$form_errors = [];
	if(empty($username)){
		$form_errors[] = "Please enter your username";
	}

	if(empty($password)){
		$form_errors[] = "Please enter your password";
	}

	if(empty($form_errors)){
		//there are no error
		//proceed 
		loginUser($username, $password);
	}else{
		//there are errors
		foreach($form_errors as $error){
			echo "<div class='alert alert-danger'>{$error}</div>";
		}
	}

}