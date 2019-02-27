<?php
require "../apps/controller/adminController.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>::..Assistant Admin..::</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/home.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/custom-all.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/custom-footer.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/scrolltop.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/fa-svg-with-js.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/fontawesome-all.css">
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
                    <a class="navbar-brand pt-0 mt-0" data-toggle="tooltip" data-placement="right" title="Back to home" href="assAdminPanel.php">
                        <img src="../assets/img/s1.png" style="height: 40px;" class="p-0 m-0">
                        <span class="text-success font-weight-bold" style="font-size: 24px">mart</span><span class="text-danger" style="font-size: 22px">Exam</span>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarToggler">
                        <div class="form-inline my-2 my-lg-0">
                            <div class="btn-group dropdown" id="examPoolDropdown">
                                <button class="btn dropdown-toggle bg-transparent text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"> </i><span id="acaAdminFullName"><?php echo " ".$full_name; ?></span>
                                </button>
                                <div class="dropdown-menu m-2 bg-secondary" aria-labelledby="dropdownMenuButton" id="examPoolDropmenu">
                                    <a class="dropdown-item bg-secondary text-light text-center" href="../apps/controller/adminLogoutController.php"><i class="fa fa-sign-out"></i> Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
		<div class="row w-100 m-auto" >
            <div class="card col-lg-2 border-0 my-4 py-4 px-0 mx-auto" style="background-color: #282828;">
                <img class="card-img-top rounded-circle img-thumbnail w-75 m-auto" alt="" src="../assets/img/profile.png">
                <div class="card-text text-light text-center mt-4">
                    <b style="font-size: 18px;" id="acaAdminFullName2"><?php echo " ".$full_name; ?></b>
                    <p><?php echo $admin_type; ?><br><small><?php echo " ".$email; ?></small></p>
                </div>
                <hr class="bg-secondary m-0">
                <div class="card-body px-0 mt-4">
                    <div class="sidenav col-lg-10 m-auto text-center px-0">
                        <a class="px-0" href="assAdminPanel.php"><i class="fa fa-edit m-0"></i> Manage Portal</a>
                        <a class="px-0" href="questionBank.php"><i class="fa fa-bank m-0"></i> Question Bank</a>
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
                    <h3 class="mt-3">Portal List</h3>
                </div>
                <hr class="pb-1">
                <div class="row mx-auto w-100 p-0">
                    <div class="col-md-10 mx-auto">
						<form class="form-inline ml-4" role="form">
							<input type="text" class="form-control mr-3 my-2" placeholder="Search Portal">
							<div class="form-group">
								<label for="filter" class="mx-1 my-2">Filter by :</label>
								<select class="form-control mr-3 my-2">
									<option value="0" selected>Select an option</option>
									<option value="1">Portal Code</option>
									<option value="2">Institute name</option>
									<option value="3">Creation Date</option>
								</select>
							 </div>
							 <button type="submit" class="btn btn-primary mx-2 my-2"  id="searchPortalBtn"><span class="fa fa-search" aria-hidden="true"></span>Search</button>
						</form>
					</div>
				</div>
				<hr>
				<h4 class="mt-2">Portal List <small></small></h4>
				<hr class="bg-info">
					<div class="container rounded px-0" style="box-shadow: 1px 1px 10px black; margin-bottom: 30px;">
					  <ul class="nav nav-tabs mx-auto bg-light border" role="tablist">
						<li class="nav-item ml-4">
						  <a class="nav-link active rounded-0" data-toggle="tab" href="#New">New</a>
						</li>
						<li class="nav-item ml-1">
						  <a class="nav-link rounded-0" data-toggle="tab" href="#approved">Approved</a>
						</li>
					  </ul>
					  <div class="tab-content" style="overflow-y: scroll; height: 800px;">
						<div id="New" class="tab-pane fade in active show px-3">
                            <table class="table table-bordered mt-4 mb-lg-5">
                                <thead>
                                <tr class="bg-secondary text-center text-light">
                                    <th scope="col">Portal Id</th>
                                    <th scope="col">Institute Name</th>
                                    <th scope="col">Institute Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = "SELECT * FROM portal";
                                $portal_exists = $conn->query("$query");
                                $count_portal = mysqli_num_rows($portal_exists);

                                if ($count_portal > 0) {
                                    $count = 0;
                                    While ($portal_row = mysqli_fetch_array($portal_exists)) {
                                        $portal_id = $portal_row['portal_id'];
                                        $portal_approved = $portal_row['approved'];
                                        $aca_admin_id = $portal_row['aca_admin_id'];
                                        if ($portal_approved != 1) {
                                            echo '<tr class="text-center bg-white">
                                          <td >' . $portal_row['portal_id'] . '</td>
                                          <td class="px-0">' . $portal_row['institute_name'] . '</td>
                                          <td>' . $portal_row['institute_address'] . '</td>
                                          <td class="py-0">
                                          
                                            <a href="../apps/controller/adminController.php?approve='.$portal_id.'" class="btn btn-success fa fa-check-square mx-0 btn-sm" id="approvePortal" name="approvePortal" data-toggle="tooltip" title="Approve Portal" name="approvePortal"></a>
                                            
                                            <a href="../apps/controller/adminController.php?delete='.$portal_id.'" class="btn btn-danger fa fa-trash btn-sm" title="Delete portal" ></a>
                                                
                                            <button class="btn btn-sm btn-info fa fa-info-circle rounded mx-1" data-toggle="modal" data-target="#infoportal1" title="Portal info"></button>
                                            <div class="modal fade" id="infoportal1">
                                                 <div class="modal-dialog">
                                                    <div class="modal-content">
                            
                                                      <!-- Modal Header -->
                                                      <div class="modal-header">
                                                        <h4 class="modal-title">Portal information</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      </div>
                            
                                                      <!-- Modal body -->
                                                      <div class="modal-body text-center">
                                                        <p><b>Portal Id : </b>' . $portal_row['portal_id'] . '</p>
                                                        <p><b>Institue Name : </b>' . $portal_row['institute_name'] . '</p>
                                                        <p><b>Institute Address : </b>' . $portal_row['institute_address'] . '</p>
                                                        <p><b>Creation Date : </b>01-01-2017</p>
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
                                ?>
                                </tbody>
                            </table>
						</div>
						<div id="approved" class="tab-pane fade in px-3">
                            <table class="table table-bordered mt-4 mb-lg-5">
                                <thead>
                                <tr class="bg-secondary text-center text-light">
                                    <th scope="col">Portal Id</th>
                                    <th scope="col">Institute Name</th>
                                    <th scope="col">Institute Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = "SELECT * FROM portal";
                                $portal_exists = $conn->query("$query");
                                $count_portal = mysqli_num_rows($portal_exists);

                                if ($count_portal > 0){
                                    While ($portal_row = mysqli_fetch_array($portal_exists)) {
                                        $portal_id = $portal_row['portal_id'];
                                        $portal_approved = $portal_row['approved'];
                                        $aca_admin_id = $portal_row['aca_admin_id'];
                                        if ($portal_approved == 1) {
                                            echo '<tr class="text-center bg-light">
                                          <td >' . $portal_row['portal_id'] . '</td>
                                          <td class="px-0">' . $portal_row['institute_name'] . '</td>
                                          <td>' . $portal_row['institute_address'] . '</td>
                                          <td class="py-0">
                                            <a href="../apps/controller/adminController.php?delete='.$portal_id.'" class="btn btn-danger fa fa-trash btn-sm" title="Delete portal" ></a>
                                         
                                            <button class="btn btn-sm btn-info fa fa-info-circle rounded mx-1" data-toggle="modal" data-target="#infoportal2" title="Portal info"></button>
                                            <div class="modal fade" id="infoportal2">
                                                 <div class="modal-dialog">
                                                    <div class="modal-content">
                            
                                                      <!-- Modal Header -->
                                                      <div class="modal-header">
                                                        <h4 class="modal-title">Portal information</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      </div>
                            
                                                      <!-- Modal body -->
                                                      <div class="modal-body text-center">
                                                        <div class="modal-body text-center">
                                                        <p><b>Portal Id : </b>' . $portal_row['portal_id'] . '</p>
                                                        <p><b>Institue Name : </b>' . $portal_row['institute_name'] . '</p>
                                                        <p><b>Institute Address : </b>' . $portal_row['institute_address'] . '</p>
                                                        <p><b>Creation Date : </b>01-01-2017</p>
                                                      </div>
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
                                ?>
                                </tbody>
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
							  <tbody>
								<tr class="text-center">
								  <td id="examPoolCourseCode">CSE111</td>
								  <td id="examPoolCourseName">Computer Fundamental</td>
								  <td><span id="examPoolCO">Syed Ashfaque Ali</span>
									<a class="fa fa-edit text-success" href="#" style="text-decoration: none;"  data-toggle="modal" data-target="#editCO"></a>
									<div class="modal fade" id="editCO">
										<div class="modal-dialog">
											<div class="modal-content">
											  <!-- Modal Header -->
											  <div class="modal-header">
												<h4 class="modal-title text-success"><span id="examPoolCourseCode">CSE111</span><small id="examPoolCourseName"> Computer Fundamental </small></h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											  </div>

											  <!-- Modal body -->
											  <div class="modal-body">
												<p class="mb-lg-4 mx-0">Please enter correct input to add Co-ordinator.</p>
												 <div class="form row m-auto">
													<div class="col-lg-10 m-auto">
														  <div class="form-group row mx-auto">
															<label for="inputEditCO" class="col-lg-6 col-form-label text-left">Co-ordinator Email</label>
															<input type="email" class="col-lg-6 form-control" id="inputEditCO">
														  </div>
													 </div>
												</div>
											  </div>
											  <!-- Modal footer -->
											  <div class="modal-footer">
												<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary" id="editCOSaveBtn">Save changes</button>
											  </div>
											</div>
										</div>
									</div>
								  </td>
								   <td><span id="examPoolQS">Abdullah Al Kafi</span> 
									<a class="fa fa-edit text-success" href="#" style="text-decoration: none;"  data-toggle="modal" data-target="#editQS"></a>
									<div class="modal fade" id="editQS">
										<div class="modal-dialog">
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
								   <td><span id="examPoolDate">12-11-2018</span>
									<a class="fa fa-edit text-success" href="#" style="text-decoration: none;"  data-toggle="modal" data-target="#editExamDate"></a>
									<div class="modal fade" id="editExamDate">
										<div class="modal-dialog">
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
								  <td class="py-0">
									<button class="btn btn-secondary fa fa-list btn-sm" id="examPoolStdList"  data-toggle="modal" data-target="#examPoolStudentList3" title="See Candidate List"></button>
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
									<button class="btn btn-success fa fa-book btn-sm" id="examPoolStdResult"  data-toggle="modal" data-target="#viewPoolStudentResult" title="See Student Result"></button>
									<button class="btn btn-sm btn-info fa fa-info-circle rounded" data-toggle="modal" data-target="#infoExamPool3"></button>
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
												<p><b>Course code : </b>CSE-111</p>
												<p><b>Course name : </b>Computer Fundamental</p>
												<p><b>Institue : </b>Daffodil International University</p>
												<p><b>Co-ordinator : </b>Md. Ali Hossain</p>
												<p><b>Published date : </b>01-01-2017</p>
												<p><b>Exam date : </b>04-01-2017</p>
												<p><b>Number of questions : </b>40</p>
												<p><b>Question type : </b>MCQ</p>
												<p><b>Duration : </b>1.00 hr</p>
											  </div>
											  <!-- Modal footer -->
											  <div class="modal-footer">
												<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											  </div>
											</div>
										 </div>
									</div>
								  </td>
								</tr>
							  </tbody>
							</table>
						</div>
					  </div>
				</div>
			</div>
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
</html>