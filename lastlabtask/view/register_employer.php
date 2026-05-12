<?php
    session_start();
    if(!isset($_COOKIE['status'])) {
        header('location: login.php');
        exit();
    }
    $error = "";
    $success = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Employer</title>
</head>
<body>
    <h2>Register New Employer</h2>
    <a href="admin_home.php">Back</a> | <a href="../controller/logout.php">Logout</a>
    <hr>
    
    <?php if($error) { echo "<p style='color:red'>$error</p>"; } ?>
    <?php if($success) { echo "<p style='color:green'>$success</p>"; } ?>
    
    <form method="POST" action="../controller/register_check.php">
        Employer Name: <input type="text" name="employer_name" required/> <br>
        Company Name: <input type="text" name="company_name" required/> <br>
        Contact No: <input type="text" name="contact_no" required/> <br>
        Username: <input type="text" name="username" required/> <br>
        Password: <input type="password" name="password" required/> <br>
        <input type="submit" name="submit" value="Register Employer"/>
    </form>
</body>
</html>