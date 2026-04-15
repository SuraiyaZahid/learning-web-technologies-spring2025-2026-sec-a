<?php
    if(isset($_POST['submit'])){
        $dob = $_REQUEST['dob'];
        
        if($dob == ""){
            echo "Date of Birth is empty!<br><br>";
        }else{
            echo "Submitted Date of Birth: " . $dob . "<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>3B</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            <input type="date" name="dob">
            <hr>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>