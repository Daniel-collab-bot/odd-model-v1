<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Disease Detection System</title>
    <style>
        body {
            background-color: #e6f7ff; /* Light blue background */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #1e90ff; /* DodgerBlue for header */
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff; /* White container */
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Softer shadow */
        }
        h1 {
            margin-bottom: 10px;
            font-size: 24px;
        }
        h2 {
            color: #333333; /* Dark gray for headings */
            margin-bottom: 10px;
        }
        p {
            color: #555555; /* Medium gray for text */
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .nav-buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .nav-button {
            background-color: #0073e6; /* Blue button */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .nav-button:hover {
            background-color: #005bb5; /* Darker blue on hover */
            transform: scale(1.05); /* Slight zoom effect */
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666666; /* Gray for footer text */
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Welcome to the Orange Disease Detection System</h1>
</div>

<div class="container">
    <h2>About This System</h2>
    <p>This system helps farmers detect and identify diseases affecting their orange crops. Using advanced machine learning models, it analyzes uploaded images and provides accurate feedback.</p>

    <h2>Get Started</h2>
    <p>To use the system, please create an account or log in if you already have one.</p>

    <div class="nav-buttons">
        <a href="register.php" class="nav-button">Register</a>
        <a href="login.php" class="nav-button">Login</a>
    </div>
</div>

<div class="footer">
    © 2025 Orange Disease Detection System. All rights reserved.
</div>

</body>
</html>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/11.4.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/11.4.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBcRonBheb-P72AHH63kWMJVDEWSLYk08Q",
    authDomain: "ml-project-4c7aa.firebaseapp.com",
    projectId: "ml-project-4c7aa",
    storageBucket: "ml-project-4c7aa.firebasestorage.app",
    messagingSenderId: "134218928539",
    appId: "1:134218928539:web:01dde845e54695ae82113e",
    measurementId: "G-TXK9BYKG21"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>