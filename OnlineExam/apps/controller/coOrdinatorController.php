<?php
require "dbConnector.php";
require "sessionController.php";

$co_query = "SELECT * FROM co_ordinator WHERE user_id = '$user_id'";
$co_exists = $conn->query("$co_query");
$co_row = mysqli_fetch_array($co_exists);
$co_count = mysqli_num_rows($co_exists);

$portal_id = $co_row['portal_id'];
$co_id = $co_row['co_id'];

$portal_query = "SELECT * FROM portal WHERE portal_id = '$portal_id'";
$portal_exists = $conn->query("$portal_query");
$portal_row = mysqli_fetch_array($portal_exists);

$portal_id = $portal_row['portal_id'];
$portal_name = $portal_row['institute_name'];
$institute_address = $portal_row['institute_address'];

$query = "SELECT * FROM exam_pools WHERE co_id = '$co_id'";
$pool_exists = $conn->query("$query");
$pool_row = mysqli_fetch_array($pool_exists);
$pool_count = mysqli_num_rows($pool_exists);

$pool_token = $pool_row['pool_token'];
$course_code = $pool_row['course_code'];
$course_name = $pool_row['course_name'];
$department = $pool_row['department'];
$institute_name =  $pool_row['institute_name'];
$que_setter_email = $pool_row['que_setter_email'];
$exam_date = $pool_row['exam_date'];
$duration =  $pool_row['duration'];


if (isset($_GET['delete'])) {

    $pool_id = $_GET['delete'];

    $delete_pool = "DELETE FROM exam_pools WHERE pool_id = '$pool_id'";
    $conn->query("$delete_pool");

    $delete_qs = "DELETE FROM que_setter WHERE pool_id = '$pool_id'";
    $conn->query("$delete_qs");

    $query_reset_inc = "SET @num := 0;
                        UPDATE pool SET pool_id = @num := (@num+1);
                        ALTER TABLE pool AUTO_INCREMENT = 1;";
    $conn->query("$query_reset_inc");
    header("location:../../exam_coordinator/coOrdinatorDashboard.php");
}

?>