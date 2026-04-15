<!DOCTYPE html>
<html lang="en">
<head>
    <title>1B</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>NAME</legend>
            <input type="text" name="name">
            <hr>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $name = $_REQUEST['name'];
        
        if($name == ""){
            echo "Name is empty!<br><br>";
        }else{
            echo "Submitted Name: " . $name . "<br><br>";
        }
    }
?>