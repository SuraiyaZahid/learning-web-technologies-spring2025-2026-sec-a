<?php
    $blood_group = ""; 
    $message = ""; 
    
    if(isset($_POST['submit'])){
        
        if(isset($_REQUEST['blood_group']) && $_REQUEST['blood_group'] != ""){
            $blood_group = $_REQUEST['blood_group'];
            $message = "Selected Blood Group: " . $blood_group;
        }else{
            $message = "No blood group selected!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>6C</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>BLOOD GROUP</legend>
            <select name="blood_group">
                <option value="">Select</option>
                <option value="A+" <?php if($blood_group == "A+"){ echo "selected"; } ?>>A+</option>
                <option value="A-" <?php if($blood_group == "A-"){ echo "selected"; } ?>>A-</option>
                <option value="B+" <?php if($blood_group == "B+"){ echo "selected"; } ?>>B+</option>
                <option value="B-" <?php if($blood_group == "B-"){ echo "selected"; } ?>>B-</option>
                <option value="O+" <?php if($blood_group == "O+"){ echo "selected"; } ?>>O+</option>
                <option value="O-" <?php if($blood_group == "O-"){ echo "selected"; } ?>>O-</option>
                <option value="AB+" <?php if($blood_group == "AB+"){ echo "selected"; } ?>>AB+</option>
                <option value="AB-" <?php if($blood_group == "AB-"){ echo "selected"; } ?>>AB-</option>
            </select>
            <hr>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
    
    <?php echo $message; ?>
</body>
</html>