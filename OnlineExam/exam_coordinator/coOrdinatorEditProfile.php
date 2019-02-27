<?php
require "../apps/controller/coOrdinatorController.php";
require "../apps/controller/inCompleteProfileChecker.php";
require "../apps/controller/editProfileController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>::..Edit Profile|Coordinator..::</title>
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
                            <a class="dropdown-item bg-secondary text-light text-center" href="academicAdminProfile.php"><i class="fa fa-user-circle"></i> Profile</a>
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
if($incomplete_profile)
{echo '<div class="row w-100 mx-auto">
                <div class="col-lg-10 mx-auto mt-3 text-center">
                    <p class="fa-2x">
                        You have not complete your yet
                        <a href="coOrdinatorCompleteProfile.php" class="btn btn-success px-3 py-2 font-weight-bold" id="createPortal">Click Here</a>
                        to complete your profile.
                    </p>
                </div>
            </div>';}
?>
<div class="row w-100 m-auto" >
    <div class="card col-lg-2 border-0 my-4 py-4 px-0 mx-auto" style="background-color: #282828;">
        <img class="card-img-top rounded-circle img-thumbnail w-75 m-auto" alt="" src="../assets/img/profile.png">
        <div class="card-text text-light text-center mt-4">
            <b style="font-size: 18px;" id="COFullName2"><?php echo " ".$fullname; ?></b>
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
    <form action="" method="post" class="col-lg-9 float-left col px-5 py-2 main mr-5 my-4 border rounded"  style="background-color:#f5f5f5;">
        <div class="page-header text-center" >
            <h3 class="mt-3">Edit profile</h3>
        </div>
        <p class="lead text-center">Please edit your profile by giving your correct Information</p>
        <hr>
        <p class="lead"><b class="text-success">Note :</b> Star ( <span class="text-danger font-weight-bold">*</span> ) sign denotes mandetory fields.</p>
        <h4 class="mt-4">Personal details</h4>
        <hr class="bg-info">
        <div class="row my-2">
            <div class="col-lg-6">
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputDOB" class="col-sm-5 col-form-label">Date of Birth<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <input type="date" class="date form-control" name="dob" id="inputDOB" required>
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputGender" class="col-sm-5 col-form-label">Gender<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <select class="form-control" id="inputGender" name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputBlood" class="col-sm-5 col-form-label">Blood Group</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="bloodGroup" id="inputBloodGroup">
                            <option value="A+ve">A+ve</option>
                            <option value="A-ve">A-ve</option>
                            <option value="B+ve" selected>B+ve</option>
                            <option value="B-ve">B-ve</option>
                            <option value="AB+ve">AB+ve</option>
                            <option value="AB-ve">AB-ve</option>
                            <option value="O+ve">O+ve</option>
                            <option value="O-ve">O-ve</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputNationality" class="col-sm-5 col-form-label">Nationality</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputNationality" name="nationality" placeholder="">
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputNationalId" class="col-sm-5 col-form-label">National ID<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputNationalId" name="nationalId" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputReligion" class="col-sm-5 col-form-label">Religion</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputReligion" name="religion" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form col-lg-6">
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputPhone" class="col-sm-5 col-form-label">Phone No<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputPhone" name="phoneNo" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputEmergContact" class="col-sm-5 col-form-label">Emergency Contact</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputEmergContact" name="emergContact" placeholder="">
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputSocialId" class="col-sm-5 col-form-label">Social Network ID</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputSocialId" name="socialNetId" placeholder="">
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputAltEmail" class="col-sm-5 col-form-label">Alternative E-mail</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="inputAltEmail" name="email" placeholder="">
                    </div>
                </div>
            </div>
        </div>
        <h4 class="mt-5">Academic Info</h4>
        <hr class="bg-info">
        <div class="row my-2">
            <div class="col-lg-6">
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputAcademicName" class="col-sm-5 col-form-label">Academic Name<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputAcademicName" name="academicName" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputAcademicID" class="col-sm-5 col-form-label">ID/Roll No<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputAcademicID" name="academicId" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputFaculty" class="col-sm-5 col-form-label">Faculty</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputFaculty" name="faculty" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form col-lg-6">
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputDepartment" class="col-sm-5 col-form-label">Department<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputDepartment" name="department" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputDesignation" class="col-sm-5 col-form-label">Designation<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <select class="form-control" id="inputDesignation" name="designation" required>
                            <option value="proffessor">Proffessor</option>
                            <option value="Ass. Proffessor">Ass. Proffessor</option>
                            <option value="Sr. Lecturer">Sr. Lecturer</option>
                            <option value="Lecturer">Lecturer</option>
                            <option value="Jr. Lecturer">Jr. Lecturer</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="mt-5">Address</h4>
        <hr class="bg-info">
        <div class="row my-2">
            <div class="col-lg-6">
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputArea" class="col-sm-5 col-form-label">Area<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputArea" name="area" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputRoad" class="col-sm-5 col-form-label">Road No<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputRoad" name="road" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputPO" class="col-sm-5 col-form-label">Post Office</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputPO" name="PO" placeholder="">
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputPS" class="col-sm-5 col-form-label">Police Station<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputPS" name="PS" placeholder="" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputDistrict" class="col-sm-5 col-form-label">District/City<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputDistrict" name="district" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputDivision" class="col-sm-5 col-form-label">Divission</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputDivision" name="division" placeholder="">
                    </div>
                </div>
                <div class="form-group row mt-3 mx-auto">
                    <label for="inputZIP" class="col-sm-5 col-form-label">ZIP Code<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputZIP" name="zip" placeholder="" required>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row float-right">
            <div class="text-center mb-4 mr-2">
                <button type="reset" class="btn btn-danger mx-auto mt-3 px-3 py-2 rounded" id="ResetPersonalInfo"><i class="fa fa-refresh"></i> Reset</button>
                <button type="submit" class="btn btn-success mx-auto mt-3 px-3 py-2 rounded" id="compltProfileSubmit" name="submit"><i class="fa fa-check"></i> Submit</button>
            </div>
        </div>
    </form>
</div>
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
<script type="text/javascript">
    var inputDOBVal = "<?php echo $dob ?>";
    $("#inputDOB").ready(function(){
        $('#inputDOB').val(inputDOBVal);
    });
    $("#inputDOB").click(function(){
        $('#inputDOB').val('');
    });
    $("#inputDOB").blur(function(){
        $('#inputDOB').val($(this).val());
    });

    var inputGenderVal = "<?php echo $gender ?>";
    $("#inputGender").ready(function(){
        $('#inputGender').val(inputGenderVal);
    });
    $("#inputGender").click(function(){
        $('#inputGender').val('');
    });
    $("#inputGender").blur(function(){
        $('#inputGender').val($(this).val());
    });

    var inputBloodGroupVal = "<?php echo $blood_group ?>";
    $("#inputBloodGroup").ready(function(){
        $('#inputBloodGroup').val(inputBloodGroupVal);
    });
    $("#inputBloodGroup").blur(function(){
        $('#inputBloodGroup').val($(this).val());
    });

    var inputNationalityVal = "<?php echo $nationality ?>";
    $("#inputNationality").ready(function(){
        $('#inputNationality').val(inputNationalityVal);
    });
    $("#inputNationality").click(function(){
        $('#inputNationality').val('');
    });
    $("#inputNationality").blur(function(){
        $('#inputNationality').val($(this).val());
    });

    var inputNationalIdVal = "<?php echo $nationality ?>";
    $("#inputNationalId").ready(function(){
        $('#inputNationalId').val(inputNationalIdVal);
    });
    $("#inputNationalId").click(function(){
        $('#inputNationalId').val('');
    });
    $("#inputNationalId").blur(function(){
        $('#inputNationalId').val($(this).val());
    });

    var inputNationalIdVal = "<?php echo $national_id ?>";
    $("#inputNationalId").ready(function(){
        $('#inputNationalId').val(inputNationalIdVal);
    });
    $("#inputNationalId").click(function(){
        $('#inputNationalId').val('');
    });
    $("#inputNationalId").blur(function(){
        $('#inputNationalId').val($(this).val());
    });

    var inputReligionVal = "<?php echo $religion ?>";
    $("#inputReligion").ready(function(){
        $('#inputReligion').val(inputReligionVal);
    });
    $("#inputReligion").click(function(){
        $('#inputReligion').val('');
    });
    $("#inputReligion").blur(function(){
        $('#inputReligion').val($(this).val());
    });

    var inputPhoneVal = "<?php echo $phone_no ?>";
    $("#inputPhone").ready(function(){
        $('#inputPhone').val(inputPhoneVal);
    });
    $("#inputPhone").click(function(){
        $('#inputPhone').val('');
    });
    $("#inputPhone").blur(function(){
        $('#inputPhone').val($(this).val());
    });


    var inputEmergContactVal = "<?php echo $emerg_contact ?>";
    $("#inputEmergContact").ready(function(){
        $('#inputEmergContact').val(inputEmergContactVal);
    });
    $("#inputEmergContact").click(function(){
        $('#inputEmergContact').val('');
    });
    $("#inputEmergContact").blur(function(){
        $('#inputEmergContact').val($(this).val());
    });

    var inputSocialIdVal = "<?php echo $social_net_id ?>";
    $("#inputSocialId").ready(function(){
        $('#inputSocialId').val(inputSocialIdVal);
    });
    $("#inputSocialId").click(function(){
        $('#inputSocialId').val('');
    });
    $("#inputSocialId").blur(function(){
        $('#inputSocialId').val($(this).val());
    });

    var inputSocialIdVal = "<?php echo $social_net_id ?>";
    $("#inputSocialId").ready(function(){
        $('#inputSocialId').val(inputSocialIdVal);
    });
    $("#inputSocialId").click(function(){
        $('#inputSocialId').val('');
    });
    $("#inputSocialId").blur(function(){
        $('#inputSocialId').val($(this).val());
    });

    var inputAltEmailVal = "<?php echo $alt_email ?>";
    $("#inputAltEmail").ready(function(){
        $('#inputAltEmail').val(inputAltEmailVal);
    });
    $("#inputAltEmail").click(function(){
        $('#inputAltEmail').val('');
    });
    $("#inputAltEmail").blur(function(){
        $('#inputAltEmail').val($(this).val());
    });

    var inputAcademicIDVal = "<?php echo $aca_id ?>";
    $("#inputAcademicID").ready(function(){
        $('#inputAcademicID').val(inputAcademicIDVal);
    });
    $("#inputAcademicID").click(function(){
        $('#inputAcademicID').val('');
    });
    $("#inputAcademicID").blur(function(){
        $('#inputAcademicID').val($(this).val());
    });

    var inputAcademicNameVal = "<?php echo $aca_name ?>";
    $("#inputAcademicName").ready(function(){
        $('#inputAcademicName').val(inputAcademicNameVal);
    });
    $("#inputAcademicName").click(function(){
        $('#inputAcademicName').val('');
    });
    $("#inputAcademicName").blur(function(){
        $('#inputAcademicName').val($(this).val());
    });

    var inputFacultyVal = "<?php echo $faculty ?>";
    $("#inputFaculty").ready(function(){
        $('#inputFaculty').val(inputFacultyVal);
    });
    $("#inputFaculty").click(function(){
        $('#inputFaculty').val('');
    });
    $("#inputFaculty").blur(function(){
        $('#inputFaculty').val($(this).val());
    });

    var inputDepartmentVal = "<?php echo $department ?>";
    $("#inputDepartment").ready(function(){
        $('#inputDepartment').val(inputDepartmentVal);
    });
    $("#inputDepartment").click(function(){
        $('#inputDepartment').val('');
    });
    $("#inputDepartment").blur(function(){
        $('#inputDepartment').val($(this).val());
    });

    var inputDesignationVal = "<?php echo $designation ?>";
    $("#inputDesignation").ready(function(){
        $('#inputDesignation').val(inputDesignationVal);
    });

    $("#inputDesignation").blur(function(){
        $('#inputDesignation').val($(this).val());
    });

    var inputAreaVal = "<?php echo $area ?>";
    $("#inputArea").ready(function(){
        $('#inputArea').val(inputAreaVal);
    });
    $("#inputArea").click(function(){
        $('#inputArea').val('');
    });
    $("#inputArea").blur(function(){
        $('#inputArea').val($(this).val());
    });

    var inputRoadVal = "<?php echo $road ?>";
    $("#inputRoad").ready(function(){
        $('#inputRoad').val(inputRoadVal);
    });
    $("#inputRoad").click(function(){
        $('#inputRoad').val('');
    });
    $("#inputRoad").blur(function(){
        $('#inputRoad').val($(this).val());
    });

    var inputPOVal = "<?php echo $PO ?>";
    $("#inputPO").ready(function(){
        $('#inputPO').val(inputPOVal);
    });
    $("#inputPO").click(function(){
        $('#inputPO').val('');
    });
    $("#inputPO").blur(function(){
        $('#inputPO').val($(this).val());
    });

    var inputPSVal = "<?php echo $PS ?>";
    $("#inputPS").ready(function(){
        $('#inputPS').val(inputPSVal);
    });
    $("#inputPS").click(function(){
        $('#inputPS').val('');
    });
    $("#inputPS").blur(function(){
        $('#inputPS').val($(this).val());
    });

    var inputDistrictVal = "<?php echo $district ?>";
    $("#inputDistrict").ready(function(){
        $('#inputDistrict').val(inputDistrictVal);
    });
    $("#inputDistrict").click(function(){
        $('#inputDistrict').val('');
    });
    $("#inputDistrict").blur(function(){
        $('#inputDistrict').val($(this).val());
    });

    var inputDivisionVal = "<?php echo $division ?>";
    $("#inputDivision").ready(function(){
        $('#inputDivision').val(inputDivisionVal);
    });
    $("#inputDivision").click(function(){
        $('#inputDivision').val('');
    });
    $("#inputDivision").blur(function(){
        $('#inputDivision').val($(this).val());
    });

    var inputZIPVal = "<?php echo $zip ?>";
    $("#inputZIP").ready(function(){
        $('#inputZIP').val(inputZIPVal);
    });
    $("#inputZIP").click(function(){
        $('#inputZIP').val('');
    });
    $("#inputZIP").blur(function(){
        $('#inputZIP').val($(this).val());
    });
</script>
</html>
