<?php
    $dob = ""; 
    $message = ""; 
    
    if(isset($_POST['submit'])){
        $dob = $_REQUEST['dob'];
        
        if($dob == ""){
            $message = "Date of Birth is empty!";
        }else{
            $message = "Submitted Date of Birth: " . $dob;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>3C</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            <input type="date" name="dob" value="<?php if(isset($dob)){ echo $dob; } ?>">
            <hr>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
    
    <?php echo $message; ?>
</body>
</html>