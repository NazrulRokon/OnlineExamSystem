<?php
require "apps/controller/commonPageController.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>::..Solutions..::</title>
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
			<div class="row mx-auto w-50 mb-3">
				<h3 class="text-center mx-auto mt-5">Solution For Three Different Types Institute</h3>
			</div>
			<div class="row w-100 mx-auto my-3">
				<div class="card-group">
					<div class="col-sm-4">
						<div class="card w-75 mx-auto mb-lg-4">
							<div class="card-header mx-auto border-0 bg-white pt-4">
								<span class="fa fa-university fa-3x" style="color:darkolivegreen ;"></span>
							</div>
							<h5 class="text-center">University</h5>
							<div class="card-body py-0 pb-4">
								<p class="text-center">Our exam builder is simple and easy to use. For students as well as for the administrators. With our online exam builder it's easy to start, which makes it more fun.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card w-75 mx-auto mb-sm-4">
							<div class="card-header mx-auto border-0 bg-white pt-4">
								<span class="fa fa-university fa-3x" style="color:darkolivegreen ;"></span>
							</div>
							<h5 class="text-center">College</h5>
							<div class="card-body pt-0 pb-4">
								<p class="text-center">It doesn't matter if you are on a phone, tablet or pc: your online exam will look beautiful. Our online examination system is fully responsive, so you can engage your audience on any platform.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card w-75 mx-auto mb-sm-4">
							<div class="card-header mx-auto border-0 bg-white pt-4">
								<span class="fa fa-university fa-3x" style="color:darkolivegreen ;"></span>
							</div>
							<h5 class="text-center">High School</h5>
							<div class="card-body py-0 pb-4">
								<p class="text-center">Do you have any questions about our online examination software? Our support owls are always by your side and provide you with the best possible support!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container m-auto" style="background-color:#EeEeEe; max-width: 100%">
				<div class="row m-auto w-50">
					<h3 class="text-center mx-auto mt-5">Use easy & secured exam System</h3>
				</div>
				<div class="row m-auto w-50">
					<p class="text-center mt-2">This is the last online examination system you will ever need! With our easy test maker you will set up your own engaging exams that fit any kind of difficulty level. Build and create your online exams & tests with great ease and provide your users with appropriate feedback, so they will have a rich learning experience.</p>
					<div class="row m-auto">
						<button class="btn-info px-3 py-2 rounded mb-5 border border-secondary">Demo Exam</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row w-100 m-auto pb-4" style=" background-color:#f1f8e9;">
			<div class="container m-auto" style="max-width: 100%">
				<div class="row m-auto w-50">
					<h3 class="text-center mx-auto mt-5">You can use this system for your Institute</h3>
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