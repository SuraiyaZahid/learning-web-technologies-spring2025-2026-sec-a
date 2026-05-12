<?php
session_start();
require_once('../model/employer_model.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = deleteEmployer($id);
    
    if($status) {
        header('location: ../view/employer_list.php');
    } else {
        echo "Delete failed!";
    }
} else {
    header('location: ../view/employer_list.php');
}
?>