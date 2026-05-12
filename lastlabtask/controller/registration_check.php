<?php
    session_start();
    require_once('../model/employer_model.php');

    if(isset($_POST['submit'])) {
        $employer_name = $_POST['employer_name'];
        $company_name = $_POST['company_name'];
        $contact_no = $_POST['contact_no'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // NULL Validation
        if($employer_name == "" || $company_name == "" || $contact_no == "" || $username == "" || $password == "") {
            echo "All fields are required!";
        } else {
            $employer = [
                'employer_name' => $employer_name,
                'company_name' => $company_name,
                'contact_no' => $contact_no,
                'username' => $username,
                'password' => $password
            ];
            
            $status = addEmployer($employer);
            if($status) {
                header('location: ../view/employer_list.php');
            } else {
                echo "Registration failed!";
            }
        }
    } else {
        header('location: ../view/register_employer.php');
    }
?>