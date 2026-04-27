<?php
    // session_start();
    
    // if(isset($_SESSION['status']) && $_SESSION['status'] == true){
    //     header('location: logged_in_dashboard.php');
    //     exit();
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Home</title>

    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        .box {
            width: 600px;
            margin: 40px auto;
            border: 1px solid black;
            padding: 20px;
        }

        .nav {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<div class="box">

    <div class="nav">
        <a href="../A. public home/public_home.php">Home</a> |
        <a href="../C. login/login.php">Login</a> |
        <a href="../B. registration/registration.php">Registration</a>
    </div>

    <h2>Welcome to X Company</h2>

    <hr>

    <p>Copyright &copy; 2017</p>

</div>

</body> 
</html>

<?php
    // echo "Welcome to X company."; 
?>