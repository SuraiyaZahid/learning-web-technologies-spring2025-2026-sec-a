<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['uname'];
        echo "Submitted name : {$name}";
    }
?>