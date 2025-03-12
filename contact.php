<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <style>
    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background-color: #007bff;
      color: white;
      text-align: center;
      padding: 30px 0;
      position: relative;
    }

    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }

    /* Top-right Buttons */
    .top-right-container {
      position: absolute;
      top: 15px;
      right: 15px;
      display: flex;
      gap: 10px;
    }

    .top-right-container a {
      padding: 10px 20px;
      font-size: 16px;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      color: white;
    }

    .back-home-button {
      background-color: #28a745;
    }

    .back-home-button:hover {
      background-color: #218838;
    }

    .top-right-logout {
      background-color: red;
    }

    .top-right-logout:hover {
      background-color: #cc0000;
    }

    .content {
      padding: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .contact-box {
      background-color: white;
      width: 80%;
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .contact-box:hover {
      transform: scale(1.02);
    }

    h2 {
      color: #007bff;
      font-size: 1.8rem;
      margin-bottom: 15px;
    }

    p {
      font-size: 1.1rem;
      line-height: 1.6;
      color: #555;
    }

    .contact-info {
      display: flex;
      flex-direction: column;
      gap: 15px;
      font-size: 1.2rem;
      color: #555;
    }

    .contact-info a {
      color: #007bff;
      text-decoration: none;
      font-size: 1.2rem;
    }

    .contact-info a:hover {
      text-decoration: underline;
    }

    footer {
      background-color: #007bff;
      color: white;
      text-align: center;
      padding: 10px 0;
      position: relative;
      bottom: 0;
      width: 100%;
    }

    footer p {
      margin: 0;
    }
  </style>
</head>
<body>

<header>
  <h1>Contact Us</h1>
  <div class="top-right-container">
    <a href="index.php" class="back-home-button">Back to Homepage</a>
    <a href="index.php?logout='1'" class="top-right-logout">Logout</a>
  </div>
</header>

<div class="content">
  <div class="contact-box">
    <h2>Get In Touch</h2>
    <p>If you'd like to contact me, feel free to reach out using the methods below:</p>
    
    <div class="contact-info">
      <p><strong>Phone Numbers:</strong></p>
      <p>Mobile: <a href="tel:+256752633691">0752633691</a></p>
      <p>Mobile: <a href="tel:+256779336352">0779336352</a></p>
      
      <p><strong>Email Addresses:</strong></p>
      <p>Email: <a href="mailto:kusemererwadaniel2@gmail.com">kusemererwadaniel@gmail.com</a></p>
      <p>Email: <a href="mailto:2001600007@sun.ac.ug">2001600007@sun.ac.ug</a></p>
      
  
      <p>WhatsApp:<a href="tel:+256779336352">0779336352</a></p>
    </div>
  </div>
</div>

<footer>
  <p>&copy; 2024 Daniel | All Rights Reserved</p>
</footer>

</body>
</html>
