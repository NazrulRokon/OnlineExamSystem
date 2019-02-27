<?php
require "dbConnector.php";
require "sessionController.php";
$query = "SELECT * FROM portal WHERE aca_admin_email = '$email'";
$portal_exists = $conn->query("$query");
$count_portal = mysqli_num_rows($portal_exists);

$portal_row = mysqli_fetch_array($portal_exists);

$portal_approved = $portal_row['approved'];
$portal_id = $portal_row['portal_id'];
$institute_name = $portal_row['institute_name'];
$institute_address = $portal_row['institute_address'];

if(isset($_POST['portalDeleteBtn'])){
    $admin_query = "SELECT * FROM academic_admin WHERE user_id = '$user_id'";
    $admin_exists = $conn->query("$admin_query");
    $admin_row = mysqli_fetch_array($admin_exists);
    $admin_id = $admin_row['aca_admin_id'];
    $delete_portal = "DELETE FROM portal WHERE aca_admin_id = '$admin_id'";
    $conn->query("$delete_portal");
    $delete_aca_admin = "DELETE FROM academic_admin WHERE aca_admin_id = '$admin_id'";
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
    header("location:academicAdminDashboard.php");
}

if (isset($_GET['approve'])) {
    $pool_id = $_GET['approve'];
    $approve_query = "UPDATE exam_pools SET  approved = 1 WHERE pool_id='$pool_id'";
    $approved = $conn->query("$approve_query");
    header("location:../../academic_admin/academicAdminDashboard.php");
}

if (isset($_GET['delete'])) {

    $pool_id = $_GET['delete'];

    $delete_pool = "DELETE FROM exam_pools WHERE pool_id = '$pool_id'";
    $conn->query("$delete_pool");

    $query_reset_inc = "SET @num := 0;
                        UPDATE pool SET pool_id = @num := (@num+1);
                        ALTER TABLE pool AUTO_INCREMENT = 1;";
    $conn->query("$query_reset_inc");
    header("location:../../academic_admin/academicAdminDashboard.php");
}

?>