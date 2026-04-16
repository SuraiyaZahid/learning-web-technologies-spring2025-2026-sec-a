<?php
    $gender = ""; 
    $message = ""; 
    
    if(isset($_POST['submit'])){
        if(isset($_REQUEST['gender'])){
            $gender = $_REQUEST['gender'];
            $message = "Selected Gender: " . $gender;
        }else{
            $message = "No gender selected!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>4C</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>GENDER</legend>
            <input type="radio" name="gender" value="Male" <?php if(isset($gender) && $gender == "Male"){ echo "checked"; } ?>> Male<br>
            <input type="radio" name="gender" value="Female" <?php if(isset($gender) && $gender == "Female"){ echo "checked"; } ?>> Female<br>
            <input type="radio" name="gender" value="Other" <?php if(isset($gender) && $gender == "Other"){ echo "checked"; } ?>> Other<br>
            <hr>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
    
    <?php echo $message; ?>
</body>
</html>