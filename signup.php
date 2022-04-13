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
			background: url(bg.webp) no-repeat;
			background-size: cover;
			color: #000;
		}
		a {
			text-decoration: none;
			color: #fff;
			align-self: center;
		}
		.error {
			color: red;
		}
		.form-container {
			width: 600px;
			position: absolute;
			top: 50%;
			left: 50%;
			padding: 40px;
			transform: translate(-50%, -50%);
			background: rgba(0,0,0,.8);
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
			color: #000;
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
			<form action="#" method="post">
				<h1>Create Account</h1>
				<div class="textbox">
					<input type="text" name="firstname" >
					<label for="firstname">Firstname</label>
				</div>
				<div class="textbox">
					<input type="text" name="lastname" >
					<label for="lastname">Lastname</label>
				</div>
				<div class="textbox">
					<input type="email" name="email" >
					<label for="email">Email</label>
				</div>
				<div class="textbox">
					<input type="password" name="password" >
					<label for="password">Password</label>
				</div>
					<a href="users.php"><input class="signup" type="button" value="SIGN-UP" name="signup"></a>
					<center><a href="login.php">Already have an account?<span> Login instead </span></a></center>
			</form>
		</div>


</body>
</html>
