<?php
    session_start();
    require_once('../model/employer_model.php');

    $keyword = $_GET['keyword'];
    $employers = searchEmployer($keyword);

    
    header('Content-Type: application/json');
    echo json_encode($employers);
?>