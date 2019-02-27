<?php
require "apps/controller/commonPageController.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>::..Home..::</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css">
	  <link type="text/css" rel="stylesheet" href="assets/css/home.css">
	  <link type="text/css" rel="stylesheet" href="assets/css/custom-all.css">
	  <link type="text/css" rel="stylesheet" href="assets/css/custom-footer.css">
	  <link type="text/css" rel="stylesheet" href="assets/css/scrolltop.css">
	  <link type="text/css" rel="stylesheet" href="assets/css/fa-svg-with-js.css">
	  <link type="text/css" rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">

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
				  	<a class="navbar-brand pt-0 mt-0" data-toggle="tooltip" data-placement="right" title="Back to home" href="index.php">
                        <img src="assets/img/s1.png" style="height: 40px;" class="p-0 m-0">
                        <span class="text-success font-weight-bold" style="font-size: 24px">mart</span><span class="text-danger" style="font-size: 22px">Exam</span>
				  	</a>
				  	<div class="collapse navbar-collapse" id="navbarToggler">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						  <li class="nav-item">
							<a class="nav-link text-light" href="index.php">Home<span class="sr-only">(current)</span></a>
						  </li>
                            <?php
                            if($_SESSION["userid"]==true){
                                echo '<li class="nav-item">
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
                                </li>';
                            }
                            ?>
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
		<div class="row w-100 m-auto">
			<div class="card border-0 w-100%">  
				<img src="assets/img/Education.png" class="img-fluid m-0">
				<div class="card-img-overlay"  style="background-color: #000; opacity: .45"></div>
				<div class="card-img-overlay">
					<div class="col-sm-7 mt-lg-5 mx-5" style="opacity: .9">
						<h3 class="card-title text-light my-3 font-italic">Are you a student? try now our
						<a class="btn btn-success font-weight-bold btn-lg" href="#">Demo Exam</a></h3>
						<h3 class="card-title text-light mt-lg-5 font-italic">Are you an exam organizer? need an exam pool?</h3>
						<h5 class="card-title text-light font-italic">Enter your email below for free registration</h5>
						<form>
							<div class="form-row mt-lg-5">
								<input type="email" class="form-control-lg border-0 w-50" id="registerEmail1" aria-describedby="emailHelp" placeholder="Enter email">
								<button class="btn-lg btn-primary my-2 my-sm-0 mx-4 border-0" type="submit">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row w-100 m-auto pb-4" style=" background-color:#f1f8e9;">
			<div class="container m-auto" style="max-width: 100%">
				<div class="row m-auto w-50">
					<h3 class="text-center mx-auto mt-5">Why will you use our system?</h3>
				</div>
				<div class="row m-auto w-50">
					<p class="text-center mt-2">Do you need some serious testing system for your students? Or do you need to hand out a lot of certificates? Do you want to easily setup your exam software and invite your users or do you need to connect your testing software with your internal software? Start using the Online Exam Builder all this is all within reach. Take a look at all the features or ask for a demo.</p>
				</div>
			</div>
			<div class="row w-100 m-0 my-3">
				<div class="card-group">
					<div class="col-sm-4">
						<div class="card w-75 mx-auto mb-lg-4">
							<div class="card-header mx-auto border-0 bg-white pt-4">
								<span class="fa fa-coffee fa-3x" style="color:darkolivegreen ;"></span>
							</div>
							<h5 class="text-center">User Friendly</h5>
							<div class="card-body py-0 pb-4">
								<p class="text-center">Our exam builder is simple and easy to use. For students as well as for the administrators. With our online exam builder it's easy to start, which makes it more fun.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card w-75 mx-auto mb-sm-4">
							<div class="card-header mx-auto border-0 bg-white pt-4">
								<span class="fa fa-laptop fa-3x" style="color:darkolivegreen ;"></span>
							</div>
							<h5 class="text-center">Great look, great feel</h5>
							<div class="card-body pt-0 pb-4">
								<p class="text-center">It doesn't matter if you are on a phone, tablet or pc: your online exam will look beautiful. Our online examination system is fully responsive, so you can engage your audience on any platform.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card w-75 mx-auto mb-sm-4">
							<div class="card-header mx-auto border-0 bg-white pt-4">
								<span class="fa fa-comments fa-3x" style="color:darkolivegreen ;"></span>
							</div>
							<h5 class="text-center">Awesome support</h5>
							<div class="card-body py-0 pb-4">
								<p class="text-center">Do you have any questions about our online examination software? Our support owls are always by your side and provide you with the best possible support!</p>
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
    <script defer src="assets/js/fontawesome-all.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/4.7.0/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous">
	</script>
</html>