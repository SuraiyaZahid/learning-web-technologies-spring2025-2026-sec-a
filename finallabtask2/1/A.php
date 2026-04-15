 
<?php
 
    if(isset($_POST['submit'])){
    //echo "Test!";
    //print_r($_GET);
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
 
    if($username == "" || $password == ""){
        echo "null username/password";
    }else{
 
        if($username == $password){
            echo "valid user!";
        }else{
            echo "invalid user!";
        }
    }
    }else{
        echo "invalid request! please login first!";
    }
?>
 
<!DOCTYPE html>
 
 
 
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>
</head>
<body>
    <form  method="post">
        <fieldset>
           
            Username: <input type="text" name="username" value=" <?php if(isset($_POST['username'])) { echo $_POST['username']; } ?>"/> <br>
            Password: <input type="password" name="password" value=" <  ?php if(isset($_POST['password'])) { echo $_POST['password']; } ?>"/> <br>
             <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>
</body>
</html>
 
 
 