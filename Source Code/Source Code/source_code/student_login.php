<?php
include "connection.php";
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <h1> Student Login</h1>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #AAB8B6;
            margin: 0;
            padding: 0;

            background-image: url('images/bg.jpg'); /* Replace 'your-image.jpg' with the path to your image file */
            background-size: cover; /* Adjust the background size as needed */
            background-repeat: no-repeat; /* Prevent background image from repeating */
            background-attachment: fixed;

        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            margin-top: 20px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 20px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            align-content: center;
            align-self: center;

        }
        button {
            width: 120px;
            padding: 20px;
            background-color: #525a59;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #323635;
        }

        h1 {
            background-color: #525a59;
            color: #fff;
            text-align: center;
            padding: 45px;
            margin-top: 0px;
        }

        .loginForm {
            align-content: center;
            align-self: center;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <form id="loginForm">
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Enter a username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter a password" name="password" required>
           
            <button type="submit" name="submit" a href="index.php">Login</button>
			<div class="sign_in">
			     <p style="color:white">Don't have an account? <a href="register_page.php" style="color:white">Sign-In</a></p>
			</div>
        </form>
    </div>
	
	<!--
    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();

            // For a fully functional login system, you'd need server-side code and a database.
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            // you can check credentials here.
            if (username === "freshbunks" && password === "freshbunks") {
                window.location.href = "admin_dashboard.html"; 
                alert("Login successful!");

            } else {
                alert("Login failed. Please check your credentials.");
            }
        });
    </script>-->
	
</body>
</html>

<?php

$username=$_GET['username'];
$password=$_GET['password'];

$query="INSERT INTO student_login VALUES('$username','$password')";
$data=mysqli_query($conn,$query);

if($data)
{
	echo "Data inserted into database";
}
else
{
	echo "Failed to insert data into database";
}

?>
