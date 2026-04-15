<?php
    if(isset($_POST['submit'])){
        $dob = $_REQUEST['dob'];
        
        if($dob == ""){
            echo "Date of Birth is empty!";
        }else{
            echo "Submitted Date of Birth: " . $dob;
        }
    }else{
        echo "No date of birth submitted. Please go back and enter your DOB.";
    }
?>