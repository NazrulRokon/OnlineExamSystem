<?php
session_start();
session_destroy();
header('location:../../admins/adminLogin.php');
?>