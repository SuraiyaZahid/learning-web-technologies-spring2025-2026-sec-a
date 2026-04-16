<?php
    if(isset($_POST['submit'])){
        
        if(isset($_REQUEST['gender'])){
            $gender = $_REQUEST['gender'];
            echo "Selected Gender: " . $gender;
        }else{
            echo "No gender selected!";
        }
        
    }else{
        echo "No form submission received.";
    }
?>