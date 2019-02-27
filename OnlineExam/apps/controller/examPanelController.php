<?php
require "dbConnector.php";
require "sessionController.php";

$candidate_user_id = $_SESSION['userid'];
$candidate_query = "SELECT * FROM candidate WHERE user_id = '$candidate_user_id'";
$candidate_exists = $conn->query("$candidate_query");
$candidate_row = mysqli_fetch_array($candidate_exists);

$pool_id = $candidate_row['pool_id'];

$pool_query = "SELECT * FROM exam_pools WHERE pool_id = '$pool_id'";
$pool_exists = $conn->query("$pool_query");
$pool_row = mysqli_fetch_array($pool_exists);
$pool_row_count = mysqli_num_rows($pool_exists);

$duration = $pool_row['duration'];
$exam_date = $pool_row['exam_date'];
$num_of_exam_que = $pool_row['num_of_exam_que'];
$start_time = $pool_row['start_time'];
$ending_time = $pool_row['ending_time'];
$start_date=$exam_date." ".$start_time;
$ending_date=$exam_date." ".$ending_time;


$page = (isset($_GET['page']) && $_GET['page']>0 && $_GET['page']<=$num_of_exam_que) ? (int)$_GET['page'] : 1;
$per_page = 1;

$limit = ($page > 1) ? ($page*$per_page) - $per_page : 0;

$candidate_ans_query = mysqli_query($conn,"SELECT SQL_CALC_FOUND_ROWS * FROM candidate_ans LIMIT {$limit}, {$per_page}");
$candidate_ans_row = mysqli_fetch_all($candidate_ans_query);

$total_que = mysqli_query($conn,"SELECT FOUND_ROWS() as total");
$total_que_row = mysqli_fetch_assoc($total_que)['total'];

$pages = ceil($total_que_row/$per_page);


$id=$_SESSION['que_no'];

$check_query = "SELECT * FROM candidate_ans WHERE que_no='$id'";
$check_query_execute = $conn->query($check_query);
$check_query_row = mysqli_fetch_array($check_query_execute);
$que_type = $check_query_row['que_type'];
$correct_option = $check_query_row['correct_option'];
$correct_answer = $check_query_row['correct_answer'];
$candidate_option = $check_query_row['candidate_opt'];
$candidate_answer = $check_query_row['candidate_ans'];

if($que_type == "MCQ") {
    if ($correct_option == $candidate_option) {
        $query = "UPDATE candidate_ans SET result = 1 WHERE que_no='$id'";
        $statement = $conn->query($query);
    } else {
        $query = "UPDATE candidate_ans SET result = 0 WHERE que_no='$id'";
        $statement = $conn->query($query);
    }
}

else {
    if ($correct_answer == $candidate_answer) {
        $query = "UPDATE candidate_ans SET result = 1 WHERE que_no='$id'";
        $statement = $conn->query($query);
    } else {
        $query = "UPDATE candidate_ans SET result = 0 WHERE que_no='$id'";
        $statement = $conn->query($query);
    }
}

?>

