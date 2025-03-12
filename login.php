<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Website Development Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
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
  </style>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Register</a>
  	</p>
  </form>
</body>
</html>
