<?php
    require "dbConnector.php";
    if(isset($_POST['submit'])) {
        $user_type = $_POST['usertype'];
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $full_name = $first_name .' '.$last_name;
        $user_name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $check_user ="SELECT * FROM user WHERE user_type = '$user_type' AND email = '$email'";
        $result = $conn->query($check_user);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            echo "<script type='text/javascript'>alert('Email id already exists!')</script>";
        }
        else
        {
            $insert = "INSERT INTO user (user_type,first_name,last_name,full_name,user_name,email,password) VALUES ('" . $user_type . "', '" . $first_name . "', '" . $last_name . "', '" . $full_name . "', '" . $user_name . "', '" . $email . "', '" . $password . "')";
            $conn->query($insert);
            header("location:regSuccessfulMsg.php");
        }
    }
    mysqli_close($conn);
?>