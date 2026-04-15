<?php
    if(isset($_POST['submit'])){
        $email = $_REQUEST['email'];
        
        if($email == ""){
            echo "Email is empty!";
        }else{
            echo "Submitted Email: " . $email;
        }
    }else{
        echo "No email submitted. Please go back and enter an email.";
    }
?>