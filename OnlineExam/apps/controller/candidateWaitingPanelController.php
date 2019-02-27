<?php
/**
 * Created by PhpStorm.
 * User: RokonNazrul
 * Date: 5/8/2018
 * Time: 2:50 PM
 */
require "dbConnector.php";
require "sessionController.php";

$que_id = array();
$id = 0;
$candidate_user_id = $_SESSION['userid'];
$candidate_query = "SELECT * FROM candidate WHERE user_id = '$candidate_user_id'";
$candidate_exists = $conn->query("$candidate_query");
$candidate_row = mysqli_fetch_array($candidate_exists);

$pool_id = $candidate_row['pool_id'];
$portal_id = $candidate_row['portal_id'];
$candidate_id = $candidate_row['candidate_id'];

$query = "SELECT * FROM exam_pools WHERE pool_id = '$pool_id'";
$pool_exists = $conn->query("$query");
$pool_row = mysqli_fetch_array($pool_exists);

$duration = $pool_row['duration'];
$exam_date = $pool_row['exam_date'];
$start_time = $pool_row['start_time'];
$ending_time = $pool_row['ending_time'];
$num_of_exam_que = $pool_row['num_of_exam_que'];

$start_date=$exam_date." ".$start_time;
$ending_date=$exam_date." ".$ending_time;

$que_query = "SELECT * FROM question_list WHERE pool_id = '$pool_id' AND portal_id = '$portal_id'";
$que_exists = $conn->query("$que_query");
$que_row_count = mysqli_num_rows($que_exists);

while($que_row = mysqli_fetch_array($que_exists)){
    $que_id[$id] = $que_row['que_id'];
    $id++;
}

shuffle($que_id);

for($i= 0; $i<$num_of_exam_que; $i++){
    $que_query = "SELECT * FROM question_list WHERE que_id = '$que_id[$i]'";
    $que_exists = $conn->query("$que_query");
    $que_row = mysqli_fetch_array($que_exists);
    $que_type = $que_row['que_type'];
    $correct_option = $que_row['correct_option'];
    $correct_answer = $que_row['correct_answer'];
    $set_query = "INSERT INTO candidate_ans (candidate_id,user_id,que_id,que_type,correct_option,correct_answer) VALUES ('".$candidate_id."', '".$candidate_user_id."', '".$que_id[$i]."', '".$que_type."', '".$correct_option."', '".$correct_answer."')";
    $conn->query("$set_query");
}

?>