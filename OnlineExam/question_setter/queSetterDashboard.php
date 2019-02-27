<?php
require "../apps/controller/queSetterController.php";
require "../apps/controller/inCompleteProfileChecker.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>::..Dashboard|Quetion Setter..::</title>
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
                    <a class="navbar-brand pt-0 mt-0" data-toggle="tooltip" data-placement="right" title="Back to home" href="queSetterDashboard.php">
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
                                    <i class="fa fa-user"> </i><span id="fullName"><?php echo " ".$fullname ?></span>
                                </button>
                                <div class="dropdown-menu m-2 bg-secondary" aria-labelledby="dropdownMenuButton" id="examPoolDropmenu">
                                    <a class="dropdown-item bg-secondary text-light text-center" href="queSetterProfile.php"><i class="fa fa-user-circle"></i> Profile</a>
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
            if($qs_count == 0){
            echo '<div class="container rounded px-0 text-center my-5" id="createPortalMsg" style="height: 500px;">
                <h5 class="fa-2x">You have not added into any exam pool yet</h5>
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
                                <a href="queSetterCompleteProfile.php" class="btn btn-success px-3 py-2 font-weight-bold" id="createPortal">Click Here</a>
                                to complete your profile.
                            </p>
                        </div>
                    </div>';
                }
		echo'<div class="row w-100 m-auto" >
            <div class="card col-lg-2 border-0 my-4 py-4 px-0 mx-auto" style="background-color: #282828;">
                <img class="card-img-top rounded-circle img-thumbnail w-75 m-auto" alt="" src="../assets/img/profile.png">
                <div class="card-text text-light text-center mt-4">
                    <b style="font-size: 18px;" id="queSetterFullName2">'.$fullname.'</b>
                    <p>Question Setter</p>
                </div>
                <hr class="bg-secondary m-0">
                <div class="card-body px-0 mt-4">
                    <div class="sidenav col-lg-10 m-auto text-center px-0">
                        <a class="px-0" href="queSetterDashboard.php"><i class="fa fa-dashboard m-0"></i> Dashboard</a>
                        <a class="px-0" href="queSetterProfile.php"><i class="fa fa-user-circle m-0"></i> My profile</a>
                        <a class="px-0" href="queSetterEditProfile.php"><i class="fa fa-edit m-0"></i> Edit profile</a>
                        <a class="px-0" href="#" style="border-bottom: 1px #666666 solid;"  data-toggle="modal" data-target="#changePassword"><i class="fa fa-refresh m-0"></i> Change Password</a>
                        <div class="modal fade" id="changePassword">
                            <div class="modal-dialog modal-lg">
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
			<div class="col-lg-9 float-left col px-5 py-2 main mr-5 my-4 border rounded" style="background-color: #F5F5F5">
			  	<div class="page-header text-center" >
                	<h3 class="mt-3">Dashboard</h3>
				</div>
				<hr>
				<div class="row">
					<div class="col-xl-3 col-md-6 col-12">
					  <div class="card bg-info my-2" style="box-shadow: 1px 1px 10px black;">
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
					  <div class="card bg-warning my-2" style="box-shadow: 1px 1px 10px black;">
						<div class="card-header py-0 text-center">
							<i class="fa fa-2x fa-check-circle text-light"></i>
						  	<span class="ml-3 my-0 py-0 fa-3x text-light">10</span>
						</div>
						<div class="card-body text-center py-2">
						  <span class="text-light">Completed Exam</span>
						</div>
					  </div>
					</div>
					<!-- /.col -->
					<div class="col-xl-3 col-md-6 col-12">
					  <div class="card bg-success my-2" style="box-shadow: 1px 1px 10px black;">
						<div class="card-header py-0 text-center">
							<i class="fa fa-2x fa-check-square-o text-light"></i>
						  	<span class="ml-3 my-0 py-0 fa-3x text-light">8</span>
						</div>
						<div class="card-body text-center py-2">
						  <span class="text-light">Question You Set</span>
						</div>
						<!-- /.info-box-content -->
					  </div>
					  <!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-xl-3 col-md-6 col-12">
					  <div class="card bg-secondary my-2" style="box-shadow: 1px 1px 10px black;">
						<div class="card-header py-0 text-center"><em class="fa fa-2x fa-sticky-note-o text-light"></em> <span class="ml-3 my-0 py-0 fa-3x text-light">2</span></div>
						<div class="card-body text-center py-2">
						  <span class="text-light">New Exam Pool</span>
						</div>
						<!-- /.info-box-content -->
					  </div>
					  <!-- /.info-box -->
					</div>
					<!-- /.col -->
				  </div>
				<h4 class="mt-5">Exam List </h4>
				<hr class="bg-info">
				<div class="container rounded px-0" style="box-shadow: 1px 1px 10px black;">
				  <ul class="nav nav-pills mx-auto bg-light border" role="tablist">
						<li class="nav-item ml-1">
						  <a class="nav-link active rounded-0" data-toggle="pill" href="#newExam">New Exam</a>
						</li>
						<li class="nav-item ml-1">
						  <a class="nav-link rounded-0" data-toggle="pill" href="#submitedQue">Submited Quetions</a>
						</li>
				  	</ul>
				  	<div class="tab-content" style="overflow-y: scroll; height: 600px; margin-bottom: 30px">
					  <div id="newExam" class="tab-pane fade in active show p-3">
							<table class="table table-bordered mt-4 mb-lg-5">
							  <thead>
								<tr class="bg-secondary text-center text-light">
								  <th scope="col">Course Code</th>
								  <th scope="col">Course Name</th>
								  <th scope="col">Exam Date</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							  <tbody>';

                            $user_query = "SELECT * FROM user WHERE user_id = '$user_id'";
                            $user_exists = $conn->query("$user_query");
                            $user_row = mysqli_fetch_array($user_exists);

                            $que_setter_email = $user_row['email'];

							$pool_query = "SELECT * FROM exam_pools WHERE que_setter_email = '$que_setter_email'";
                            $pool_exists = $conn->query("$pool_query");
                            $count_pool = mysqli_num_rows($pool_exists);

                            $current_date = date("Y-m-d");

                            if ($count_pool > 0) {
                                While ($pool_row = mysqli_fetch_array($pool_exists)) {
                                    $pool_id = $pool_row['pool_id'];
                                    $course_code = $pool_row['course_code'];
                                    $course_name = $pool_row['course_name'];
                                    $pool_token = $pool_row['pool_token'];
                                    $exam_date = $pool_row['exam_date'];
                                    $co_id = $pool_row['co_id'];
                                    $pool_approved = $pool_row['approved'];
                                    $institute_name = $pool_row['institute_name'];
                                    $duration = $pool_row['duration'];
                                    $num_of_que = $pool_row['num_of_exam_que'];

                                    $que_query = "SELECT * FROM question_list WHERE pool_id = '$pool_id'";
                                    $que_exists = $conn->query("$que_query");
                                    $que_count = mysqli_num_rows($que_exists);

                                    if ($current_date < $exam_date && $que_count != $num_of_que) {
                                        echo '<tr class="text-center bg-white">
								   <td id="examPoolCourseCode">' . $course_code . '</td>
                                   <td id="examPoolCourseName">' . $course_name . '</td>
                                   <td><span id="examPoolQS">' . $exam_date . '</span></td>
								  <td id="">
									<a href="setQuestions.php" class="btn btn-sm btn-warning fa fa-plus rounded mx-1" id="setQuestions" data-toggle="tooltip" title="Set questions"></a>
									<button class="btn btn-sm btn-info fa fa-info-circle rounded mx-1" data-toggle="modal" title="See Exam Info" data-target="#infoExamPool1"></button>
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
                                            <p><b>Course code : </b>' . $course_code . '</p>
                                            <p><b>Course name : </b>' . $course_name . '</p>
                                            <p><b>Institute : </b>' . $institute_name . '</p>
                                            <p><b>Question Setter : </b>' . $que_setter_email . '</p>
                                            <p><b>Exam date : </b>' . $exam_date . '</p>
                                            <p><b>Duration : </b>' . $duration . ' hr</p>
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
							  echo'</tbody>
							</table>
						</div>
					  	<div id="submitedQue" class="tab-pane fade in p-3">
							<table class="table table-bordered mt-4 mb-lg-5">
							  <thead>
								<tr class="bg-secondary text-center text-light">
								  <th scope="col">Course Code</th>
								  <th scope="col">Course Name</th>
								  <th scope="col">Exam Date</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							  <tbody>';

                            $user_query = "SELECT * FROM user WHERE user_id = '$user_id'";
                            $user_exists = $conn->query("$user_query");
                            $user_row = mysqli_fetch_array($user_exists);

                            $que_setter_email = $user_row['email'];

                            $pool_query = "SELECT * FROM exam_pools WHERE que_setter_email = '$que_setter_email'";
                            $pool_exists = $conn->query("$pool_query");
                            $count_pool = mysqli_num_rows($pool_exists);

                            $current_date = date("Y-m-d");

                            if ($count_pool > 0) {
                                While ($pool_row = mysqli_fetch_array($pool_exists)) {
                                    $pool_id = $pool_row['pool_id'];
                                    $course_code = $pool_row['course_code'];
                                    $course_name = $pool_row['course_name'];
                                    $pool_token = $pool_row['pool_token'];
                                    $exam_date = $pool_row['exam_date'];
                                    $co_id = $pool_row['co_id'];
                                    $pool_approved = $pool_row['approved'];
                                    $institute_name = $pool_row['institute_name'];
                                    $duration = $pool_row['duration'];
                                    $num_of_que = $pool_row['num_of_exam_que'];

                                    $que_query = "SELECT * FROM question_list WHERE pool_id = '$pool_id'";
                                    $que_exists = $conn->query("$que_query");
                                    $que_count = mysqli_num_rows($que_exists);

                                    if ($current_date < $exam_date && $que_count == $num_of_que) {
                                        echo '<tr class="text-center bg-white">
								  <td id="examPoolCourseCode">' . $course_code . '</td>
                                   <td id="examPoolCourseName">' . $course_name . '</td>
                                   <td><span id="examPoolQS">' . $exam_date . '</span></td>
								  <td id="">
								  	<a href="setQuestions.php" class="btn btn-sm btn-success fa fa-edit rounded mx-1" id="startExam" data-toggle="tooltip" title="Edit Quetions"></a>
									<button class="btn btn-sm btn-info fa fa-info-circle rounded mx-1" data-toggle="modal" title="View exam Info" data-target="#infoExamPool2"></button>
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
                                            <p><b>Course code : </b>' . $course_code . '</p>
                                            <p><b>Course name : </b>' . $course_name . '</p>
                                            <p><b>Institute : </b>' . $institute_name . '</p>
                                            <p><b>Question Setter : </b>' . $que_setter_email . '</p>
                                            <p><b>Exam date : </b>' . $exam_date . '</p>
                                            <p><b>Duration : </b>' . $duration . ' hr</p>
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
							 echo'</tbody>
							</table>
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