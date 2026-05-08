<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form method="POST" action="../controller/signup_check.php" enctype="">
            <fieldset>
                <legend>Signup</legend>
                    Username: <input type="text" name="username" value=""/> <br>
                    Password: <input type="password" name="password" value=""/> <br>
                    Email: <input type="email" name="email" value=""/> <br>
                    <input type="submit" name="submit" value="Submit"/>
            </fieldset>
        </form>
        <a href="login.php">login</a>
</body>
</html>