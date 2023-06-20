<?php
	session_start();
	if(!isset($_SESSION['current_user']['login'])){
		
		header("location: login");
	}else{
		$login = $_SESSION['current_user']['login'];
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>



	<h3>Welcome <?php echo $login; ?></h3>
	<hr>
	<h4><a href='logout.php'>Log out</a></h4>
	
</body>
</html>