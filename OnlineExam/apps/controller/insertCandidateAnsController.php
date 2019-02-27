<?php
//insert.php
$host = "localhost";
$username = "root";
$password = "";
$database = "online_exam_system";

session_start();
$id=$_SESSION['que_no'];
try
{
    $connect = new PDO("mysql:host=$host;dbname=$database",$username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["radio_btn"]))
    {
        $query = "UPDATE candidate_ans SET candidate_opt = :radio_btn WHERE que_no='$id'";
        $statement = $connect->prepare($query);
        $statement->execute(
            array(
                'radio_btn'=>$_POST["radio_btn"]
            )
        );
    }

    if(isset($_POST["answer_txt"]))
    {
        $query = "UPDATE candidate_ans SET candidate_ans = :answer_txt WHERE que_no='$id'";
        $statement = $connect->prepare($query);
        $statement->execute(
            array(
                'answer_txt'=>$_POST["answer_txt"]
            )
        );
    }
}
catch(PDOException $error)
{
    echo $error->getMessage();
}
?>