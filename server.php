<?php
session_start();

// Initializing variables
$fullname = "";
$phonenumber = "";
$address = "";
$username = "";
$errors = array(); 

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'final');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // Receive all input values from the form
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // Form validation
    if (empty($fullname)) { array_push($errors, "Name is required"); }
    if (empty($phonenumber)) { array_push($errors, "Phone number is required"); }
    if (empty($address)) { array_push($errors, "Address is required"); }
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // Check for existing user
    $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }
    }

    // Register user if no errors
    if (count($errors) == 0) {
        $query = "INSERT INTO users (fullname, phonenumber, address, username, password, role) 
                  VALUES ('$fullname', '$phonenumber', '$address', '$username', '$password_1', 'user')";
        mysqli_query($db, $query);
        
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'user';
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        
        if (mysqli_num_rows($results) == 1) {
            $user = mysqli_fetch_assoc($results);
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            
            if ($user['role'] === 'admin') {
                $_SESSION['success'] = "You are now logged in as admin";
                header('location: dash.php'); // Admin dashboard
            } else {
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php'); // User dashboard
            }
            exit();
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>
