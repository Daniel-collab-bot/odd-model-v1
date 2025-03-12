<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
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
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 30px;
    }

    header h1 {
      margin: 0;
      font-size: 2rem;
    }

    .header-buttons {
      display: flex;
      gap: 10px;
    }

    .header-buttons a {
      display: inline-block;
      padding: 10px 15px;
      background-color: #fff;
      color: #007bff;
      text-decoration: none;
      font-size: 16px;
      border-radius: 5px;
      font-weight: bold;
    }

    .header-buttons a:hover {
      background-color: #f4f4f4;
      color: #0056b3;
    }

    .header-buttons .logout-button {
      background-color: red;
      color: white;
    }

    .header-buttons .logout-button:hover {
      background-color: #cc0000;
    }

    .content {
      padding: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .box {
      background-color: white;
      width: 80%;
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .box:hover {
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
  <h1>About Us</h1>
  <div class="header-buttons">
    <a href="index.php">Back to Homepage</a>
    <a href="login.php?logout='1'" class="logout-button">Logout</a>
  </div>
</header>

<div class="content">
  <div class="box">
    <h2>Hi, Welcome</h2>
    <p>Hello! I'm Daniel, a professional with a Bachelor's in Engineering in Electronics and Computer Engineering.<span class="highlight">This AI tool was </span> "designed to assist farmers in Soroti in predicting and identifying two major diseases affecting their oranges: Citrus Greening and Citrus Canker. This project is inspired by the persistent challenges faced by farmers in managing these diseases, which significantly negatively impact orange production in the region."</p>
  </div>

  <div class="box">
    <h2>Education</h2>
    <p>I hold a Bachelor's Degree in Engineering, specializing in Electronics and Computer Science. My education has provided me with a strong foundation in both theoretical and practical aspects of the engineering field, allowing me to tackle complex challenges effectively.</p>
  </div>
  
  <div class="box">
    <h2>Current Role</h2>
    <p>Currently, I am based at <span class="highlight">Soroti University</span>, where I continue to apply my expertise and contribute to the development of technology solutions.I work on both internal and external projects related to machine learning and networking.</p>
  </div>
</div>

<footer>
  <p>&copy; 2024 AI | All Rights Reserved</p>
</footer>

</body>
</html>
