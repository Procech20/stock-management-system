<?php

	include_once("./config/db_config.php");

	if (isset($_POST['login'])) {

		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
		$result = mysqli_query($connect, "$query");

		if (mysqli_num_rows($result) == 1) {
			$userId=mysqli_fetch_array(mysqli_query($connect, "$query"))['id'];
			session_start();
			$_SESSION['userId'] = $userId;
			header('Location: ./index.php');
		} else {
			echo "Invalid username or password";
		}
	}
	else {
		echo "Enter your Email and Password to login";
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		body{
			background: url(https://www.world-grain.com/ext/resources/Article-Images/2020/12/GMR_Rice_AdobeStock_64819529_E_Nov.jpg?t=1609338918&width=1080);
			background-size: cover;
		}
		.container-fluid{
			margin-top: 100px;
		}
		.jumbotron {
			background: limegreen;
			height: 400px;
			/* opacity: 0.8; */
		}
		button {
			background: white !important;
			color: limegreen !important;
			border: none !important;
			border-radius: 4px !important;
			font-size: 20px !important;
			height: 40 !important;
			width: 40 !important;
			margin-top: 2rem;
		}
		.form-group {
			margin-bottom: 3rem;
		}
	</style>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-lg-4">
			<form class="jumbotron" action="#" method="post">
				<div class="form-group">
					<center><h3>LOGIN</h3></center>
				<label for="exampleInputEmail1">Email</label>
				<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email...">
				</div>
				<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password...">
				</div>
				<center><button type="submit" class="btn btn-primary" name="login">Login</button></center>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>


</div>
</body>
</html>
