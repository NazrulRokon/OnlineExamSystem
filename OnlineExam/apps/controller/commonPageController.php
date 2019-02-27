<?php
require "dbConnector.php";
error_reporting(0);
session_start();

if($_SESSION["userid"]==true){
    $fullname = $_SESSION['fullname'];
    if($_SESSION['usertype'] == "academic admin") {
        $content = '<div class="btn-group dropdown" id="examPoolDropdown">
                <button class="btn dropdown-toggle bg-transparent text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user mr-2"> </i><span id="acaAdminFullName">' . $fullname . '</span>
                </button>
                <div class="dropdown-menu m-2 bg-secondary" aria-labelledby="dropdownMenuButton" id="examPoolDropmenu">
                    <a class="dropdown-item bg-secondary text-light text-center" href="academic_admin/academicAdminProfile.php"><i class="fa fa-user-circle"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item bg-secondary text-light text-center" href="academic_admin/academicAdminDashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item bg-secondary text-light text-center" href="apps/controller/logoutController.php"><i class="fa fa-sign-out"></i> Logout</a>
                </div>
            </div>';
    }
    else if($_SESSION['usertype'] == "exam coordinator") {
        $content = '<div class="btn-group dropdown" id="examPoolDropdown">
                <button class="btn dropdown-toggle bg-transparent text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user mr-2"> </i><span id="acaAdminFullName">' . $fullname . '</span>
                </button>
                <div class="dropdown-menu m-2 bg-secondary" aria-labelledby="dropdownMenuButton" id="examPoolDropmenu">
                    <a class="dropdown-item bg-secondary text-light text-center" href="exam_coordinator/coOrdiantorProfile.php"><i class="fa fa-user-circle"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item bg-secondary text-light text-center" href="exam_coordinator/coOrdinatorDashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item bg-secondary text-light text-center" href="apps/controller/logoutController.php"><i class="fa fa-sign-out"></i> Logout</a>
                </div>
            </div>';
    }
    else if($_SESSION['usertype'] == "question setter") {
        $content = '<div class="btn-group dropdown" id="examPoolDropdown">
                <button class="btn dropdown-toggle bg-transparent text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user mr-2"> </i><span id="acaAdminFullName">' . $fullname . '</span>
                </button>
                <div class="dropdown-menu m-2 bg-secondary" aria-labelledby="dropdownMenuButton" id="examPoolDropmenu">
                    <a class="dropdown-item bg-secondary text-light text-center" href="question_setter/queSetterProfile.php"><i class="fa fa-user-circle"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item bg-secondary text-light text-center" href="question_setter/queSetterDashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item bg-secondary text-light text-center" href="apps/controller/logoutController.php"><i class="fa fa-sign-out"></i> Logout</a>
                </div>
            </div>';
    }
    else {
        $content = '<div class="btn-group dropdown" id="examPoolDropdown">
                <button class="btn dropdown-toggle bg-transparent text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user mr-2"> </i><span id="acaAdminFullName">' . $fullname . '</span>
                </button>
                <div class="dropdown-menu m-2 bg-secondary" aria-labelledby="dropdownMenuButton" id="examPoolDropmenu">
                    <a class="dropdown-item bg-secondary text-light text-center" href="student/studentProfile.php"><i class="fa fa-user-circle"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item bg-secondary text-light text-center" href="student/studentDashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item bg-secondary text-light text-center" href="apps/controller/logoutController.php"><i class="fa fa-sign-out"></i> Logout</a>
                </div>
            </div>';
    }
}
else{
    $content = '<button onclick="loginPage()" class="btn btn-outline-success my-2 my-sm-0 mx-2" type="submit"><span class="fa fa-sign-in mr-2"></span>Login</button>
						  <button onclick="registerHomePage()" class="btn btn-outline-info my-2 my-sm-0" type="submit"><span class="fa fa-user-plus mr-1"></span>Register</button>
                          <a href="admins/adminLogin.php" class="btn btn-light my-2 mx-2 px-2 py-1 my-sm-0 rounded-circle" type="submit" title="Admin Login"><span class="fa fa-2x fa-user-secret text-dark m-0"></span></a>';
}
?>