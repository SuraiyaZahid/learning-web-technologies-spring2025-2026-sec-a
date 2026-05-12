<?php
    session_start();
    if(!isset($_COOKIE['status'])) {
        header('location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Employer - AJAX + JSON</title>
    <script src="../assets/script.js"></script>
</head>
<body>
    <h2>Search Employer (AJAX + JSON)</h2>
    <a href="admin_home.php">Back</a> | <a href="../controller/logout.php">Logout</a>
    <hr>
    
    <input type="text" id="search_keyword" placeholder="Enter name, company or username..." onkeyup="searchEmployer()" style="width: 300px; padding: 8px;">
    
    <div id="result"></div>
</body>
</html>