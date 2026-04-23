<?php
    session_start();

    if(isset($_SESSION['status']) && $_SESSION['status'] == true){
        header('location: logged_in_dashboard.php');
        exit();
    }

    $msg = "";

    if(isset($_POST['submit'])){

        $email = $_POST['email'];

        if($email == ""){
            $msg = "Enter your email first!";
        }
        else{
            $found = false;

            if(isset($_SESSION['all_users'])){
                foreach($_SESSION['all_users'] as $user){

                    if($user['email'] == $email){
                        $msg = "Your password is: " . $user['password'];
                        $found = true;
                        break;
                    }
                }
            }

            if($found == false){
                $msg = "Email not found!";
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>

<div style="width:500px; margin:auto; border:1px solid black; padding:20px;">

    <a href="A.php">Home | </a>
    <a href="C.php">Login | </a>
    <a href="B.php">Registration</a>

    <br><br>

    <fieldset>
        <legend>FORGOT PASSWORD</legend>

        <?php
            if($msg != ""){
                echo $msg . "<br><br>";
            }
        ?>

        <form method="post">
            Enter Email: <input type="text" name="email">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>

    <br>
    <p style="text-align:center;">Copyright &copy; 2017</p>

</div>

</body>
</html>