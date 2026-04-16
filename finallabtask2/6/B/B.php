<?php
    if(isset($_POST['submit'])){
        
        if(isset($_REQUEST['blood_group']) && $_REQUEST['blood_group'] != ""){
            $blood_group = $_REQUEST['blood_group'];
            echo "Selected Blood Group: " . $blood_group . "<br><br>";
        }else{
            echo "No blood group selected!<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>6B</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>BLOOD GROUP</legend>
            <select name="blood_group">
                <option value="">Select</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
            <hr>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>