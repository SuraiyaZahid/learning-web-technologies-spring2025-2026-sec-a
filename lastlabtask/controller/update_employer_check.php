<?php
    session_start();
    require_once('../model/user_model.php');
    
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        
        $user = ['id'=>$id, 'username'=>$username, 'email'=>$email];
        $status = updateUser($user);
        
        if($status){
            header('location: ../view/user_list.php');
        } else {
            echo "Update failed!";
        }
    } else {
        header('location: ../view/user_list.php');
    }
?>