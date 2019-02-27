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
        $count = $statement->rowCount();
        if($count > 0)
        {
            echo "Gender Inserted Successfully!";
        }
        else
        {
            echo 'Not Inserted';
        }
    }
}
catch(PDOException $error)
{
    echo $error->getMessage();
}
?>