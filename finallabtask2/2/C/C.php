<?php
    $email = "";
    $message = ""; 
    
    if(isset($_POST['submit'])){
        $email = $_REQUEST['email'];
        
        if($email == ""){
            $message = "Email is empty!";
        }else{
            $message = "Submitted Email: " . $email;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>2C</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>EMAIL</legend>
            <input type="email" name="email" value="<?php if(isset($email)){ echo $email; } ?>">
            <hr>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
    
    <?php echo $message; ?>
</body>
</html>