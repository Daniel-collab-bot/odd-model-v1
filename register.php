<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Website Development Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
      body {
          font-family: Arial, sans-serif;
          background-color: #e6f7ff; /* Light blue background */
          margin: 0;
          padding: 0;
      }
      .header {
          background-color: #1e90ff; /* DodgerBlue header */
          color: white;
          text-align: center;
          padding: 20px;
          border-radius: 10px 10px 0 0;
      }
      .header h2 {
          margin: 0;
          font-size: 24px;
      }
      form {
          width: 400px;
          margin: 0 auto; /* Center the form horizontally */
          padding: 20px;
          background: white;
          border-radius: 10px;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      }
      .input-group {
          margin: 10px 0;
      }
      .input-group label {
          display: block;
          margin-bottom: 5px;
          font-weight: bold;
          color: #333;
      }
      .input-group input {
          width: calc(100% - 20px);
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
      }
      .btn {
          background-color: #0073e6; /* Blue button */
          color: white;
          padding: 10px 20px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          font-size: 16px;
          font-weight: bold;
          width: 100%;
      }
      .btn:hover {
          background-color: #005bb5; /* Darker blue on hover */
      }
      p {
          text-align: center;
          margin-top: 15px;
          color: #555;
      }
      p a {
          color: #0073e6;
          text-decoration: none;
          font-weight: bold;
      }
      p a:hover {
          text-decoration: underline;
      }
  </style>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Full Name</label>
  	  <input type="text" name="fullname" value="<?php echo $fullname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="text" name="phonenumber" value="<?php echo $phonenumber; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address" value="<?php echo $address; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm Password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Login</a>
  	</p>
  </form>
  
</body>
</html>
