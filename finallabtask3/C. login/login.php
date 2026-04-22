<?php
session_start();

$username = "";
$password = "";
$error = "";

if (isset($_COOKIE["remember_username"])) {
    $username = $_COOKIE["remember_username"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];
    $remember = isset($_POST["remember"]);

    if ($username == "" || $password == "") {
        $error = "Username and password required.";
    } else {
        if (isset($_SESSION["users"])) {
            $found = false;

            foreach ($_SESSION["users"] as $user) {
                if ($user["username"] == $username && $user["password"] == $password) {
                    $_SESSION["logged_in"] = true;
                    $_SESSION["current_user"] = $user["username"];
                    $found = true;

                    if ($remember) {
                        setcookie("remember_username", $username, time() + 86400 * 30, "/");
                    } else {
                        setcookie("remember_username", "", time() - 3600, "/");
                    }

                    header("Location: dashboard.php");
                    exit();
                }
            }

            if (!$found) {
                $error = "Invalid username or password.";
            }
        } else {
            $error = "No registered user found.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
                <legend>LOGIN</legend>

                <?php
                if ($error != "") {
                    echo "<p class='error'>$error</p>";
                }
                ?>

                <form method="post" action="">
                    <table>
                        <tr>
                            <td>User Name</td>
                            <td>: <input type="text" name="username" value="<?php echo $username; ?>"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>: <input type="password" name="password"></td>
                        </tr>
                    </table>

                    <hr>

                    <input type="checkbox" name="remember"> Remember Me
                    <br><br>

                    <input type="submit" value="Submit">
                    <a href="forgot_password.php">Forgot Password?</a>
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