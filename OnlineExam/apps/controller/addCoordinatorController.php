<?php
/**
 * Created by PhpStorm.
 * User: RokonNazrul
 * Date: 5/2/2018
 * Time: 11:53 PM
 */
require "acaAdminController.php";

    if(isset($_POST['addCOBtn'])) {
        $co_email = $_POST['email'];
        $faculty = $_POST['faculty'];
        $department = $_POST['department'];

        $user_query = "SELECT * FROM user WHERE email = '$co_email'";
        $user_exists = $conn->query("$user_query");
        $user_row = mysqli_fetch_array($user_exists);
        $user_row_count = mysqli_num_rows($user_exists);
        if($user_row_count>0) {
            $co_user_id = $user_row['user_id'];

            $admin_query = "SELECT * FROM academic_admin WHERE user_id = '$user_id'";
            $admin_exists = $conn->query("$admin_query");
            $admin_row = mysqli_fetch_array($admin_exists);

            $aca_admin_id = $admin_row['aca_admin_id'];

            $portal_query = "SELECT * FROM portal WHERE aca_admin_id = '$aca_admin_id'";
            $portal_exists = $conn->query("$portal_query");
            $portal_row = mysqli_fetch_array($portal_exists);

            $portal_id = $portal_row['portal_id'];

            $co_query = "INSERT INTO co_ordinator(user_id,portal_id,faculty,department) VALUES('" . $co_user_id . "','" . $portal_id . "','" . $faculty . "','" . $department . "')";
            $conn->query("$co_query");
            header("location:addCoordinator.php");
        }
        else{
            echo "<script type='text/javascript'>alert('Invalid Email Address or Email does not Found');</script>";
        }
    }
?>