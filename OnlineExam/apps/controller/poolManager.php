<?php
require "dbConnector.php";
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