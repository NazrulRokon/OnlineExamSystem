<?php
require "dbConnector.php";
require "sessionController.php";

    $qs_query = "SELECT * FROM que_setter WHERE user_id = '$user_id'";
    $qs_exists = $conn->query("$qs_query");
    $qs_row = mysqli_fetch_array($qs_exists);
    $qs_count = mysqli_num_rows($qs_exists);


?>