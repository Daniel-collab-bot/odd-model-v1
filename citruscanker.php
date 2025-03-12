<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Citrus Canker Feedback</title>
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
  <h1>Citrus Canker Detected</h1>
  <div class="top-right-container">
    <a href="index.php" class="back-home-button">Back to Homepage</a>
    <a href="login.php?logout='1'" class="top-right-logout">Logout</a>
  </div>
</header>
<div class="content">
  <div class="box">
    <h2>Mitigations</h2>
    <p>
      - Ensure proper sanitation practices in orchards to reduce infection.<br>
      - Avoid overhead irrigation to minimize water splash, which spreads bacteria.<br>
      - Use disease-free nursery stock when planting new trees.<br>
      - Regularly inspect orchards and remove infected leaves, fruits, or branches.<br>
      - Apply copper-based sprays to prevent the spread of the bacteria.
    </p>
  </div>

  <div class="box">
    <h2>Cure</h2>
    <p>
      While citrus canker cannot be completely cured, the following measures can help manage it:<br>
      - Prune and burn infected parts of the plant.<br>
      - Apply copper fungicides to suppress bacterial activity.<br>
      - Introduce resistant citrus varieties in severely affected areas.<br>
      - Maintain optimal tree health through balanced fertilization and irrigation.<br>
      - Work with agricultural extension officers to develop a long-term management strategy.
    </p>
  </div>
</div>

<footer>
  <p>&copy; 2025 Orange Disease Detection System | All Rights Reserved</p>
</footer>

</body>
</html>
