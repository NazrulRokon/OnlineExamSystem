<?php
/**
 * Created by PhpStorm.
 * User: RokonNazrul
 * Date: 4/29/2018
 * Time: 9:03 PM
 */
require "dbConnector.php";
$user_query = "SELECT * FROM user WHERE user_id = '$user_id'";
$user_result = $conn->query($user_query);
$user_row = mysqli_fetch_array($user_result);
$first_name = $user_row['first_name'];
$last_name = $user_row['last_name'];
$email = $user_row['email'];
$user_type = $user_row['user_type'];


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
$dist = $address_row['district'];
$div = $address_row['division'];
$zip = $address_row['zip'];
?>