<?php
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "online_exam_system";

$conn = mysqli_connect($server_name, $username, $password, $db_name) or die("Connection failed: " . $conn->error);

?>