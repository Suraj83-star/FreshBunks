<?php
include "connection.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.min.js"></script>
<title>FreshBunks</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    
  <div class="navigation-pane">
    <nav>
      <ul>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="contact.php">Contact Admin</a></li>
        <li><a href="order_hist.php">Order History</a></li>
        <!-- Add more navigation items here -->
      </ul>
    </nav>
  </div>
  <div class="content">
    <header>
      <div class="continuous-marquee-container">
        <div class="continuous-marquee-content">
          Laundry will be collected only on Mondays, Wednesdays and Fridays.
        </div>
      </div>
      
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
            <input type="text" id="name" placeholder="Enter a name" name="name" required>
			
			<label for="phone_no" Style="color:white">Phone No.</label>
            <input type="text" id="phone_no" placeholder="Enter a Phone No." name="phone_no" required>
			
			<label for="book"Style="color:white">Book a date</label>
            <input type="date" id="date" placeholder="Book a date" name="date" required>
			
			<label for="service" Style="color:white">Select a Service:</label>
		   <select name="service" id="service" >
		         <option value="Select Service">--Select Service--</option>
                 <option value="Washing">Washing </option>
                 <option value="Dry Clean">Dry Clean </option>
                 <option value="Steam Press">Steam Press</option>
           </select><br><br>
            
		   <label for="Weight" Style="color:white">Select Weight:</label>
		   <select name="weight" id="weight" >
		         <option value="Select Weight">--Select Weight--</option>
                 <option value="1Kg">1kg </option>
                 <option value="2Kg">2kg </option>
                 <option value="3Kg">3kg </option>
                 <option value="4Kg">4kg </option>
				 <option value="5Kg">5kg </option>
				 <option value="6Kg">6kg </option>
           </select><br><br>
           
            <button type="submit" name="submit">Book</button>
			
        </form>
    </div>
	
    </div>

    </header>
  </div>
</body>


<style>
body, ul, li {
  list-style: none;
  list-style-type: none;
  width: 90;
  margin: 0; 
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  background-color: #AAB8B6;
  display: flex;
  height: 100vh;
}

.navigation-pane{
  width: 25%;
  background-color: #525a59;
  height: 100;
  box-shadow: 0 0px 20px rgba(0, 0, 0, 0.3);
}

.navigation-pane nav li:hover {
  background-color: #25302f;
  padding: 2%;
  border-radius: 10px;
  
}

.navigation-pane nav ul {
  padding: 20px;  
}

.navigation-pane nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  font-weight: bold;
  padding: 10px 0px;
}

.content {
  flex: 1;
  padding: 20px;
  color: #fff;
}

header {
  text-align: center;
  margin-bottom: 20px;
  color: #525a59;
}

/*Calendar style starts here*/
.calendar td {
  transition: color 0.3s;
}

.calendar td:hover {
  background-color: #525a59;
  border-radius: 100px;
  display: block;
  color: #fff;
}

table{
  width: 100%;
  table-layout: fixed;
  border-collapse: collapse;
}
/*Calendar style ends here*/

/* Marquee using CSS animation */
.continuous-marquee-container {
      overflow: hidden;
      background-color: #525a59;
      padding: 10px 0px 10px 0px;
      color: #fff;
      position: relative;
      
    }

    .continuous-marquee-content {
      display: inline-block;
      white-space: nowrap;
      animation: continuous-marquee 15s linear infinite;      
    }

    @keyframes continuous-marquee {
      from {
        transform: translateX(100%);
      }
      to {
        transform: translateX(-100%);
      }
    }
</style>

<?php

$name=$_GET['name'];
$phone_no=$_GET['phone_no'];
$date=$_GET['date'];
$service=$_GET['service'];
$weight=$_GET['weight'];

$query="INSERT INTO order_booking VALUES('$name','$phone_no','$date','$service','$weight')";
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