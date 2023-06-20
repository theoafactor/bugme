<?php
session_start();

if($_SESSION['current_user']){
	$_SESSION = [];
	session_destroy();

	header("location: index.php");
}

else{
	header("location: index.php");

}