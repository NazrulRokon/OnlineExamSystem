<?php
require "queSetterController.php";
if(isset($_POST['set_question'])) {
    $que_topic = $_POST['que_topic'];
    $que_type = $_POST['que_type'];
    $que_image = $_POST['que_image'];
    $que_text = $_POST['que_text'];
    $que_option_A = $_POST['que_option_A'];
    $que_option_B = $_POST['que_option_B'];
    $que_option_C = $_POST['que_option_C'];
    $que_option_D = $_POST['que_option_D'];
    $correct_option = $_POST['correct_option'];
    $correct_answer = $_POST['correct_answer'];

    $query = "SELECT * FROM exam_pools WHERE que_setter_email = '$email'";
    $pool_id_exists = $conn->query("$query");
    $pool_row = mysqli_fetch_array($pool_id_exists);
    $pool_id = $pool_row['pool_id'];
    $portal_id = $pool_row['portal_id'];


    $insert = "INSERT INTO question_list(pool_id,portal_id,que_topic,que_type,que_text,A,B,C,D,correct_option,correct_answer) VALUES ('".$pool_id."', '".$portal_id."', '".$que_topic."','".$que_type."', '".$que_text."', '".$que_option_A."', '".$que_option_B."', '".$que_option_C."', '".$que_option_D."', '".$correct_option."', '".$correct_answer."')";
    $conn->query($insert);

    header("location:setQuestions.php");
}
mysqli_close($conn);
?>