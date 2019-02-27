<?php
/**
 * Created by PhpStorm.
 * User: RokonNazrul
 * Date: 5/2/2018
 * Time: 11:53 PM
 */
require "coOrdinatorController.php";

if(isset($_POST['addCandidate'])) {
    $email = $_POST['email'];
    $clearance_no = $_POST['clearance'];

    $user_query = "SELECT * FROM user WHERE email='$email'";
    $user_exists = $conn->query("$user_query");
    $user_row = mysqli_fetch_array($user_exists);
    $user_row_count = mysqli_num_rows($user_exists);
    if($user_row_count>0) {
        $std_user_id = $user_row['user_id'];

        $pool_query = "SELECT * FROM exam_pools WHERE co_id='$co_id'";
        $pool_exists = $conn->query("$pool_query");
        $pool_row = mysqli_fetch_array($pool_exists);

        $pool_id = $pool_row['pool_id'];
        $pool_token = $pool_row['pool_token'];
        $portal_id = $pool_row['portal_id'];

        $insert_candidate = "INSERT INTO candidate (user_id,portal_id,pool_id,pool_token,clearance) VALUES ('".$std_user_id."', '".$portal_id."', '".$pool_id."','".$pool_token."','".$clearance_no."')";
        $conn->query("$insert_candidate");

        $std_query = "SELECT * FROM student WHERE user_id = '$std_user_id'";
        $std_exists = $conn->query("$std_query");
        $std_row_count = mysqli_num_rows($std_exists);

        if($std_row_count == 0) {
            $insert_student = "INSERT INTO student (user_id,portal_id,pool_id) VALUES ('" . $std_user_id . "', '" . $portal_id . "', '" . $pool_id . "')";
            $conn->query("$insert_student");
        }
    }
    else{
        echo "<script type='text/javascript'>alert('Invalid Email Address or Email does not Found');</script>";
    }

}
?>