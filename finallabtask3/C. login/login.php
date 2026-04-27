<?php
    session_start();

    if(isset($_SESSION['status']) && $_SESSION['status'] == true){
        header('location: logged_in_dashboard.php');
        exit();
    }

    $error = "";

    if(isset($_POST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" || $password == ""){
            $error = "Username and password are required!";
        }
        else{
            $user_found = false;

            if(isset($_SESSION['all_users'])){
                foreach($_SESSION['all_users'] as $user){

                    if(($user['username'] == $username || $user['email'] == $username) && $user['password'] == $password){

                        $user_found = true;

                        $_SESSION['username'] = $user['username'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['gender'] = $user['gender'];
                        $_SESSION['dob'] = $user['dob'];
                        $_SESSION['profile_picture'] = $user['profile_picture'];
                        $_SESSION['password'] = $user['password'];
                        $_SESSION['status'] = true;

                        header('location: ../E. logged in dashboard/logged_dashboard.php');
                        exit();
                    }
                }
            }

            if($user_found == false){
                $error = "Invalid username/email or password!";
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<div style="width:500px; margin:auto; border:1px solid black; padding:20px;">

    <a href="../A. public home/public_home.php">Home | </a>
    <a href="../C. login/login.php">Login | </a>
    <a href="../B. registration/registration.php">Registration</a>

    <br><br>

    <h3>Login</h3>

    <?php
        if($error != ""){
            echo "<p style='color:red;'>$error</p>";
        }
    ?>

    <form method="post" action="">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><hr>

        <input type="checkbox" name="remember_me"> Remember Me <br><br>

        <input type="submit" name="submit" value="Submit">
        <a href="D.php">Forgot Password?</a>
    </form>

    <hr>
    <p style="text-align:center;">Copyright &copy; 2017</p>

</div>

</body>
</html>