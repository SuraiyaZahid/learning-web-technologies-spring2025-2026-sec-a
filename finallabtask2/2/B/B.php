<?php
    if(isset($_POST['submit'])){
        $email = $_REQUEST['email'];
        
        if($email == ""){
            echo "Email is empty!<br><br>";
        }else{
            echo "Submitted Email: " . $email . "<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>2B</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>EMAIL</legend>
            <input type="email" name="email">
            <hr>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>