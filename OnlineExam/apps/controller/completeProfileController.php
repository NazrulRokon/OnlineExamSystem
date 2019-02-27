<?php
/**
 * Created by PhpStorm.
 * User: RokonNazrul
 * Date: 5/1/2018
 * Time: 5:38 PM
 */

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

    $personal_query = "INSERT INTO personal_info(user_id,portal_id,dob,gender,bloodgroup,nationality,national_id,religion,phone_no,emerg_contact,social_net_id,alt_email) VALUES ('" . $user_id . "', '" . $portal_id . "', '" . $dob . "','" . $gender . "', '" . $blood_group . "', '" . $nationality . "', '" . $national_id . "', '" . $religion . "', '" . $phone_no . "', '" . $emerg_contact . "', '" . $social_net_id . "', '" . $alt_email . "')";
    $conn->query("$personal_query");

    $aca_name = $_POST['academicName'];
    $aca_id = $_POST['academicId'];
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

    $address_query = "INSERT INTO address(user_id, portal_id, area,road, PO, PS, district, division, zip) VALUES ('".$user_id."', '".$portal_id."', '".$area."','".$road."', '".$post_office."', '".$police_station."', '".$district."', '".$division."', '".$zip."')";
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