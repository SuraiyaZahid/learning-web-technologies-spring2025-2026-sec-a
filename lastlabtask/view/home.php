<?php
    session_start();
    if(!isset($_COOKIE['status']) || !isset($_SESSION['username'])){ 
        header('location: login.php'); // redirect to login page if not signed in
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <h1>Welcome,   
        <?php 
            echo " " . $_SESSION['username']; // print the user name
        ?>
    </h1>
    <a href="logout.php">Logout</a>
</body>
</html>