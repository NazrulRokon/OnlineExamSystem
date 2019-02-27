<?php
session_start();
$user_id = $_SESSION['userid'];
$user_type = $_SESSION['usertype'];
$user_name = $_SESSION['username'];
$fullname = $_SESSION['fullname'];
$email = $_SESSION['email'];

$uri = $_SERVER['REQUEST_URI'];

if($_SESSION['username']==true){
    $full_name = $_SESSION['fullname'];
    $session = true;
}
else{
    header('location:../login.php');
}
?>