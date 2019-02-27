<?php
    require "dbConnector.php";
    if (isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $check_user ="SELECT * FROM user WHERE user_name = '$username' AND password = '$password'";
        $result = $conn->query($check_user);
        $count = mysqli_num_rows($result);
        if ($count == 1){
            session_start();
            $check_user_query = "SELECT * FROM user WHERE user_name = '$username' AND password = '$password'";
            $check_user = $conn->query($check_user_query);
            $check_user_row =mysqli_fetch_array($check_user);
            $_SESSION['username']=$username;
            $_SESSION['userid']=$check_user_row['user_id'];
            $_SESSION['usertype']=$check_user_row['user_type'];
            $_SESSION['fullname']=$check_user_row['full_name'];
            $_SESSION['email']=$check_user_row['email'];

            if($check_user_row['user_type'] == "academic admin") {
                echo "<script type='text/javascript'>location.href='academic_admin/academicAdminDashboard.php'</script>";
            }
            else if($check_user_row['user_type'] == "exam coordinator") {
                echo "<script type='text/javascript'>location.href='exam_coordinator/coOrdinatorDashboard.php'</script>";
            }
            else if($check_user_row['user_type'] == "question setter") {
                echo "<script type='text/javascript'>location.href='question_setter/queSetterDashboard.php'</script>";
            }
            else{
                echo "<script>location.href='student/studentDashboard.php'</script>";
            }
        }
        else
            {
                echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
            }
    }
?>