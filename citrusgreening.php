<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Citrus Greening Feedback</title>
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
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: flex-start;
    }

    .box {
      width: 45%;
      padding: 20px;
      border-radius: 8px;
      background-color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .box:hover {
      transform: scale(1.02);
    }

    .box h2 {
      color: #007bff;
      font-size: 1.5rem;
      margin-bottom: 15px;
    }

    .box p {
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
  <h1>Citrus Greening Detected</h1>
  <div class="top-right-container">
    <a href="index.php" class="back-home-button">Back to Homepage</a>
    <a href="index.php?logout='1'" class="top-right-logout">Logout</a>
  </div>
</header>

<div class="content">
  <div class="box">
    <h2>Mitigations</h2>
    <p>
      - Regularly inspect orange trees for early signs of citrus greening.<br>
      - Plant resistant rootstocks and use disease-free seedlings.<br>
      - Avoid transporting infected plants to healthy orchards.<br>
      - Prune heavily infected branches to slow down disease spread.<br>
      - Control Asian citrus psyllids using integrated pest management techniques.
    </p>
  </div>

  <div class="box">
    <h2>Cure</h2>
    <p>
      Unfortunately, there is no complete cure for citrus greening. However, you can take the following steps:<br>
      - Remove and destroy infected trees to prevent further spread.<br>
      - Apply foliar nutrients and antibiotics (if allowed in your region) to maintain tree health.<br>
      - Conduct research-based treatments to explore potential advancements.<br>
      - Consult agricultural extension officers for localized advice.
    </p>
  </div>
</div>

<footer>
  <p>&copy; 2025 Orange Disease Detection System | All Rights Reserved</p>
</footer>

</body>
</html>
