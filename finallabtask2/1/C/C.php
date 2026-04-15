<?php
    $name = ""; 
    
    if(isset($_POST['submit'])){
        $name = $_REQUEST['name'];
        
        if($name == ""){
            echo "Name is empty!<br><br>";
        }else{
            echo "Submitted Name: " . $name . "<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>1C</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>NAME</legend>
            <input type="text" name="name" value="<?php if(isset($name)){ echo $name; } ?>">
            <hr>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>