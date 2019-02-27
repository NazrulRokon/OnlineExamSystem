<?php
require "dbConnector.php";
require "coOrdinatorController.php";


$co_query = "SELECT * FROM co_ordinator WHERE user_id = '$user_id'";
$co_exists = $conn->query("$co_query");
$co_row = mysqli_fetch_array($co_exists);

$co_id = $co_row['co_id'];
$portal_id = $co_row['portal_id'];

if(isset($_POST['submit_pool'])) {
    $pool_token = $_POST['pool_token'];
    $portal_token = $_POST['portal_token'];
    $course_code = $_POST['course_code'];
    $course_name = $_POST['course_name'];
    $dept = $_POST['dept'];
    $semester = $_POST['semester'];
    $year = $_POST['year'];
    $institute_name = $_POST['institute_name'];
    $exam_type = $_POST['exam_type'];
    $generate_by = $_POST['generate_by'];
    $que_setter_email = $_POST['que_setter_email'];
    $num_exam_que = $_POST['num_exam_que'];
    $num_total_que = $_POST['num_total_que'];

    $exam_date = strtr($_REQUEST['exam_date'], '/', '-');
    $exam_date=date("Y-m-d",strtotime($exam_date));

    $start_time = $_POST['start_time'];
    $start_time=date("H:i:s",strtotime($start_time));

    $end_time = $_POST['end_time'];
    $end_time=date("H:i:s",strtotime($end_time));

    $duration = $_POST['duration'];

    $current_date = date("Y-m-d");

    $insert = "INSERT INTO exam_pools(co_id, portal_id, pool_token, course_code, course_name, department, semester, current_year, institute_name, que_type, que_generate_by, que_setter_email, num_of_exam_que, num_of_total_que, exam_date, start_time, ending_time, duration) VALUES ('".$co_id."', '".$portal_id."', '".$pool_token."','".$course_code."', '".$course_name."', '".$dept."', '".$semester."', '".$year."', '".$institute_name."', '".$exam_type."', '".$generate_by."', '".$que_setter_email."', '".$num_exam_que."', '".$num_total_que."', '".$exam_date."', '".$start_time."', '".$end_time."', '".$duration."')";
    $conn->query($insert);

    $user_query = "SELECT * FROM user WHERE email = '$que_setter_email'";
    $user_exists = $conn->query("$user_query");
    $user_row = mysqli_fetch_array($user_exists);
    $user_row_count = mysqli_num_rows($user_exists);

    if($user_row_count>0) {
        $qs_user_id = $user_row['user_id'];

        $pool_query = "SELECT * FROM exam_pools WHERE co_id = '$co_id'";
        $pool_exists = $conn->query("$pool_query");
        $pool_row = mysqli_fetch_array($pool_exists);

        $portal_id = $pool_row['portal_id'];
        $pool_id = $pool_row['pool_id'];

        $co_ordinator_query = "SELECT * FROM co_ordinator WHERE co_id = '$co_id'";
        $co_ordinator_exists = $conn->query("$co_ordinator_query");
        $co_ordinator_row = mysqli_fetch_array($co_ordinator_exists);

        $faculty = $co_ordinator_row['faculty'];
        $department = $co_ordinator_row['department'];

        $co_query = "INSERT INTO que_setter(user_id,portal_id,pool_id,faculty,department) VALUES('" . $qs_user_id . "','" . $portal_id . "','" . $pool_id . "', '" . $faculty . "','" . $department . "')";
        $conn->query("$co_query");
    }
    else{
        echo "<script type='text/javascript'>alert('Question Setter email does not Found');</script>";
    }

    header("location:coOrdinatorDashboard.php");
}
mysqli_close($conn);
?>