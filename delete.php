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
                .delete {
                        outline: none;
                        border: none;
                        width: 70px;
                        height: 40px;
                        color: white;
                        border-radius: 5px;
                        background: red;
                }
                .cancel {
                        outline: none;
                        border: none;
                        width: 70px;
                        height: 40px;
                        color: white;
                        border-radius: 5px;
                        margin-left: 20px;
                        background: orange;
                }

                input {
                        border: none;
                        height: 40px;
                        width: 320px;
                        border-bottom: 1px solid black;
                        color: whitesmoke;
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
                        <input type="text" name="names" id="names" value="">
                        <div class="errors"></div>
                        </div>
                        <div>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" value="">
                        <div class="errors"></div>
                        </div>
                        <div>
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" value="">
                        <div class="errors"></div>
                        </div>
                        <center><input type="submit" value="Delete" class="delete"><input type="submit" class="cancel" value="Cancel"></center>

                </form>
        <!-- </div> -->
</body>
</html>
