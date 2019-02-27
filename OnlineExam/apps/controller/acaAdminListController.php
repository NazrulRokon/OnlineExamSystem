<?php
/**
 * Created by PhpStorm.
 * User: RokonNazrul
 * Date: 5/2/2018
 * Time: 7:13 PM
 */
require "acaAdminController.php";

if (isset($_GET['delete'])) {
    $co_user_id = $_GET['delete'];
    $delete_coordinator = "DELETE FROM co_ordinator WHERE user_id = '$co_user_id'";
    $conn->query("$delete_coordinator");
    $delete_address = "DELETE FROM address WHERE user_id = '$co_user_id'";
    $conn->query("$delete_address");
    $delete_personal_info = "DELETE FROM personal_info WHERE user_id = '$co_user_id'";
    $conn->query("$delete_personal_info");
    echo "<script type='text/javascript'>location.href='../../academic_admin/coOrdinatorList.php'</script>";
}


?>