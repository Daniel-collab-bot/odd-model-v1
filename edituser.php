<?php
// Include the database connection
include('dbcon.php');

// Handle edit action
if (isset($_POST['edit'])) {
    $id_to_edit = $_POST['id'];
    $fullname = $_POST['fullname'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $edit_query = "UPDATE users SET fullname = :fullname, phonenumber = :phonenumber, address = :address, username = :username, password = :password, role = :role WHERE id = :id";
    $edit_stmt = $pdo->prepare($edit_query);
    $edit_stmt->execute([
        'id' => $id_to_edit,
        'fullname' => $fullname,
        'phonenumber' => $phonenumber,
        'address' => $address,
        'username' => $username,
        'password' => $password,
        'role' => $role
    ]);
    header("Location: viewusers.php"); // Redirect back to the users list page
}

// Fetch user details for editing
if (isset($_GET['id'])) {
    $edit_id = $_GET['id'];
    $edit_query = "SELECT * FROM users WHERE id = :id";
    $edit_stmt = $pdo->prepare($edit_query);
    $edit_stmt->execute(['id' => $edit_id]);
    $edit_user = $edit_stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <style>
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
    }

    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }

    .btn {
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      margin-left: 10px;
      border-radius: 5px;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    form {
      width: 50%;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    label {
      font-weight: bold;
    }

    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    button {
      background-color: #28a745;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    button:hover {
      background-color: #218838;
    }

    .cancel-btn {
      background-color: #dc3545;
    }

    .cancel-btn:hover {
      background-color: #c82333;
    }
  </style>
</head>
<body>

<header>
  <h1>Edit User</h1>
</header>

<form action="edituser.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $edit_user['id']; ?>">
    <label for="fullname">Full Name:</label><br>
    <input type="text" name="fullname" value="<?php echo $edit_user['fullname']; ?>" required><br><br>
    <label for="phonenumber">Phone Number:</label><br>
    <input type="text" name="phonenumber" value="<?php echo $edit_user['phonenumber']; ?>" required><br><br>
    <label for="address">Address:</label><br>
    <input type="text" name="address" value="<?php echo $edit_user['address']; ?>" required><br><br>
    <label for="username">Username:</label><br>
    <input type="text" name="username" value="<?php echo $edit_user['username']; ?>" required><br><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" value="<?php echo $edit_user['password']; ?>" required><br><br>
    <label for="role">Role:</label><br>
    <input type="text" name="role" value="<?php echo $edit_user['role']; ?>" required><br><br>
    <button type="submit" name="edit" class="btn">Update User</button>
    <a href="viewusers.php" class="btn cancel-btn">Cancel</a>
</form>

</body>
</html>
