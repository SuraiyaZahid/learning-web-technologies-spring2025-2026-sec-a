<?php
    if(isset($_POST['submit'])){
        
        if(isset($_REQUEST['blood_group']) && $_REQUEST['blood_group'] != ""){
            $blood_group = $_REQUEST['blood_group'];
            echo "Selected Blood Group: " . $blood_group;
        }else{
            echo "No blood group selected!";
        }
        
    }else{
        echo "No form submission received.";
    }
?>