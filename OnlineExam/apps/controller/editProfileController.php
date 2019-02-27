<?php
/**
 * Created by PhpStorm.
 * User: RokonNazrul
 * Date: 4/29/2018
 * Time: 9:03 PM
 */
require "dbConnector.php";
$query = "SELECT user_type FROM user WHERE user_id = '$user_id'";
$query_result = $conn->query($query);
$query_row = mysqli_fetch_array($query_result);
$user_type = $query_row['user_type'];

$personal_info_query="SELECT * FROM personal_info WHERE user_id = '$user_id'";
$personal_info_result = $conn->query($personal_info_query);
$personal_info_row = mysqli_fetch_array($personal_info_result);

$dob = $personal_info_row['dob'];
$gender = $personal_info_row['gender'];
$blood_group = $personal_info_row['bloodgroup'];
$nationality = $personal_info_row['nationality'];
$national_id = $personal_info_row['national_id'];
$religion = $personal_info_row['religion'];
$phone_no = $personal_info_row['phone_no'];
$emerg_contact = $personal_info_row['emerg_contact'];
$social_net_id = $personal_info_row['social_net_id'];
$alt_email = $personal_info_row['alt_email'];

if($user_type == 'academic admin')
    $aca_info_query="SELECT * FROM academic_admin WHERE user_id = '$user_id'";
if($user_type == 'exam coordinator')
    $aca_info_query="SELECT * FROM co_ordinator WHERE user_id = '$user_id'";
if($user_type == 'question setter')
    $aca_info_query="SELECT * FROM que_setter WHERE user_id = '$user_id'";
if($user_type == 'student')
    $aca_info_query="SELECT * FROM student WHERE user_id = '$user_id'";

$aca_info_result = $conn->query($aca_info_query);
$aca_info_row = mysqli_fetch_array($aca_info_result);

$aca_id = $aca_info_row['academic_id'];
$aca_name = $aca_info_row['academic_name'];
$faculty = $aca_info_row['faculty'];
$department = $aca_info_row['department'];
$designation = $aca_info_row['designation'];

$address_query="SELECT * FROM address WHERE user_id = '$user_id'";
$address_result = $conn->query($address_query);
$address_row = mysqli_fetch_array($address_result);

$area = $address_row['area'];
$road = $address_row['road'];
$PO = $address_row['PO'];
$PS = $address_row['PS'];
$district = $address_row['district'];
$division = $address_row['division'];
$zip = $address_row['zip'];

if(isset($_POST['submit'])) {
    $query = "SELECT user_type FROM user WHERE user_id = '$user_id'";
    $query_result = $conn->query($query);
    $query_row = mysqli_fetch_array($query_result);
    $user_type = $query_row['user_type'];

    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['bloodGroup'];
    $nationality = $_POST['nationality'];
    $national_id = $_POST['nationalId'];
    $religion = $_POST['religion'];
    $phone_no = $_POST['phoneNo'];
    $emerg_contact = $_POST['emergContact'];
    $social_net_id = $_POST['socialNetId'];
    $alt_email = $_POST['email'];

    $personal_query = "UPDATE personal_info SET dob='$dob',gender='$gender',bloodgroup='$blood_group',nationality='$nationality',national_id='$national_id',religion='$religion',phone_no='$phone_no',emerg_contact='$emerg_contact',social_net_id='$social_net_id',alt_email='$alt_email'";
    $conn->query("$personal_query");

    $aca_id = $_POST['academicId'];
    $aca_name = $_POST['academicName'];
    $faculty = $_POST['faculty'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];

    if($user_type == 'academic admin')
        $academic_query = "UPDATE academic_admin SET academic_id='$aca_id', academic_name='$aca_name', faculty='$faculty', department='$department', designation='$designation' WHERE user_id='$user_id'";

    if($user_type == 'exam coordinator')
        $academic_query = "UPDATE co_ordinator SET academic_id='$aca_id', academic_name='$aca_name', faculty='$faculty', department='$department', designation='$designation' WHERE user_id='$user_id'";

    if($user_type == 'question setter')
        $academic_query = "UPDATE que_setter SET academic_id='$aca_id', academic_name='$aca_name', faculty='$faculty', department='$department', designation='$designation' WHERE user_id='$user_id'";

    if($user_type == 'student') {
        $designation = "student";
        $academic_query = "UPDATE student SET academic_id='$aca_id', academic_name='$aca_name', faculty='$faculty', department='$department', designation='$designation' WHERE user_id='$user_id'";
    }

    $conn->query("$academic_query");

    $area = $_POST['area'];
    $road = $_POST['road'];
    $post_office = $_POST['PO'];
    $police_station = $_POST['PS'];
    $district = $_POST['district'];
    $division = $_POST['division'];
    $zip = $_POST['zip'];

    $address_query = "UPDATE address SET area='$area',road='$road',PO='$post_office',PS='$police_station',district='$district',division='$division',zip='$zip'";
    $conn->query("$address_query");

    if($user_type == 'academic admin')
        header("location:academicAdminProfile.php");

    if($user_type == 'exam coordinator')
        header("location:coOrdinatorProfile.php");

    if($user_type == 'question setter')
        header("location:queSetterProfile.php");

    if($user_type == 'student')
        header("location:studentProfile.php");
}

?>