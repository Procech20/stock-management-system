<?php

        require_once('./config/db_config.php');

        // if (isset($_GET['id'])) {

        //         $id = mysqli_real_escape_string($conn, $_GET['id']);

        //         $sql = "SELECT * FROM accounts WHERE id = $id";

        //         $result = mysqli_query($conn, $sql);

        //         if($result) {
        //                 echo 'Data fetched successfully...';
        //                 $account = mysqli_fetch_assoc($result);
        //         }else {
        //                 echo 'Data fetch failed' . mysqli_error($conn);
        //         }

        // }

        if (isset($_POST['update'])) {

                        $id = mysqli_real_escape_string($conn, $_GET['id']);

                        //escape sql chars
			$name = mysqli_real_escape_string($conn, $_POST['name']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);

			// Writing query to fetch all users ( Update --> C-R-U-D )

			$sql = "UPDATE accounts SET Names = $name, Email = $email, Password = $password WHERE id = $id";

			// Save data to db and check
			if (mysqli_query($conn, $sql)) {
				// On success
				header('Location: users.php');
			} else {
				echo 'Error while updating user '. mysqli_error($conn);
			}

        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accounts</title>
        <style>
                body {
                        margin: 0px;
                        padding: 0px;
                        text-align: center;
                }
                .container {
                        position: absolute;
                        top: 10%;
                        left: 20%;
                        width: 800px;
                        height: 600px;
                        background: whitesmoke;
                }
                h1 {
                        color: limegreen;
                }
                form > div {
                        margin: 3rem 0;
                }
                form > div:first-of-type {
                        margin-top: 5rem ;
                }
                .update {
                        outline: none;
                        border: none;
                        width: 70px;
                        height: 40px;
                        color: white;
                        border-radius: 5px;
                        background: limegreen;
                }
                .cancel {
                        outline: none;
                        border: none;
                        width: 70px;
                        height: 40px;
                        color: white;
                        border-radius: 5px;
                        margin-left: 20px;
                        background: red;
                }

                input {
                        border: none;
                        height: 40px;
                        width: 320px;
                        border-bottom: 1px solid black;
                        color: green;
                        outline: none;
                        cursor: pointer;
                }
                form {
                        position: absolute;
                        top: 10%;
                        left: 20%;
                        width: 800px;
                        height: 600px;
                        background: whitesmoke;
                        border: 0.3px dotted black;
                }
        </style>
</head>
<body>
        <!-- <div class="container"> -->
                <form action="accounts.php" method="POST">
                        <h1><u>My Account</u></h1>
                        <div>
                        <label for="names">Names:</label>
                        <input type="text" name="name" id="names">
                        <div class="errors"></div>
                        </div>
                        <div>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email">
                        <div class="errors"></div>
                        </div>
                        <div>
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password">
                        <div class="errors"></div>
                        </div>
                        <center><input type="submit" value="Update" name="update" class="update"><input type="submit" class="cancel" value="Cancel"></center>

                </form>
        <!-- </div> -->
</body>
</html>
