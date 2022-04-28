<?php
	include_once('./config/db_config.php');


	$name = $email = $password = '';
	$errors = ['name' => '', 'email' => '', 'password' => ''];

	if (isset($_POST['signup'])) {

		//Checking if lastname is empty
		if (empty($_POST['name'])) {
			$errors['name'] = 'Names are required';
		}
		// Checking if lastname is atleast 2 chars
		else {
			$name = $_POST['name'];

		}

		//Checking if email is empty
		if (empty($_POST['email'])) {
			$errors['email'] = 'Email is required';
		}
		// Checking if entered value is valid email
		else {
			$email = $_POST['email'];
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$errors['email'] = 'Email must be a valid email! eg: example@example.com';
			}
		}

		//Checking if password is empty
		if (empty($_POST['password'])) {
			$errors['password'] = 'Password is required';
		}
		// Checking if password is atleast 8 letters
		else {
			$password = $_POST['password'];

		}
		// Displaying errors in the form
		if (array_filter($errors)) {

		}
		// Inserting data in the database
		else {
			//escape sql chars
			$name = mysqli_real_escape_string($conn, $_POST['name']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);

			// Writing query to fetch all users ( Create -> C-R-U-D )

			$sql = "INSERT INTO accounts(Names, Email, Password) VALUES('$name', '$email', '$password')";

			// Save data to db and check
			if (mysqli_query($conn, $sql)) {
				// On success
				header('Location: users.php');
			} else {
				echo 'Error while creating user '. mysqli_error($conn);
			}
		}
	}  // End POST request --- Congrats! you've create your first query! :)

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signup</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			/* background: url(bg.webp) no-repeat; */
			background: lightblue;
			background-size: cover;
			color: #000;
		}
		a {
			text-decoration: none;
			color: #fff;
			align-self: center;
		}
		.errors {
			color: red;
			margin-top: 2rem;
		}
		.form-container {
			width: 600px;
			position: absolute;
			top: 50%;
			left: 50%;
			padding: 40px;
			transform: translate(-50%, -50%);
			/* background: rgba(0,0,0,.8); */
			box-sizing: border-box;
			box-shadow: 0 15px 25px rgba(0,0,0,.5);
			border-radius: 8px;
		}
		.form-container h1{
			color: #fff;
			font-size: 40px;
			text-align: center;
			border-bottom: 6px solid;
			margin: 0 0 35px;
			padding: 0;
		}
		.textbox {
			position: relative;
			width: 100%;
			padding: 10px 0;
			overflow: hidden;
			font-size: 20px;
			margin: 10px 0;
		}
		.textbox input{
			border: none;
			border-bottom: 1px solid #fff;
			outline: none;
			background: transparent;
			color: #fff;
			font-size: 18px;
			width: 100%;
			padding: 10px 0;
			margin-bottom: 30px;
		}
		.textbox label{
			position: absolute;
			top: 0;
			left: 0;
			color: #000;
			font-size: 18px;
			padding: 14px 0;
			pointer-events: none;
			transition: .5s;
		}
		.textbox input:focus ~ label{
			top: -16px;
			left: 0;
			color: limegreen;
			font-size: 15px;

		}
		.signup{
			width: 100%;
			background: limegreen;
			color: #fff;
			font-size: 20px;
			cursor: pointer;
			border: none;
			outline: none;
			padding: 10px 0;
			margin: 20px 0;
			font-weight: bold;
			line-height: 1.5;
		}
		.signup:hover{
			background: transparent;
			color: #fff;
			border: 0.5px solid limegreen;
			transition: .2s;
		}
		span {
			color: limegreen;
		}

	</style>
</head>
<body>


		<div class="form-container">
			<form action="signup.php" method="post">
				<h1>Create Account</h1>
				<div class="textbox">
					<input type="text" name="name" value="<?php echo htmlspecialchars($name) ?>">
					<label for="name">Names</label>
					<div class='errors'>
						<?php echo $errors['name'] ?>
					</div>
				</div>
				<div class="textbox">
					<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
					<label for="email">Email</label>
					<div class='errors'>
						<?php echo $errors['email'] ?>
					</div>
				</div>
				<div class="textbox">
					<input type="password" name="password" value="<?php echo htmlspecialchars($password) ?>">
					<label for="password">Password</label>
					<div class='errors'>
						<?php echo $errors['password'] ?>
					</div>
				</div>
					<input class="signup" type="submit" value="SIGN-UP" name="signup">
					<center><a href="login.php">Already have an account?<span> Login instead </span></a></center>
			</form>
		</div>

</body>
</html>
