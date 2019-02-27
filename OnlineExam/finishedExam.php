<?php
require "apps/controller/commonPageController.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>::..Question Bank..::</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="assets/css/home.css">
        <link type="text/css" rel="stylesheet" href="assets/css/custom-all.css">
        <link type="text/css" rel="stylesheet" href="assets/css/custom-footer.css">
        <link type="text/css" rel="stylesheet" href="assets/css/scrolltop.css">
        <link type="text/css" rel="stylesheet" href="assets/css/fa-svg-with-js.css">
        <link type="text/css" rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">
        <link type="text/css" rel="stylesheet" href="assets/css/pools.css">
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
                    <a class="navbar-brand pt-0 mt-0" data-toggle="tooltip" data-placement="right" title="Back to home" href="index.php">
                        <img src="assets/img/s1.png" style="height: 40px;" class="p-0 m-0">
                        <span class="text-success font-weight-bold" style="font-size: 24px">mart</span><span class="text-danger" style="font-size: 22px">Exam</span>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarToggler">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-light" href="index.php">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="examPools.php">Exam-pools</a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Question-bank</a>
                                    <div class="dropdown-menu bg-dark p-2" aria-labelledby="dropdownMenuButton" id="">
                                        <a class="dropdown-item bg-dark text-light text-center" href="#" onClick="">Finished Exam</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item bg-dark text-light text-center" href="#" onClick="">Question List</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="features.php">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="faq.php">FAQ</a>
                            </li>
                        </ul>
                        <div class="form-inline my-2 my-lg-0">
                            <?php
                                echo $content;
                            ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
		<div class="row w-100 m-auto" style=" background-color:#f1f8e9;">
			<div class="row d-flex d-md-block flex-nowrap wrapper w-100 mx-auto mt-4 pb-lg-5">
				<div class="col-md-2 float-left col-1 pl-0 pr-0 collapse width show" id="sidebar">
					<div class="list-group border-0 card text-center text-md-left">
						<a href="#examPoolMenu1" class="list-group-item collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-university"></i> <span class="d-none d-md-inline">University</span> </a>
						<div class="collapse" id="examPoolMenu1" data-parent="#sidebar">
							<a href="#examPoolMenu1Sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">FSIT </a>
							<div class="collapse" id="examPoolMenu1Sub1" data-parent="#examPoolMenu1">
								<a href="#" class="list-group-item" data-parent="#examPoolMenu1Sub1">CSE</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu1Sub1">CS</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu1Sub1">SWE</a>
							</div>
							<a href="#examPoolMenu1Sub2" class="list-group-item" data-toggle="collapse" aria-expanded="false">Engineering</a>
							<div class="collapse" id="examPoolMenu1Sub2" data-parent="#examPoolMenu1">
								<a href="#" class="list-group-item" data-parent="#examPoolMenu1Sub1">EEE</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu1Sub1">TE</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu1Sub1">ETE</a>
							</div>
						</div>
						<a href="#examPoolMenu2" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-university"></i> <span class="d-none d-md-inline">College</span></a>
						<div class="collapse" id="examPoolMenu2" data-parent="#sidebar">
							<a href="#examPoolMenu2Sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Science</a>
							<div class="collapse" id="examPoolMenu2Sub1" data-parent="#examPoolMenu2">
								<a href="#" class="list-group-item" data-parent="#examPoolMenu2Sub1">Mathematics</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu2Sub1">Physics</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu2Sub1">Chemistry</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu2Sub1">Biology</a>
							</div>
							<a href="#examPoolMenu2Sub2" class="list-group-item" data-toggle="collapse" aria-expanded="false">Business Study</a>
							<div class="collapse" id="examPoolMenu2Sub2" data-parent="#examPoolMenu2">
								<a href="#" class="list-group-item" data-parent="#examPoolMenu2Sub1">Accounting</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu2Sub1">Finance</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu2Sub1">Statistics</a>
							</div>
							<a href="#examPoolMenu2Sub3" class="list-group-item" data-toggle="collapse" aria-expanded="false">Arts</a>
							<div class="collapse" id="examPoolMenu2Sub3" data-parent="#examPoolMenu2">
								<a href="#" class="list-group-item" data-parent="#examPoolMenu2Sub3">Economics</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu2Sub3">Sociology</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu2Sub3">Statistics</a>
							</div>
						</div>
						<a href="#examPoolMenu3" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-university"></i> <span class="d-none d-md-inline">High School</span></a>
						<div class="collapse" id="examPoolMenu3" data-parent="#sidebar">
							<a href="#examPoolMenu3Sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Science</a>
							<div class="collapse" id="examPoolMenu3Sub1" data-parent="#examPoolMenu3">
								<a href="#" class="list-group-item" data-parent="#examPoolMenu3Sub1">Mathematics</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu3Sub1">Physics</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu3Sub1">Chemistry</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu3Sub1">Biology</a>
							</div>
							<a href="#examPoolMenu3Sub2" class="list-group-item" data-toggle="collapse" aria-expanded="false">Business Study</a>
							<div class="collapse" id="examPoolMenu3Sub2" data-parent="#examPoolMenu3">
								<a href="#" class="list-group-item" data-parent="#examPoolMenu3Sub1">Accounting</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu3Sub1">Finance</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu3Sub1">Statistics</a>
							</div>
							<a href="#examPoolMenu3Sub3" class="list-group-item" data-toggle="collapse" aria-expanded="false">Arts</a>
							<div class="collapse" id="examPoolMenu3Sub3" data-parent="#examPoolMenu3">
								<a href="#" class="list-group-item" data-parent="#examPoolMenu3Sub3">Economics</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu3Sub3">Sociology</a>
								<a href="#" class="list-group-item" data-parent="#examPoolMenu3Sub3">Statistics</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9 float-left col px-5 pt-2 main mx-4 mt-4 border" style="min-height: 800px;">
					<div class="page-header">
						<h2 class="text-center">Question Bank</h2>
					</div>
					<p class="lead text-center">Find and rytrive various kinds of questions & pool here.</p>
					<hr>
					<div class="row p-0">
						<div class="col-md-12">
							<form class="form-inline ml-4" role="form">
								<input type="text" class="form-control mr-3 my-2" placeholder="Search question pool">
								<div class="form-group">
									<label for="filter" class="mx-1 my-2">Filter by :</label>
									<select class="form-control mr-3 my-2">
										<option value="0" selected>Select an option</option>
										<option value="1">Course code</option>
										<option value="2">Institute name</option>
										<option value="3">Question type</option>
									</select>
								 </div>
								 <button type="submit" class="btn btn-primary mx-2 my-2"  id="searchQueBankBtn"><span class="fa fa-search" aria-hidden="true"></span>Search</button>
							</form>
						</div>
					</div>
					<hr>
					<div class="row w-100 m-auto">
						<div class="card col-lg-12 p-0 my-2" style="box-shadow: 1px 1px 10px black;">
							<div class="card-header p-0">
								<div class="col-lg-6 px-3 py-2 float-left text-success text-center">
									<span style="font-weight: 800; font-size: 24px;">CSE-111 </span><small class="text-secondary">Computer Fundamental</small>
									<span class="badge badge-secondary">Test</span>
									<span class="badge badge-info">MCQ</span>
								</div>
								<div class=" btn-group col-lg-3 py-3 px-0 float-left text-center">
									<span style="font-weight: 800; font-size: 16px;"><span class="text-primary" style="font-size: 18px;">Exam Date : </span>11-03-2017</span>
								</div>
								<div class=" btn-group col-lg-2 py-3 px-lg-2 ml-lg-5 float-left">
									<button class="btn btn-sm btn-success rounded mx-1" href="#"><i class="fa fa-play-circle"> Open</i></button>
									<button class="btn btn-sm btn-info rounded mx-1" data-toggle="modal" data-target="#infoModalBank"><i class="fa fa-info-circle"> Info</i></button>
									<div class="modal fade" id="infoModalBank">
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
												<p><b>Question type : </b>All</p>
												<p><b>Duration : </b>1.00 hr</p>
											  </div>
											  <!-- Modal footer -->
											  <div class="modal-footer">
												<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											  </div>
											</div>
										 </div>
									</div>
								</div>
							</div>
							<div class="card-body pt-0">
								<div class="col-sm-5 pt-3 float-left text-center">
									<small><b>Institue : </b>Daffodil International University</small>
								</div>
								<div class="col-sm-4 pt-3 float-left text-center">
									<small><b>Instructor : </b>Md. Ali Hasan</small>
								</div>
								<div class="col-sm-3 pt-3 float-left text-center">
									<small><b>Duration : </b>1.00 hr</small>
								</div>
							</div>
						</div>
					</div>
				</div>
    		</div>
		</div>
        <div class="row w-100 mx-auto footer">
            <div class="row mx-auto mt-4 w-100">
                <div class="col-sm-6 mt-2">
                    <ul class="navbar mx-auto my-2 w-75">
                        <li class=" nav nav-item"><a class="foot-nav text-secondary" href="index.php">Home</a></li>
                        <li class=" nav nav-item"><a class="foot-nav text-secondary" href="features.php">Features</a></li>
                        <li class=" nav nav-item"><a class="foot-nav text-secondary" href="solutions.php">Solution</a></li>
                        <li class=" nav nav-item"><a class="foot-nav text-secondary" href="about.php">About</a></li>
                        <li class=" nav nav-item"><a class="foot-nav text-secondary" href="contact.php">Contact</a></li>
                        <li class=" nav nav-item"><a class="foot-nav text-secondary" href="faq.php">FAQ</a></li>
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
                    <a href="https://daffodilvarsity.edu.bd/" target="_blank"><img src="assets/img/Uni-logo.png" class="ml-2" style="width: 50%;"></a>
                </div>
                <div class="col-sm-6 px-0 mb-0">
                    <h6 class="text-secondary font-weight-bold text-center mt-">Contact us</h6>
                    <p class="text-secondary text-center m-auto pb-3">4/2, Sobhanbag, Mirpur Road, Dhanmondi, Dhaka-1207.<br>
                        <b>E-mail:</b> info@daffodilvarsity.edu.bd , <b>Phone:</b> +88 48111639, <b>Fax:</b> 88-02-9131947.</p>
                </div>
                <div class="col-sm-3 text-center m-auto">
                    <img src="assets/img/s1.png" style="height: 40px;" class="p-0 m-0">
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
    <script type="text/javascript" src="assets/js/custom-all.js"></script>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/scrolltop.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous">
	</script>
</html>