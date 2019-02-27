<?php
    require "dbConnector.php";
    require "adminSessionController.php";
    error_reporting(0);
    ini_set('display_errors', 0);
if (isset($_GET['approve'])) {
    $portal_id = $_GET['approve'];
    $approve_query = "UPDATE portal SET  approved = 1 WHERE portal_id='$portal_id'";
    $approved = $conn->query("$approve_query");
    if ($admin_type = "Admin")
        header("location:../../admins/adminPanel.php");
    if ($admin_type = "Assistant Admin")
        header("location:../../admins/assAdminPanel.php");
}

if (isset($_GET['delete'])) {

    $portal_id = $_GET['delete'];

    $admin_query = "SELECT * FROM academic_admin WHERE portal_id = '$portal_id'";
    $admin_exists = $conn->query("$admin_query");
    $admin_row = mysqli_fetch_array($admin_exists);
    $aca_admin_id = $admin_row['aca_admin_id'];

    $delete_aca_admin = "DELETE FROM academic_admin WHERE aca_admin_id = '$aca_admin_id'";
    $conn->query("$delete_aca_admin");

    $delete_coordinator = "DELETE FROM co_ordinator WHERE portal_id = '$portal_id'";
    $conn->query("$delete_coordinator");
    $delete_que_setter = "DELETE FROM que_setter WHERE portal_id = '$portal_id'";
    $conn->query("$delete_que_setter");
    $delete_student = "DELETE FROM student WHERE portal_id = '$portal_id'";
    $conn->query("$delete_student");
    $delete_candidate = "DELETE FROM candidate WHERE portal_id = '$portal_id'";
    $conn->query("$delete_candidate");
    $delete_exam_pools = "DELETE FROM exam_pools WHERE portal_id = '$portal_id'";
    $conn->query("$delete_exam_pools");
    $delete_address = "DELETE FROM address WHERE portal_id = '$portal_id'";
    $conn->query("$delete_address");
    $delete_personal_info = "DELETE FROM personal_info WHERE portal_id = '$portal_id'";
    $conn->query("$delete_personal_info");


    $delete_portal = "DELETE FROM portal WHERE portal_id = '$portal_id'";
    $conn->query("$delete_portal");

    $query_reset_inc = "SET @num := 0;
                        UPDATE portal SET portal_id = @num := (@num+1);
                        ALTER TABLE portal AUTO_INCREMENT = 1;";
    $conn->query("$query_reset_inc");
    if ($admin_type = "Admin")
        header("location:../../admins/adminPanel.php");
    if ($admin_type = "Assistant Admin")
        header("location:../../admins/assAdminPanel.php");
}
?>