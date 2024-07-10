<?php
include "connection.php";
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <h1> Book a service</h1>
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
        input[type="password"],
		input[type="date"],select{
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
            <label for="username" Style="color:white">Name</label>
            <input type="text" id="username" placeholder="Enter a name" name="username" required>
			
			<label for="book"Style="color:white">Book a date</label>
            <input type="date" id="book" placeholder="Book a date" name="book" required>
			
			<label for="service" Style="color:white">Select a Service:</label>
		   <select name="service" id="service" >
		         <option value="volvo">--Select Service--</option>
                 <option value="volvo">Washing </option>
                 <option value="saab">Dry Clean </option>
                 <option value="opel">Steam Press</option>
           </select><br><br>
            
		   <label for="Weight" Style="color:white">Select Weight:</label>
		   <select name="weight" id="weight" >
		         <option value="volvo">--Select Weight--</option>
                 <option value="volvo">1kg </option>
                 <option value="saab">2kg </option>
                 <option value="opel">3kg </option>
                 <option value="audi">4kg </option>
				 <option value="audi">5kg </option>
				 <option value="audi">6kg </option>
           </select><br><br>
           
            <button type="submit" name="submit">Book</button>
			
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
