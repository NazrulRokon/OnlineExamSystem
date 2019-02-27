<?php
require "dbConnector.php";
require "sessionController.php";

$std_query = "SELECT * FROM student WHERE user_id = '$user_id'";
$std_exists = $conn->query("$std_query");
$std_row = mysqli_fetch_array($std_exists);
$std_count = mysqli_num_rows($std_exists);

$std_id = $std_row['student_id'];
$std_name = $std_row['academic_name'];

?>