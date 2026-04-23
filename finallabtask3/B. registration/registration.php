<?php
    session_start();

    if(!isset($_SESSION['all_users'])){
        $_SESSION['all_users'] = [];
    }

    if(isset($_POST['submit'])){

        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $confirm_password = $_REQUEST['confirm_password'];
        $gender = $_REQUEST['gender'] ?? "";
        $dd = $_REQUEST['dd'] ?? "";
        $mm = $_REQUEST['mm'] ?? "";
        $yyyy = $_REQUEST['yyyy'] ?? "";

        $dob = $dd . "/" . $mm . "/" . $yyyy;

        // very simple check
        if($password == $confirm_password){

            $new_user = [
                'username' => $name,
                'email' => $email,
                'password' => $password,
                'gender' => $gender,
                'dob' => $dob,
                'profile_picture' => "default.png"
            ];

            $_SESSION['all_users'][] = $new_user;

            header('location: C.php');
        }
        else{
            echo "Password not matched!";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>

<div style="width:500px; margin:auto; border:1px solid black; padding:20px;">

<a href="A.php">Home | </a>
<a href="C.php">Login | </a>
<a href="B.php">Registration</a>

<br><br>

<h3>Registration</h3>

<form method="post">

Name: <input type="text" name="name"><br><hr>

Email: <input type="text" name="email"><br><hr>

Password: <input type="password" name="password"><br><hr>

Confirm Password: <input type="password" name="confirm_password"><br><hr>

Gender:
<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="other"> Other

<hr>

DOB:
<input type="text" name="dd" size="2"> /
<input type="text" name="mm" size="2"> /
<input type="text" name="yyyy" size="4">

<hr>

<input type="submit" name="submit" value="Submit">
<input type="reset" value="Reset">

</form>

<hr>

<p style="text-align:center;">Copyright &copy; 2017</p>

</div>

</body>
</html>