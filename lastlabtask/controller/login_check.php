<?php
    session_start();
    require_once('../model/employer_model.php');

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($username == "" || $password == "") {
            echo "Username and Password cannot be empty!";
        } else {
            $status = loginAdmin($username, $password);
            if($status) {
                $_SESSION['admin'] = $username;
                $_SESSION['status'] = true;
                setcookie('status', 'true', time()+3600, '/');
                header('location: ../view/admin_home.php');
            } else {
                echo "Invalid username or password!";
            }
        }
    } else {
        header('location: ../view/login.php');
    }
?>