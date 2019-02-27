<?php
require "../apps/controller/acaAdminController.php";
require "../apps/controller/inCompleteProfileChecker.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>::..Dashboard|Academic Admin..::</title>
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
                    <a class="navbar-brand pt-0 mt-0" data-toggle="tooltip" data-placement="right" title="Back to home" href="academicAdminDashboard.php">
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
                                    <i class="fa fa-user"> </i><span id="acaAdminFullName"><?php echo " ".$fullname; ?></span>
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
        if($count_portal == 0){
            echo '<div class="container rounded px-0 text-center my-5" id="createPortalMsg" style="height: 500px;">
                    <h5 class="fa-2x">You have not create any portal yet</h5>
                    <a href="createPortal.php" class="btn btn-success px-3 py-2 font-weight-bold" id="createPortal">Click Here</a>
                    <p class="fa-2x">to create your academic portal.</p>
                </div>';}
        else {
            if ($portal_approved == 0) {
                echo '<div class="container rounded px-0 text-center my-5" id="createPortalMsg" style="height: 500px;">
                    <h5 class="fa-2x">Your Portal will be approved soon <br> Please wait till then.</h5>
                </div>';
            } else {
                if ($incomplete_profile) {
                    echo '<div class="row w-100 mx-auto">
                    <div class="col-lg-10 mx-auto mt-3 text-center">
                        <p class="fa-2x">
                            You have not complete your yet
                            <a href="academicAdminCompleteProfile.php" class="btn btn-success px-3 py-2 font-weight-bold" id="createPortal">Click Here</a>
                            to complete your profile.
                        </p>
                    </div>
                </div>';
                }
                echo '<div class="row w-100 m-auto" >
                <div class="card col-lg-2 border-0 my-4 py-4 px-0 mx-auto" style="background-color: #282828;">
                    <img class="card-img-top rounded-circle img-thumbnail w-75 m-auto" alt="" src="../assets/img/profile.png">
                    <div class="card-text text-light text-center mt-4">
                        <b style="font-size: 18px;" id="acaAdminFullName2">' . $fullname . '</b>
                        <p>Academic Admin</p>
                    </div>
                    <hr class="bg-secondary m-0">
                    <div class="card-body px-0 mt-4">
                        <div class="sidenav col-lg-10 m-auto text-center px-0">
                            <a class="px-0" href="academicAdminDashboard.php"><i class="fa fa-dashboard m-0"></i> Dashboard</a>
                            <a class="px-0" href="academicAdminProfile.php"><i class="fa fa-user-circle m-0"></i> My profile</a>
                            <a class="px-0" href="academicAdminEditProfile.php"><i class="fa fa-edit m-0"></i> Edit profile</a>
                            <a class="px-0" href="studentList.php"><i class="fa fa-list m-0"></i> Student List</a>
                            <a class="px-0" href="addCoordinator.php" id="coordinatorList"><i class="fa fa-user-plus m-0"></i>Add Coordinator</a>
                            <a class="px-0" href="coOrdinatorList.php" id="coordinatorList"><i class="fa fa-list m-0"></i> Coordinator List</a>
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
                <div class="col-lg-9 float-left col px-5 py-2 main mr-5 my-4 border rounded" style="background-color:#f5f5f5;">
                    <div class="page-header text-center" >
                        <h3 class="mt-3">Dashboard</h3>
                    </div>
                    <hr class="pb-3">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-12">
                          <div class="card bg-info my-2" style="box-shadow: 1px 1px 10px black;">
                            <div class="card-header text-center py-0">
                                <i class="fa fa-2x fa-group text-light"></i>
                                <span class="ml-3 my-0 py-0 fa-3x text-light">450</span>
                            </div>
                            <div class="card-body text-center py-2">
                              <span class="text-light">Total Students</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                          <div class="card bg-secondary my-2" style="box-shadow: 1px 1px 10px black;">
                            <div class="card-header text-center py-0">
                                <i class="fa fa-2x fa-user-plus text-light"></i>
                                <span class="ml-3 my-0 py-0 fa-3x text-light">300</span>
                            </div>
                            <div class="card-body text-center py-2">
                              <span class="text-light">Total Candidates</span>
                            </div>
                          </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                          <div class="card bg-warning my-2" style="box-shadow: 1px 1px 10px black;">
                            <div class="card-header py-0 text-center">
                                <i class="fa fa-2x fa-book text-light"></i>
                                <span class="ml-3 my-0 py-0 fa-3x text-light">20</span>
                            </div>
                            <div class="card-body text-center py-2">
                              <span class="text-light">Total Exam Pools</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                          <div class="card bg-success my-2" style="box-shadow: 1px 1px 10px black;">
                            <div class="card-header py-0 text-center">
                                <i class="fa fa-2x fa-check text-light"></i>
                                <span class="ml-3 my-0 py-0 fa-3x text-light">15</span>
                            </div>
                            <div class="card-body text-center py-2">
                              <span class="text-light">Exam Completed</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                      </div>
                        <h4 class="mt-5">Academic Portal <small></small></h4>
                        <hr class="bg-info">
                            <table class="table table-bordered mt-4 mb-lg-5" style="box-shadow: 1px 1px 10px gray;">
                              <thead>
                                <tr class="bg-secondary text-center text-light">
                                  <th scope="col">Institute Id</th>
                                  <th scope="col">Institute Name</th>
                                  <th scope="col">Institute Address</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="text-center bg-light">
                                  <td id="examPoolCourseCode">' . $portal_id . '</td>
                                  <td id="examPoolCourseName" class="px-0">' . $institute_name . '</td>
                                  <td><span id="examPoolCO">' . $institute_address . '</span></td>
                                  <td>
                                      <a href="addCoordinator.php" class="btn btn-sm btn-secondary fa fa-user-plus text-light" id="addCoordinator"  data-toggle="tool-tip" title="Add Coordinator"></a>
                                        <div class="modal fade" id="addPoolCO">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <!-- Modal Header -->
                                              <div class="modal-header">
                                                <h4 class="modal-title">Add Co-ordinator</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              </div>
    
                                              <!-- Modal body -->
                                              <div class="modal-body">
                                                <p class="mb-lg-4 lead mx-0">You can add multiple co-ordinator in your portal.<br>Please enter co-ordinator email here</p>
                                                 <div class="form row m-auto">
                                                    <div class="col-lg-11 m-auto">
                                                          <div class="form-group row mx-0">
                                                            <label for="confirmNewPassword" class="col-lg-5 col-form-label text-left">Co-ordinator Email</label>
                                                            <input type="email" class="col-lg-7 form-control m-auto" id="COEmail" placeholder="Enter email address">
                                                          </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <!-- Modal footer -->
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary px-3">Add</button>
                                              </div>
                                            </div>
                                        </div>
                                      </div>
                                      <button class="btn btn-danger fa fa-trash btn-sm" id="examPortalDelete"  data-toggle="modal" data-target="#deleteExamPortal" title="Delete Exam Portal" ></button>
                                        <div class="modal fade" id="deleteExamPortal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <!-- Modal Header -->
                                                  <div class="modal-header">
                                                    <h4 class="modal-title text-success"><small class="text-secondary" id="examPoolCourseName">' . $institute_name . '</small></h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  </div>
    
                                                  <!-- Modal body -->
                                                  <div class="modal-body">
                                                        <p class="text-danger lead">Are you sure to delete your portal ?</p>
                                                  </div>
                                                  <!-- Modal footer -->
                                                  <div class="modal-footer">
                                                      <form action="" method="post">
                                                            <button name="portalDeleteBtn" class="btn btn-danger" id="examPortalDeleteBtn">Delete</button>
                                                      </form>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                  </tr>
                            </tbody>
                        </table>
                        <h4 class="mt-5">Exam List <small></small></h4>
                        <hr class="bg-info">
                        <div class="container rounded px-0" style="box-shadow: 1px 1px 10px gray; margin-bottom: 30px;">
                          <ul class="nav nav-pills mx-auto bg-light border" role="tablist">
                            <li class="nav-item ml-4">
                              <a class="nav-link active rounded-0" data-toggle="pill" href="#New">New</a>
                            </li>
                            <li class="nav-item ml-1">
                              <a class="nav-link rounded-0" data-toggle="pill" href="#upcoming">Upcoming</a>
                            </li>
                            <li class="nav-item ml-1">
                              <a class="nav-link rounded-0" data-toggle="pill" href="#ended">Ended</a>
                            </li>
                          </ul>
                      <div class="tab-content" style="overflow-y: scroll; height: 800px;">
                        <div id="New" class="tab-pane fade in active show px-3">
                            <table class="table table-bordered mt-4 mb-lg-5">
                              <thead>
                                <tr class="bg-secondary text-center text-light">
                                  <th scope="col">Course Code</th>
                                  <th scope="col">Course Name</th>
                                  <th scope="col">Co-ordinator</th>
                                  <th scope="col">Question Setter</th>
                                  <th scope="col">Exam Date</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>';

                $pool_query = "SELECT * FROM exam_pools WHERE portal_id = '$portal_id'";
                $pool_exists = $conn->query("$pool_query");
                $count_pool = mysqli_num_rows($pool_exists);

                $current_date = date("Y-m-d");

                if ($count_pool > 0) {
                    While ($pool_row = mysqli_fetch_array($pool_exists)) {
                        $course_code = $pool_row['course_code'];
                        $course_name = $pool_row['course_name'];
                        $pool_token = $pool_row['pool_token'];
                        $exam_date = $pool_row['exam_date'];
                        $que_setter_email = $pool_row['que_setter_email'];
                        $co_id = $pool_row['co_id'];
                        $pool_id = $pool_row['pool_id'];
                        $pool_approved = $pool_row['approved'];

                        $co_query = "SELECT * FROM co_ordinator WHERE co_id = '$co_id'";
                        $co_exists = $conn->query("$co_query");
                        $co_row = mysqli_fetch_array($co_exists);

                        $co_user_id = $co_row['user_id'];

                        $co_user_query = "SELECT * FROM user WHERE user_id = '$co_user_id'";
                        $co_user_exists = $conn->query("$co_user_query");
                        $co_user_row = mysqli_fetch_array($co_user_exists);

                        $co_email = $co_user_row['email'];
                        $co_full_name = $co_user_row['full_name'];

                        if($current_date < $exam_date && $pool_approved != 1){
                            echo '<tr class="text-center bg-light">
                                  <td id="examPoolCourseCode">' . $course_code . '</td>
                                  <td id="examPoolCourseName">' . $course_name . '</td>
                                  <td><span id="examPoolCO">' . $co_email . '</span></td>
                                   <td><span id="examPoolQS">' . $que_setter_email . '</span> 
                                    <a class="fa fa-edit text-success" href="#" style="text-decoration: none;"  data-toggle="modal" data-target="#editQS"></a>
                                    <div class="modal fade" id="editQS">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <!-- Modal Header -->
                                              <div class="modal-header">
                                                <h4 class="modal-title text-success"><span id="examPoolCourseCode">CSE111</span><small id="examPoolCourseName"> Computer Fundamental </small></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              </div>
    
                                              <!-- Modal body -->
                                              <div class="modal-body">
                                                <p class="mb-lg-4 mx-0">Please enter correct email to add Question Setter.</p>
                                                 <div class="form row m-auto">
                                                    <div class="col-lg-11 m-auto">
                                                          <div class="form-group row mx-auto">
                                                            <label for="inputEditQS" class="col-lg-6 col-form-label text-left">Question Setter Email</label>
                                                            <input type="email" class="col-lg-6 form-control" id="inputEditQS">
                                                          </div>
                                                   </div>
                                                </div>
                                              </div>
                                              <!-- Modal footer -->
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="editQSSaveBtn">Save changes</button>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                   <td><span id="examPoolDate">' . $exam_date . '</span>
                                    <a class="fa fa-edit text-success" href="#" style="text-decoration: none;"  data-toggle="modal" data-target="#editExamDate"></a>
                                    <div class="modal fade" id="editExamDate">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <!-- Modal Header -->
                                              <div class="modal-header">
                                                <h4 class="modal-title text-success"><span id="examPoolCourseCode">CSE111</span><small id="examPoolCourseName"> Computer Fundamental </small></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              </div>
    
                                              <!-- Modal body -->
                                              <div class="modal-body">
                                                <p class="mb-lg-4 mx-0">Please enter correct date.</p>
                                                 <div class="form row m-auto">
                                                    <div class="col-lg-9 m-auto">
                                                          <div class="form-group row mx-auto">
                                                            <label for="inputEditExamDate" class="col-lg-5 col-form-label text-left">Enter Date</label>
                                                            <input type="date" class="col-lg-7 form-control" id="inputEditExamDate">
                                                          </div>
                                                   </div>
                                                </div>
                                              </div>
                                              <!-- Modal footer -->
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="editExamDateSaveBtn">Save changes</button>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="px-1 py-0">
                                    <a href="../apps/controller/acaAdminController.php?approve='.$pool_id.'" class="btn btn-success fa fa-check-square mx-0 btn-sm" style="padding:1px 4px 1px 7px;" id="examPoolApproved" data-toggle="tooltip" title="Approve Exam Pool" ></a>
                                    <button class="btn btn-danger fa fa-trash btn-sm" style="padding:1px 4px 1px 7px;" id="examPoolDelete"  data-toggle="modal" data-target="#deleteExamPool1" title="Delete Exam Pool" ></button>
                                        <div class="modal fade" id="deleteExamPool1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <!-- Modal Header -->
                                                  <div class="modal-header">
                                                    <h4 class="modal-title text-success"><span id="examPoolCourseCode">CSE111</span>-<small class="text-secondary" id="examPoolCourseName"> Computer Fundamental </small></h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  </div>
    
                                                  <!-- Modal body -->
                                                  <div class="modal-body">
                                                        <p class="text-danger lead">Are you sure to delete the exam pool ?</p>
                                                  </div>
                                                  <!-- Modal footer -->
                                                  <div class="modal-footer">
                                                    <a href="../apps/controller/acaAdminController.php?delete='.$pool_id.'" class="btn btn-danger" id="examPoolDeleteBtn">Delete</a>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    <button class="btn btn-secondary fa fa-list mx-0 btn-sm" style="padding:1px 4px 1px 7px;" id="examPoolStdList"  data-toggle="modal" data-target="#examPoolStudentList1" title="See Candidate List"></button>
                                    <div class="modal fade" id="examPoolStudentList1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <!-- Modal Header -->
                                              <div class="modal-header">
                                                <h4 class="modal-title text-success"><span id="examPoolCourseCode">CSE111</span><small id="examPoolCourseName"> Computer Fundamental </small></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              </div>
    
                                              <!-- Modal body -->
                                              <div class="modal-body">
                                                    <h4 class="modal-title">Candidate List</h4>
                                                    <table class="table table-lg table-bordered mt-4 mb-lg-5">
                                                        <thead>
                                                            <tr class="bg-secondary text-center text-light">
                                                                <th scope="col">SL</th>
                                                                <th scope="col">Student Name</th>
                                                                <th scope="col">Student Id</th>
                                                                <th scope="col">Section</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>	
                                              </div>
                                              <!-- Modal footer -->
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-info fa fa-info-circle rounded mx-1" style="padding:1px 4px 1px 7px;" data-toggle="modal" data-target="#infoExamPool1"></button>
                                    <div class="modal fade" id="infoExamPool1">
                                         <div class="modal-dialog">
                                            <div class="modal-content">
    
                                              <!-- Modal Header -->
                                              <div class="modal-header">
                                                <h4 class="modal-title">Quetion pool information</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              </div>
    
                                              <!-- Modal body -->
                                              <div class="modal-body text-center">
                                                <p><b>Course code : </b>'.$course_code.'</p>
                                                <p><b>Course name : </b>'.$course_name.'</p>
                                                <p><b>Institue : </b>'.$course_code.'</p>
                                                <p><b>Co-ordinator : </b>'.$co_full_name.'</p>
                                                <p><b>Exam date : </b>'.$exam_date.'</p>
                                              </div>
                                              <!-- Modal footer -->
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                         </div>
                                    </div>
                                  </td>
                                </tr>';
                            }
                        }
                    }

                    echo '</tbody>
                            </table>
                        </div>
                        <div id="upcoming" class="tab-pane fade">
                            <table class="table table-bordered mt-4 mb-lg-5">
                              <thead>
                                <tr class="bg-secondary text-center text-light">
                                  <th scope="col">Course Code</th>
                                  <th scope="col">Course Name</th>
                                  <th scope="col">Co-ordinator</th>
                                  <th scope="col">Question Setter</th>
                                  <th scope="col">Exam Date</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>';

                    $pool_query = "SELECT * FROM exam_pools WHERE portal_id = '$portal_id'";
                    $pool_exists = $conn->query("$pool_query");
                    $count_pool = mysqli_num_rows($pool_exists);

                    $current_date = date("Y-m-d");

                    if ($count_pool > 0) {
                        While ($pool_row = mysqli_fetch_array($pool_exists)) {
                            $course_code = $pool_row['course_code'];
                            $course_name = $pool_row['course_name'];
                            $pool_token = $pool_row['pool_token'];
                            $exam_date = $pool_row['exam_date'];
                            $que_setter_email = $pool_row['que_setter_email'];
                            $co_id = $pool_row['co_id'];
                            $pool_approved = $pool_row['approved'];

                            $co_query = "SELECT * FROM co_ordinator WHERE co_id = '$co_id'";
                            $co_exists = $conn->query("$co_query");
                            $co_row = mysqli_fetch_array($co_exists);

                            $co_user_id = $co_row['user_id'];

                            $co_user_query = "SELECT * FROM user WHERE user_id = '$co_user_id'";
                            $co_user_exists = $conn->query("$co_user_query");
                            $co_user_row = mysqli_fetch_array($co_user_exists);

                            $co_email = $co_user_row['email'];

                            if ($current_date < $exam_date && $pool_approved ==1) {
                                echo '<tr class="text-center bg-light">
                                  <td id="examPoolCourseCode">' . $course_code . '</td>
                                  <td id="examPoolCourseName">' . $course_name . '</td>
                                  <td><span id="examPoolCO">' . $co_email . '</span></td>
                                   <td><span id="examPoolQS">' . $que_setter_email . '</span> 
                                    <a class="fa fa-edit text-success" href="#" style="text-decoration: none;"  data-toggle="modal" data-target="#editQS"></a>
                                    <div class="modal fade" id="editQS">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <!-- Modal Header -->
                                              <div class="modal-header">
                                                <h4 class="modal-title text-success"><span id="examPoolCourseCode">CSE111</span><small id="examPoolCourseName"> Computer Fundamental </small></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              </div>
    
                                              <!-- Modal body -->
                                              <div class="modal-body">
                                                <p class="mb-lg-4 mx-0">Please enter correct email to add Question Setter.</p>
                                                 <div class="form row m-auto">
                                                    <div class="col-lg-11 m-auto">
                                                          <div class="form-group row mx-auto">
                                                            <label for="inputEditQS" class="col-lg-6 col-form-label text-left">Question Setter Email</label>
                                                            <input type="email" class="col-lg-6 form-control" id="inputEditQS">
                                                          </div>
                                                   </div>
                                                </div>
                                              </div>
                                              <!-- Modal footer -->
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="editQSSaveBtn">Save changes</button>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                   <td><span id="examPoolDate">' . $exam_date . '</span>
                                    <a class="fa fa-edit text-success" href="#" style="text-decoration: none;"  data-toggle="modal" data-target="#editExamDate"></a>
                                    <div class="modal fade" id="editExamDate">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <!-- Modal Header -->
                                              <div class="modal-header">
                                                <h4 class="modal-title text-success"><span id="examPoolCourseCode">CSE111</span><small id="examPoolCourseName"> Computer Fundamental </small></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              </div>
    
                                              <!-- Modal body -->
                                              <div class="modal-body">
                                                <p class="mb-lg-4 mx-0">Please enter correct date.</p>
                                                 <div class="form row m-auto">
                                                    <div class="col-lg-9 m-auto">
                                                          <div class="form-group row mx-auto">
                                                            <label for="inputEditExamDate" class="col-lg-5 col-form-label text-left">Enter Date</label>
                                                            <input type="date" class="col-lg-7 form-control" id="inputEditExamDate">
                                                          </div>
                                                   </div>
                                                </div>
                                              </div>
                                              <!-- Modal footer -->
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="editExamDateSaveBtn">Save changes</button>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="px-1 py-0">
                                    <button class="btn btn-danger fa fa-trash btn-sm" style="padding:1px 4px 1px 7px;" id="examPoolDelete"  data-toggle="modal" data-target="#deleteExamPool1" title="Delete Exam Pool" ></button>
                                        <div class="modal fade" id="deleteExamPool1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <!-- Modal Header -->
                                                  <div class="modal-header">
                                                    <h4 class="modal-title text-success"><span id="examPoolCourseCode">CSE111</span>-<small class="text-secondary" id="examPoolCourseName"> Computer Fundamental </small></h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  </div>
    
                                                  <!-- Modal body -->
                                                  <div class="modal-body">
                                                        <p class="text-danger lead">Are you sure to delete the exam pool ?</p>
                                                  </div>
                                                  <!-- Modal footer -->
                                                  <div class="modal-footer">
                                                    <a href="../apps/controller/acaAdminController.php?delete='.$pool_id.'" class="btn btn-danger" id="examPoolDeleteBtn">Delete</a>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    <button class="btn btn-secondary fa fa-list mx-0 btn-sm" style="padding:1px 4px 1px 7px;" id="examPoolStdList"  data-toggle="modal" data-target="#examPoolStudentList2" title="See Candidate List"></button>
                                    <div class="modal fade" id="examPoolStudentList2">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <!-- Modal Header -->
                                              <div class="modal-header">
                                                <h4 class="modal-title text-success"><span id="examPoolCourseCode">CSE111</span><small id="examPoolCourseName"> Computer Fundamental </small></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              </div>
    
                                              <!-- Modal body -->
                                              <div class="modal-body">
                                                    <h4 class="modal-title">Candidate List</h4>
                                                    <table class="table table-lg table-bordered mt-4 mb-lg-5">
                                                        <thead>
                                                            <tr class="bg-secondary text-center text-light">
                                                                <th scope="col">SL</th>
                                                                <th scope="col">Student Name</th>
                                                                <th scope="col">Student Id</th>
                                                                <th scope="col">Section</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>	
                                              </div>
                                              <!-- Modal footer -->
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-info fa fa-info-circle rounded mx-1" style="padding:1px 4px 1px 7px;" data-toggle="modal" data-target="#infoExamPool2"></button>
                                    <div class="modal fade" id="infoExamPool2">
                                         <div class="modal-dialog">
                                            <div class="modal-content">
    
                                              <!-- Modal Header -->
                                              <div class="modal-header">
                                                <h4 class="modal-title">Quetion pool information</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              </div>
    
                                              <!-- Modal body -->
                                              <div class="modal-body text-center">
                                                <p><b>Course code : </b>'.$course_code.'</p>
                                                <p><b>Course name : </b>'.$course_name.'</p>
                                                <p><b>Institue : </b>'.$course_code.'</p>
                                                <p><b>Co-ordinator : </b>'.$co_full_name.'</p>
                                                <p><b>Exam date : </b>'.$exam_date.'</p>
                                              </div>
                                              <!-- Modal footer -->
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                         </div>
                                    </div>
                                  </td>
                                </tr>';
                            }
                        }
                    }

                        echo '</tbody>
                            </table>
                        </div>
                        <div id="ended" class="tab-pane fade">
                          <table class="table table-bordered mt-4 mb-lg-5">
                              <thead>
                                <tr class="bg-secondary text-center text-light">
                                  <th scope="col">Course Code</th>
                                  <th scope="col">Course Name</th>
                                  <th scope="col">Co-ordinator</th>
                                  <th scope="col">Question Setter</th>
                                  <th scope="col">Exam Date</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>';

                        $pool_query = "SELECT * FROM exam_pools WHERE portal_id = '$portal_id'";
                        $pool_exists = $conn->query("$pool_query");
                        $count_pool = mysqli_num_rows($pool_exists);

                        $current_date = date("Y-m-d");

                        if ($count_pool > 0) {
                            While ($pool_row = mysqli_fetch_array($pool_exists)) {
                                $course_code = $pool_row['course_code'];
                                $course_name = $pool_row['course_name'];
                                $pool_token = $pool_row['pool_token'];
                                $exam_date = $pool_row['exam_date'];
                                $que_setter_email = $pool_row['que_setter_email'];
                                $co_id = $pool_row['co_id'];

                                $co_query = "SELECT * FROM co_ordinator WHERE co_id = '$co_id'";
                                $co_exists = $conn->query("$co_query");
                                $co_row = mysqli_fetch_array($co_exists);

                                $co_user_id = $co_row['user_id'];

                                $co_user_query = "SELECT * FROM user WHERE user_id = '$co_user_id'";
                                $co_user_exists = $conn->query("$co_user_query");
                                $co_user_row = mysqli_fetch_array($co_user_exists);

                                $co_email = $co_user_row['email'];

                                if ($current_date > $exam_date) {
                                    echo '<tr class="text-center bg-light">
                                  <td id="examPoolCourseCode">' . $course_code . '</td>
                                  <td id="examPoolCourseName">' . $course_name . '</td>
                                  <td><span id="examPoolCO">' . $co_email . '</span></td>
                                   <td><span id="examPoolQS">' . $que_setter_email . '</span></td>
                                   <td><span id="examPoolDate">' . $exam_date . '</span></td>
                                  <td class=" ">
                                    <button class="btn btn-secondary fa fa-list btn-sm" style="padding:1px 4px 1px 7px;" title="View candidate list" id="examPoolStdList"  data-toggle="modal" data-target="#examPoolStudentList3" title="See Candidate List"></button>
                                        <div class="modal fade" id="examPoolStudentList3">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                  <!-- Modal Header -->
                                                  <div class="modal-header">
                                                    <h4 class="modal-title text-success"><span id="examPoolCourseCode">CSE111</span><small id="examPoolCourseName"> Computer Fundamental </small></h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  </div>
    
                                                  <!-- Modal body -->
                                                  <div class="modal-body">
                                                        <h4 class="modal-title">Candidate List</h4>
                                                        <table class="table table-lg table-bordered mt-4 mb-lg-5">
                                                            <thead>
                                                                <tr class="bg-secondary text-center text-light">
                                                                    <th scope="col">SL</th>
                                                                    <th scope="col">Student Name</th>
                                                                    <th scope="col">Student Id</th>
                                                                    <th scope="col">Section</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                                <tr class="text-center">
                                                                    <td scope="col">SL</td>
                                                                    <td scope="col">Student Name</td>
                                                                    <td scope="col">Student Id</td>
                                                                    <td scope="col">Section</td>
                                                                    <td scope="col" class="px-0"><button class="btn btn-success py-1 px-3" id="adminStudentResult">Result</button></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                        </table>	
                                                  </div>
                                                  <!-- Modal footer -->
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    <button class="btn btn-success fa fa-book btn-sm" style="padding:1px 4px 1px 7px;" id="examPoolStdResult"  data-toggle="modal" data-target="#viewPoolStudentResult" title="See Student Result"></button>
                                    <button class="btn btn-sm btn-info fa fa-info-circle rounded mx-1" style="padding:1px 4px 1px 7px;" data-toggle="modal" data-target="#infoExamPool3"></button>
                                    <div class="modal fade" id="infoExamPool3">
                                         <div class="modal-dialog">
                                            <div class="modal-content">
    
                                              <!-- Modal Header -->
                                              <div class="modal-header">
                                                <h4 class="modal-title">Quetion pool information</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              </div>
    
                                              <!-- Modal body -->
                                              <div class="modal-body text-center">
                                                <p><b>Course code : </b>'.$course_code.'</p>
                                                <p><b>Course name : </b>'.$course_name.'</p>
                                                <p><b>Institue : </b>'.$course_code.'</p>
                                                <p><b>Co-ordinator : </b>'.$co_full_name.'</p>
                                                <p><b>Exam date : </b>'.$exam_date.'</p>
                                              </div>
                                              <!-- Modal footer -->
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                         </div>
                                    </div>
                                  </td>
                                </tr>';
                                }
                            }
                        }
                            echo ' </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                </div>';
            }
        }
			?>
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
    <script>
        $(document).ready(function(){
            $("#addCOBtn").click(function(){
                $("#comment").load("loadphp.php");
            });
        });
    </script>
</html>