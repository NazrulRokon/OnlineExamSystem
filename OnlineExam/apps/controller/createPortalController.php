<?php
require "dbConnector.php";
require "sessionController.php";
if(isset($_POST['submit_portal'])) {
    $admin_email = $email;
    $user_id = $user_id;
    $portal_token = $_POST['portal_token'];
    $institute_name = $_POST['institute_name'];
    $institute_type = $_POST['institute_type'];
    $institute_email = $_POST['institute_email'];
    $institute_address = $_POST['institute_address'];

    $insert_user_id = "INSERT INTO academic_admin(user_id) VALUES ('$user_id')";
    $conn->query("$insert_user_id");

    $admin_query = "SELECT aca_admin_id FROM academic_admin WHERE user_id = '$user_id'";
    $admin_exists = $conn->query("$admin_query");
    $admin_row = mysqli_fetch_array($admin_exists);
    $admin_id = $admin_row['aca_admin_id'];

    $insert = "INSERT INTO portal(aca_admin_id,aca_admin_email,portal_token,institute_name,institute_type,institute_email,institute_address) VALUES ('".$admin_id."', '".$admin_email."', '".$portal_token."', '".$institute_name."','".$institute_type."', '".$institute_email."', '".$institute_address."')";
    $conn->query($insert);

    header("location:../academic_admin/academicAdminDashboard.php");
}
mysqli_close($conn);
?>