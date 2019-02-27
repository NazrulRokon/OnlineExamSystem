<?php
require "../apps/controller/coOrdinatorController.php";
require "../apps/controller/inCompleteProfileChecker.php";
require "../apps/controller/viewProfileController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>::.. Profile|Coordinator..::</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/home.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/custom-all.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/custom-footer.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/scrolltop.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/fa-svg-with-js.css">
    <link type="text/css" rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/profile.css">

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="progress-container bg-light">
    <div class="progress-bar" id="myBar"></div>
</div>
<div class="row w-100 m-auto main-nav">
    <div class="col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler bg-success" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand pt-0 mt-0" data-toggle="tooltip" data-placement="right" title="Back to home" href="coOrdinatorDashboard.php">
                <img src="../assets/img/s1.png" style="height: 40px;" class="p-0 m-0">
                <span class="text-success font-weight-bold" style="font-size: 24px">mart</span><span class="text-danger" style="font-size: 22px">Exam</span>
            </a>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../examPools.php">Exam-pools</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Question-bank</a>
                            <div class="dropdown-menu bg-dark p-2" aria-labelledby="dropdownMenuButton" id="">
                                <a class="dropdown-item bg-dark text-light text-center" href="#" onClick="">Finished Exam</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item bg-dark text-light text-center" href="#" onClick="">Quetion List</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../features.php">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../faq.php">FAQ</a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <div class="btn-group dropdown" id="examPoolDropdown">
                        <button class="btn dropdown-toggle bg-transparent text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"> </i><span id="fullName"><?php echo " ".$fullname; ?></span>
                        </button>
                        <div class="dropdown-menu m-2 bg-secondary" aria-labelledby="dropdownMenuButton" id="examPoolDropmenu">
                            <a class="dropdown-item bg-secondary text-light text-center" href="coOrdinatorProfile.php"><i class="fa fa-user-circle"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item bg-secondary text-light text-center" href="../apps/controller/logoutController.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<?php
      if($co_count == 0){
            echo '<div class="container rounded px-0 text-center my-5" id="createPortalMsg" style="height: 500px;">
                <h5 class="fa-2x">You have not added into any portal yet</h5>
                <p class="fa-2x">Please contact with your academic Administrator.</p>
            </div>';
            }
            else{
                if($incomplete_profile)
                {
                    echo '<div class="row w-100 mx-auto">
                        <div class="col-lg-10 mx-auto mt-3 text-center">
                            <p class="fa-2x">
                                You have not complete your yet
                                <a href="coOrdinatorCompleteProfile.php" class="btn btn-success px-3 py-2 font-weight-bold" id="createPortal">Click Here</a>
                                to complete your profile.
                            </p>
                        </div>
                    </div>';
                }
                echo '
        <div class="row w-100 m-auto" >
            <div class="card col-lg-2 border-0 my-4 py-4 px-0 mx-auto" style="background-color: #282828;">
                <img class="card-img-top rounded-circle img-thumbnail w-75 m-auto" alt="" src="../assets/img/profile.png">
                <div class="card-text text-light text-center mt-4">
                    <b style="font-size: 18px;" id="COFullName2">'.$fullname.'</b>
                    <p>Coordinator</p>
                </div>
                <hr class="bg-secondary m-0">
                <div class="card-body px-0 mt-4">
                    <div class="sidenav col-lg-10 m-auto text-center px-0">
                        <a class="px-0" href="coOrdinatorDashboard.php"><i class="fa fa-dashboard m-0"></i> Dashboard</a>
                        <a class="px-0" href="createPool.php"><i class="fa fa-plus-square m-0"></i> Create Pool</a>
                        <a class="px-0" href="coOrdinatorProfile.php"><i class="fa fa-user-circle m-0"></i> My profile</a>
                        <a class="px-0" href="coOrdinatorEditProfile.php"><i class="fa fa-edit m-0"></i> Edit profile</a>
                        <a class="px-0" href="coOrdinatorStudentList.php"><i class="fa fa-list m-0"></i> Student List</a>
                        <a class="px-0" href="#" style="border-bottom: 1px #666666 solid;"  data-toggle="modal" data-target="#changePassword"><i class="fa fa-refresh m-0"></i> Change Password</a>
                        <div class="modal fade" id="changePassword">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Change Password</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
        
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p class="mb-lg-4 lead mx-0">Please enter correct input to reset password.</p>
                                        <div class="form row m-auto">
                                            <div class="col-lg-10 m-auto">
                                                <div class="form-group row mx-auto">
                                                    <label for="currentPassword" class="col-lg-6 col-form-label text-left">Current Password</label>
                                                    <input type="password" class="col-lg-6 form-control" id="currentPassword">
                                                </div>
                                                <div class="form-group row mx-0">
                                                    <label for="newPassword" class="col-lg-6 col-form-label text-left">New Password</label>
                                                    <input type="password" class="col-lg-6 form-control m-auto" id="newPassword">
                                                </div>
                                                <div class="form-group row mx-0">
                                                    <label for="confirmNewPassword" class="col-lg-6 col-form-label text-left">Confirm Password</label>
                                                    <input type="password" class="col-lg-6 form-control m-auto" id="confirmNewPassword">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->
            <div class="col-lg-9 float-left col px-5 py-2 main mr-5 my-4 border rounded"  style="background-color:#f5f5f5;">
                <div class="page-header text-center" >
                    <h3 class="mt-3"><span class="text-success">'.$fullname.'</span>\'s profile</h3>
                </div>
                <p class="lead text-center">Daffodil International University</p>
                <hr>
                <h4 class="mt-4">Personal details</h4>
                <hr class="bg-info">
                <div class="row my-3">
                    <div class="col-lg-6">
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Fist Name</div>
                            <div class="col-sm-6">: <span id="firstName">'.$first_name.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Last Name</div>
                            <div class="col-sm-6">: <span id="lastName">'.$last_name.'</span></span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Date of Birth</div>
                            <div class="col-sm-6">: <span id="DOB">'.$dob.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Gender</div>
                            <div class="col-sm-6">: <span id="gender">'.$gender.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Blood Group</div>
                            <div class="col-sm-6">: <span id="bloodGrp">'.$blood_group.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Nationality</div>
                            <div class="col-sm-6">: <span id="nationality">'.$nationality.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">National ID</div>
                            <div class="col-sm-6">: <span id="nationalId">'.$national_id.'</span></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Religion</div>
                            <div class="col-sm-6">: <span id="religion">'.$religion.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Phone No.</div>
                            <div class="col-sm-6">: <span id="phone">'.$phone_no.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Emergency Contact No</div>
                            <div class="col-sm-6">: <span id="emergPhone">'.$emerg_contact.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Social Network ID</div>
                            <div class="col-sm-6">: <span id="socialId">'.$social_net_id.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">E-mail</div>
                            <div class="col-sm-6">: <span id="email">'.$email.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Alternative E-mail</div>
                            <div class="col-sm-6">: <span id="altEmail">'.$alt_email.'</span></div>
                        </div>
                    </div>
                </div>
                <h4 class="mt-5">Academic Info</h4>
                <hr class="bg-info">
                <div class="row my-3">
                    <div class="col-lg-12">
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-4 text-secondary font-weight-bold">Academic Name</div>
                            <div class="col-sm-8">: <span id="academicName">'.$aca_name.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-4 text-secondary font-weight-bold">ID/Roll No</div>
                            <div class="col-sm-8">: <span id="academicId">'.$aca_id.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-4 text-secondary font-weight-bold">Faculty</div>
                            <div class="col-sm-8">: <span id="faculty">'.$faculty.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-4 text-secondary font-weight-bold">Department</div>
                            <div class="col-sm-8">: <span id="department">'.$department.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-4 text-secondary font-weight-bold">Designation</div>
                            <div class="col-sm-8">: <span id="designation">'.$designation.'</span></div>
                        </div>
                    </div>
                </div>
                <h4 class="mt-5">Address</h4>
                <hr class="bg-info">
                <div class="row my-3">
                    <div class="col-lg-6 mb-5">
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Area</div>
                            <div class="col-sm-6">: <span id="acaAdminPresentArea">'.$area.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Road No</div>
                            <div class="col-sm-6">: <span id="acaAdminPresentRoad">'.$road.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Post Office</div>
                            <div class="col-sm-6">: <span id="acaAdminPresentPO">'.$PO.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Police Station</div>
                            <div class="col-sm-6">: <span id="acaAdminPresentPS">'.$PS.'</span></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">District/City</div>
                            <div class="col-sm-6">: <span id="acaAdminDist">'.$dist.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">Divission</div>
                            <div class="col-sm-6">: <span id="acaAdminPresentDivission">'.$div.'</span></div>
                        </div>
                        <div class="row mt-3 mx-auto">
                            <div class="col-sm-6 text-secondary font-weight-bold">ZIP Code</div>
                            <div class="col-sm-6">: <span id="acaAdminPresentZIP">'.$zip.'</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
?>
<div class="row w-100 mx-auto footer">
    <div class="row mx-auto mt-4 w-100">
        <div class="col-sm-6 mt-2">
            <ul class="navbar mx-auto my-2 w-75">
                <li class=" nav nav-item"><a class="foot-nav text-secondary" href="../index.php">Home</a></li>
                <li class=" nav nav-item"><a class="foot-nav text-secondary" href="../features.php">Features</a></li>
                <li class=" nav nav-item"><a class="foot-nav text-secondary" href="../solutions.php">Solution</a></li>
                <li class=" nav nav-item"><a class="foot-nav text-secondary" href="../about.php">About</a></li>
                <li class=" nav nav-item"><a class="foot-nav text-secondary" href="../contact.php">Contact</a></li>
                <li class=" nav nav-item"><a class="foot-nav text-secondary" href="../faq.php">FAQ</a></li>
            </ul>
            <hr width="80%" class="my-0" style="background-color: dimgray">
        </div>
        <div class="col-sm-6 text-center mt-2">
            <ul class="navbar mx-auto mb-0 w-75">
                <li class=" nav nav-item"><p class="text-secondary p-0 m-0 font-weight-bold">Fllow us on :</p></li>
                <li class=" nav nav-item"><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                <li class=" nav nav-item"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                <li class=" nav nav-item"><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></li>
                <li class=" nav nav-item"><a href="#"><i class="fa fa-yahoo fa-2x"></i></a></li>
                <li class=" nav nav-item"><a href="#"><i class="fa fa-skype fa-2x"></i></a></li>
                <li class=" nav nav-item"><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                <li  class=" nav nav-item">
                    <a href="#"><span class="fa-layers fa-fw"><i class="fa fa-envelope fa-2x"></i>
									<span class="fa-layers-counter fa-2x" style="background:Tomato">1,419</span></span></a>
                </li>
            </ul>
            <hr width="80%" class="mt-0" style="background-color: dimgray">
        </div>
    </div>
    <div class="row mx-auto w-100">
        <div class="col-sm-3 m-auto text-center">
            <a href="https://daffodilvarsity.edu.bd/" target="_blank"><img src="../assets/img/Uni-logo.png" class="ml-2" style="width: 50%;"></a>
        </div>
        <div class="col-sm-6 px-0 mb-0">
            <h6 class="text-secondary font-weight-bold text-center mt-">Contact us</h6>
            <p class="text-secondary text-center m-auto pb-3">4/2, Sobhanbag, Mirpur Road, Dhanmondi, Dhaka-1207.<br>
                <b>E-mail:</b> info@daffodilvarsity.edu.bd , <b>Phone:</b> +88 48111639, <b>Fax:</b> 88-02-9131947.</p>
        </div>
        <div class="col-sm-3 text-center m-auto">
            <img src="../assets/img/s1.png" style="height: 40px;" class="p-0 m-0">
            <a class="navbar-brand pt-0 mt-0" data-toggle="tooltip" data-placement="right" title="Back to home" href="index.php">
                <span class="text-success font-weight-bold" style="font-size: 24px">mart</span><span class="text-danger" style="font-size: 22px">Exam</span>
            </a>
        </div>
        <hr width="60%" class="mt-0" style="background-color: dimgray">
    </div>
    <div class="row m-auto w-100">
        <div class="col-sm-6 text-center">
            <p class="text-secondary m-auto pb-3">All right reserved by www.smart-exam.com &copy; 2018</p>
        </div>
        <div class="col-sm-6 text-center">
            <p class="text-secondary m-auto pb-3">@ This site is developed by Ashfaque,Kafi & Nazrul.</p>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="../assets/js/custom-all.js"></script>
<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
<script type="text/javascript" src="../assets/js/scrolltop.js"></script>
<script defer src="../assets/js/fontawesome-all.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/4.7.0/js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
</script>
</html>