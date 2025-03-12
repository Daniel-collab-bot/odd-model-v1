<?php
// Include the database connection
include('dbcon.php');

// Fetch all users from the database
$query = "SELECT * FROM users";
$stmt = $pdo->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll();

// Handle delete action
if (isset($_GET['delete'])) {
    $id_to_delete = $_GET['delete'];
    $delete_query = "DELETE FROM users WHERE id = :id";
    $delete_stmt = $pdo->prepare($delete_query);
    $delete_stmt->execute(['id' => $id_to_delete]);
    header("Location: viewusers.php"); // Redirect to refresh the page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Users</title>
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
      position: relative;
    }

    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }

    /* Top-right buttons */
    .top-buttons {
      position: absolute;
      top: 15px;
      right: 15px;
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

    table {
      width: 80%;
      margin: 20px auto;
      border-collapse: collapse;
    }

    th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: center;
    }

    th {
      background-color: #007bff;
      color: white;
    }

    .action-btn {
      margin: 5px;
    }
  </style>
</head>
<body>

<header>
  <h1>Admin - Manage Users</h1>

  <div class="top-buttons">
    <a href="dash.php" class="btn">Back to Homepage</a>
    <a href="login.php?logout='1'" class="btn">Logout</a>
  </div>
</header>

<table>
  <tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>Phone Number</th>
    <th>Address</th>
    <th>Username</th>
    <th>Password</th>
    <th>Role</th>
    <th>Actions</th>
  </tr>
  <?php foreach ($users as $user): ?>
    <tr>
      <td><?php echo $user['id']; ?></td>
      <td><?php echo $user['fullname']; ?></td>
      <td><?php echo $user['phonenumber']; ?></td>
      <td><?php echo $user['address']; ?></td>
      <td><?php echo $user['username']; ?></td>
      <td><?php echo $user['password']; ?></td>
      <td><?php echo $user['role']; ?></td>
      <td>
        <a href="edituser.php?id=<?php echo $user['id']; ?>" class="action-btn btn">Edit</a>
        <a href="viewusers.php?delete=<?php echo $user['id']; ?>" class="action-btn btn" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

</body>
</html>

