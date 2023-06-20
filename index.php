<?php
session_start();
if(isset($_SESSION['current_user'])){
	header("location: user");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>


	<div class="container">
		
			<div class="row">
				
					<div class="col-md-8 mt-5 mx-auto">
							<h5>Log in</h5>
							<?php require("processes/login.php"); ?>
							<form class="form mt-5" method="POST" action="">
								<div class="form-group">
									<label>Username: </label>
									<input type="text" name="username" class="form-control">
								</div>

								<div class="form-group">
									<label>Password: </label>
									<input type="password" name="password" class="form-control">
								</div>

								<div class="form-group">
									<button name="login">Log in</button>
								</div>

							</form>

					</div>

			</div>




	</div>
	


	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>