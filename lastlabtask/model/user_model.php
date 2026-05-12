<?php

    require_once('db.php');

    function login($user){
        $con = getConnection();
        $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) == 1) { // the user found
            return true;
        } else {
            return false;
        }
    }

    
    function addUser($user) {
        $con = getConnection();
        $sql = "insert into users values (null, '{$user['username']}', '{$user['password']}', '{$user['email']}')";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getAllUser(){
        $con = getConnection();
        $sql = "SELECT * FROM users";
        $result = mysqli_query($con, $sql);
        
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            $users[] = $row;
        }
        return $users;
    }

    function getUserById($id){
        $con = getConnection();
        $sql = "SELECT * FROM users WHERE id = {$id}";
        $result = mysqli_query($con, $sql);
        
        if(mysqli_num_rows($result) == 1){
            return mysqli_fetch_assoc($result);
        } else {
            return null;
        }
    }

    function deleteUser($id){
        $con = getConnection();
        $sql = "DELETE FROM users WHERE id = {$id}";
        
        if(mysqli_query($con, $sql)){
            return true;
        } else {
            return false;
        }
    }

    function updateUser($user){
        $con = getConnection();
        $sql = "UPDATE users 
                SET username = '{$user['username']}', 
                    email = '{$user['email']}' 
                WHERE id = {$user['id']}";
        
        if(mysqli_query($con, $sql)){
            return true;
        } else {
            return false;
        }
    }

?>