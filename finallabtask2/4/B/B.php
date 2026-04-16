<?php
    if(isset($_POST['submit'])){
        if(isset($_REQUEST['gender'])){
            $gender = $_REQUEST['gender'];
            echo "Selected Gender: " . $gender . "<br><br>";
        }else{
            echo "No gender selected!<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>4B</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>GENDER</legend>
            <input type="radio" name="gender" value="Male"> Male<br>
            <input type="radio" name="gender" value="Female"> Female<br>
            <input type="radio" name="gender" value="Other"> Other<br>
            <hr>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>