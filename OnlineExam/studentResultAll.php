<?php
require "apps/controller/commonPageController.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>::..Student Result..::</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="assets/css/home.css">
        <link type="text/css" rel="stylesheet" href="assets/css/custom-all.css">
        <link type="text/css" rel="stylesheet" href="assets/css/custom-footer.css">
        <link type="text/css" rel="stylesheet" href="assets/css/scrolltop.css">
        <link type="text/css" rel="stylesheet" href="assets/css/fa-svg-with-js.css">
        <link type="text/css" rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">
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
                                        <a class="dropdown-item bg-dark text-light text-center" href="#" onClick="">Quetion List</a>
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
		<div class="row w-100 m-auto" >
			<!-- Page content -->
			<div class="col-lg-10 float-left col px-5 py-2 main mx-auto my-4 border rounded" style="min-height: 800px;">
			  	<div class="page-header text-center" >
                	<h3 class="mt-3">View Student Result</h3>
				</div>
				<hr>
				<div class="col-sm-12 text-center">
					<div class="row p-0">
						<div class="col-md-12">
							<form class="form-inline ml-4" role="form">
								<input type="text" class="form-control mr-3 my-2" placeholder="Student Id">
								<div class="form-group">
									<label for="filter" class="mx-1 my-2">Semester :</label>
									<select class="form-control mr-3 my-2">
										<option value="0" selected>Select an option</option>
										<option value="2">First</option>
										<option value="3">Second</option>
										<option value="3">Third</option>
									</select>
								 </div>
								 <div class="form-group">
									<label for="filter" class="mx-1 my-2">Year :</label>
									<input type="text" class="form-control mr-3 my-2" placeholder="Year">
								 </div>
								 <button type="submit" class="btn btn-primary mx-2 my-2"  id="searcStdResultBtn"><span class="fa fa-search" aria-hidden="true"></span>Search</button>
							</form>
						</div>
					</div>
				</div>
				<hr>
				<div class="container rounded px-0" style="box-shadow: 1px 1px 10px black;">
				  	<table class="table table-lg table-bordered mt-4 mb-lg-4 text-center">
						<thead>
							<tr class="bg-secondary text-light">
								<th scope="col">SL</th>
								<th scope="col">Course Code</th>
								<th scope="col">Course Name</th>
								<th scope="col">Total Marks</th>
								<th scope="col">SGPA</th>
								<th scope="col">Grade</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td scope="col">1</td>
								<td scope="col">CSE111</td>
								<td scope="col">Computer Fundamental</td>
								<td scope="col">75</td>
								<td scope="col">3.75</td>
								<td scope="col">A</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h5 class="text-center py-2"><span class="">CGPA :</span><span class="text-success"> 3.75</span></h5>
				<hr>
				<div class="row mt-5">
					<div class="col-lg-6">
						<p><span class="font-weight-bold">Name :</span> Md. Nazrul Islam</p>
						<p><span class="font-weight-bold">Id :</span> 142-15-3794</p>
						<p><span class="font-weight-bold">Department :</span> Computer Science</p>
						<p><span class="font-weight-bold">Section :</span> G</p>
					</div>
					<div class="col-lg-6 mx-auto text-center">
						<img class="mx-auto" src="assets/img/grade.PNG">
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
    <script defer src="assets/js/fontawesome-all.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/4.7.0/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous">
	</script>
</html>