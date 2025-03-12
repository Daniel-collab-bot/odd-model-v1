<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Admin Panel</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .dashboard {
      text-align: center;
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      width: 80%;
      max-width: 500px;
    }

    .dashboard h1 {
      color: #007bff;
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    .button-container {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-bottom: 20px;
      flex-wrap: wrap;
    }

    .button {
      display: inline-block;
      padding: 15px 25px;
      background-color: #007bff;
      color: white;
      text-decoration: none;
      font-size: 18px;
      border-radius: 5px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      margin: 5px;
      width: 200px;
      text-align: center;
    }

    .button:hover {
      background-color: #0056b3;
      transform: translateY(-2px);
    }

    .button:active {
      background-color: #003d80;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      transform: translateY(1px);
    }

    .logout-button {
      background-color: #dc3545;
      color: white;
      width: auto;
      text-align: center;
    }

    .logout-button:hover {
      background-color: #c82333;
    }

    .logout-button:active {
      background-color: #9e2e2b;
    }

    @media (max-width: 600px) {
      .dashboard {
        width: 90%;
      }

      .button {
        width: 100%;
      }
    }
  </style>
</head>
<body>

<div class="dashboard">
  <h1>Welcome to Admin Panel</h1>
  <div class="button-container">
    <a href="viewusers.php" class="button">View Users</a>
    <a href="adduser.php" class="button">Add User</a>
    <a href="manage.php" class="button">Manage Diseases</a>
  </div>
  <a href="login.php?logout='1'" class="logout-button">Logout</a>
</div>

</body>
</html>
