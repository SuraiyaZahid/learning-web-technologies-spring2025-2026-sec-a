<?php
session_start();

$name = "";
$email = "";
$username = "";
$password = "";
$confirm_password = "";
$gender = "";
$day = "";
$month = "";
$year = "";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $username = trim($_POST["username"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $day = trim($_POST["day"]);
    $month = trim($_POST["month"]);
    $year = trim($_POST["year"]);

    if ($name == "" || $email == "" || $username == "" || $password == "" || $confirm_password == "" || $gender == "" || $day == "" || $month == "" || $year == "") {
        $error = "All fields are required.";
    } elseif (strpos($email, "@") == false || strpos($email, ".") == false) {
        $error = "Invalid email.";
    } elseif ($password != $confirm_password) {
        $error = "Password and confirm password must match.";
    } else {

        if (!isset($_SESSION["users"])) {
            $_SESSION["users"] = array();
        }

        $found = false;
        foreach ($_SESSION["users"] as $user) {
            if ($user["username"] == $username || $user["email"] == $email) {
                $found = true;
                break;
            }
        }

        if ($found) {
            $error = "Username or email already exists.";
        } else {
            $dob = $day . "/" . $month . "/" . $year;

            $newUser = array(
                "name" => $name,
                "email" => $email,
                "username" => $username,
                "password" => $password,
                "gender" => $gender,
                "dob" => $dob,
                "picture" => "default.png"
            );

            $_SESSION["users"][] = $newUser;
            $success = "Registration successful. <a href='login.php'>Login now</a>.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

    <div class="header">
        <div class="logo">XCompany</div>
        <div class="nav">
            <a href="index.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="registration.php">Registration</a>
        </div>
    </div>

    <div class="content">
        <div class="form-box">
            <fieldset>
                <legend>REGISTRATION</legend>

                <?php
                if ($error != "") {
                    echo "<p class='error'>$error</p>";
                }
                if ($success != "") {
                    echo "<p class='success'>$success</p>";
                }
                ?>

                <form method="post" action="">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td>: <input type="text" name="name" value="<?php echo $name; ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: <input type="text" name="email" value="<?php echo $email; ?>"></td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td>: <input type="text" name="username" value="<?php echo $username; ?>"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>: <input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <td>Confirm Password</td>
                            <td>: <input type="password" name="confirm_password"></td>
                        </tr>
                    </table>

                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="Male" <?php if ($gender=="Male") echo "checked"; ?>> Male
                        <input type="radio" name="gender" value="Female" <?php if ($gender=="Female") echo "checked"; ?>> Female
                        <input type="radio" name="gender" value="Other" <?php if ($gender=="Other") echo "checked"; ?>> Other
                    </fieldset>

                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="text" name="day" size="2" value="<?php echo $day; ?>"> /
                        <input type="text" name="month" size="2" value="<?php echo $month; ?>"> /
                        <input type="text" name="year" size="4" value="<?php echo $year; ?>"> (dd/mm/yyyy)
                    </fieldset>

                    <br>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </form>
            </fieldset>
        </div>
    </div>

    <div class="footer">
        Copyright &copy; 2017
    </div>

</div>
</body>
</html>