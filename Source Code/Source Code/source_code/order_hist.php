<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order History</title>
</head>
<body>
  <header>
    <h1>Order History</h1>
  </header>
  <div class="container go-back">
    <a href="index.php" class="back-button"></a>
</div>
  <div class="container">
    <table>
      <thead>
        <tr>
          <th>Order ID</th>
		  <th>Name</th>
		  <th>Phone_no</th>
          <th>Date</th>
          <th>Weight (KGs)</th>
          <th>Service</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
		  <td>Anu</td>
		  <td>2147483647</td>
          <td>2023-09-14</td>
          <td>2Kg</td>
          <td>Dry Clean</td>
        </tr>
        <tr>
          <td>2</td>
		  <td>Sonal</td>
		  <td>78792</td>
          <td>2023-09-27</td>
          <td>1Kg</td>
          <td>Wash</td>
        </tr>
		<tr>
          <td>3</td>
		  <td>Anii</td>
		  <td>8888</td>
          <td>2023-09-16</td>
          <td>1Kg</td>
          <td>Dry Clean</td>
        </tr>
		<tr>
          <td>4</td>
		  <td>xyz</td>
		  <td>23</td>
          <td>2023-09-21</td>
          <td>3Kg</td>
          <td>Steam Press</td>
        </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </div>
  <div class="container go-back">
    <a href="index.php">Go back to Home Page</a>
  </div>
</body>
</html>

<style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #AAB8B6;
    }

    header {
      background-color: #525a59;
      color: #fff;
      text-align: center;
      padding: 20px;
      box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 10px 10px rgba(0, 0, 0, 0.3);
      margin-top: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f0f0f0;
    }

    /*Back to home page button*/
    .back-button {
      position: fixed;
      top: 20px;
      left: 20px;
      width: 40px;
      height: 40px;
      background-image: url('images/back-button.png'); /* Update with your image path */
      background-color: transparent;
      background-size: cover;
      border: none;
      cursor: pointer;
      transition: opacity 0.3s;
    }

    .back-button:hover {
      opacity: 0.8;
    }
  </style>