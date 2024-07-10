<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
</head>
<body>
  <header>
    <h1>Contact Us</h1>
  </header>
  <div class="container go-back">
    <a href="index.php" class="back-button"></a>
</div>
  <div class="container">
    <div class="contact-info">
      <div class="contact-column">
        <h2>Get in Touch</h2>
        <p>If you have any questions or inquiries, feel free to reach out to us.</p>
      </div>
      <div class="contact-column">
        <h2>Contact Details</h2>
        <p>Email: contact@example.com</p>
        <p>Phone: +1-123-456-7890</p>
      </div>
    </div>
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

  .contact-info h2 {
    margin-bottom: 10px;
  }

  .contact-info p {
    margin: 0;
  }

  .contact-info {
    margin-top: 20px;
    padding: 20px;
    background-color: #f0f0f0;
    border-radius: 5px;
    display: flex;
    justify-content: space-between;
  }

  .contact-column {
    flex-basis: calc(50% - 10px);
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