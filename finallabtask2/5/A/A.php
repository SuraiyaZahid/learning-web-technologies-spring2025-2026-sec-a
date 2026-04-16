<?php
    if(isset($_POST['submit'])){
        
        if(isset($_REQUEST['degree'])){
            $degrees = $_REQUEST['degree']; // array of selected degrees
            
            echo "Selected Degrees: ";
            
            
            for($i = 0; $i < count($degrees); $i++){
                echo $degrees[$i];
                if($i < count($degrees) - 1){
                    echo ", ";
                }
            }
        }else{
            echo "No degree selected!";
        }
        
    }else{
        echo "No form submission received.";
    }
?>