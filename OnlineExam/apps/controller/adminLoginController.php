<?php
require "dbConnector.php";
if (isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $check_user ="SELECT * FROM admin WHERE user_name = '$username' AND password = '$password'";
    $result = $conn->query($check_user);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        session_start();
        $admin_query = "SELECT * FROM admin WHERE user_name = '$username' AND password = '$password'";
        $admin_exists = $conn->query($admin_query);
        $admin_row = mysqli_fetch_array($admin_exists);
        $_SESSION['admin_id'] = $admin_row['admin_id'];
        $_SESSION['admin_type'] = $admin_row['admin_type'];
        $_SESSION['full_name'] = $admin_row['full_name'];
        $_SESSION['user_name'] = $admin_row['user_name'];
        $_SESSION['email'] = $admin_row['email'];
        if($_SESSION['admin_type'] == "admin") {
            $admin_type = "Admin";
            header('location:adminPanel.php');
        }
        else{
            $admin_type = "Assistant Admin";
            header('location:assAdminPanel.php');
        }
    }
    else
    {
        echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
}
?>