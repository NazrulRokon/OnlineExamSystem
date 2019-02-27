<?php
    session_start();
    $admin_id = $_SESSION['admin_id'];
    $full_name = $_SESSION['full_name'];
    $email = $_SESSION['email'];
    if($admin_id==true){
        $full_name = $_SESSION['full_name'];
        if($_SESSION['admin_type'] == "admin") {
            $admin_type = "Admin";
        }
        else{
            $admin_type = "Assistant Admin";
        }
    }
    else{
        header('location:adminLogin.php');
    }
?>