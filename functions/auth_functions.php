<?php

ini_set("display_errors", 1);

function loginUser($login, $password){
	require "database/db.php";

	$password = hash("sha1", $password , false);


	$query = "SELECT * FROM `users` WHERE `login` = '$login' OR 1 = 1 AND `password` = '$password' OR 1=1";

	$result = mysqli_query($__conn, $query);

	if($result){

		if(mysqli_num_rows($result) == 1){
			session_start();

			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

			$_SESSION['current_user'] = $row;

			header("location: user");

			exit();



		}

	}




}