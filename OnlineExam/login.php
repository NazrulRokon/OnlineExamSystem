<?php
    require "apps/controller/loginController.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>::..Login..::</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="assets/css/home.css">
        <link type="text/css" rel="stylesheet" href="assets/css/custom-all.css">
        <link type="text/css" rel="stylesheet" href="assets/css/custom-footer.css">
        <link type="text/css" rel="stylesheet" href="assets/css/scrolltop.css">
        <link type="text/css" rel="stylesheet" href="assets/css/fa-svg-with-js.css">
        <link type="text/css" rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">
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
                            <button onclick="registerHomePage()" class="btn btn-outline-info my-2 my-sm-0" type="submit"><span class="fa fa-user-plus mr-1"></span>Register</button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
		<div class="row w-100 m-auto pb-4" style="">
			<div class="col-sm-4 mx-auto">
				<div class="card mx-auto my-sm-5" style=" box-shadow: 2px 2px 20px gray;">
					<div class="card-header" style="background-color: #e8f5e9;">
						<h4 class="text-center">Login</h4>
					</div>
					<div class="card-body" style="border-radius: 10px;">
						<form action="" method="post">
							  <div class="form-group">
								<label for="exampleInputUsername">Username<span class="text-danger font-weight-bold">*</span></label>
								<input type="text" class="form-control" id="exampleInputUsername" name="username" aria-describedby="userHelp" placeholder="Enter username" required>
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1">Password<span class="text-danger font-weight-bold">*</span></label>
								<input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
							  </div>
							  <p>Forgot password? <a href="#" data-toggle="modal" data-target="#forgotPassword"><small>Click here.</small></a></p>
							  <div class="modal fade" id="forgotPassword">
									<div class="modal-dialog">
										<div class="modal-content">
										  <!-- Modal Header -->
										  <div class="modal-header">
											<h4 class="modal-title">Forgot Password</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										  </div>

										  <!-- Modal body -->
										  <div class="modal-body">
											<p class="mb-lg-4 lead mx-0">Please enter your email address below.<br>A varification code will be send to your email.</p>
											 <div class="form row m-auto">
												<div class="col-lg-10 m-auto">
													  <div class="form-group row mx-auto">
														<label for="forgotPassEmail" class="col-lg-3 col-form-label text-left">Email :</label>
														<input type="email" class="col-lg-9 form-control" id="forgotPassEmail" placeholder="Enter email address">
													  </div>
												 </div>
											</div>
										  </div>
										  <!-- Modal footer -->
										  <div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary" id="forgotPassSubmitBtn" data-toggle="modal" data-target="#forgotPassVCode" data-dismiss="modal">submit</button>
										  </div>
										</div>
									</div>
								</div>
							  <div class="modal fade" id="forgotPassVCode">
								<div class="modal-dialog">
									<div class="modal-content">
									  <!-- Modal Header -->
									  <div class="modal-header">
										<h4 class="modal-title">Forgot Password</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									  </div>

									  <!-- Modal body -->
									  <div class="modal-body">
										<p class="mb-lg-4 lead mx-0">Please enter the varification code below that You have received via email.</p>
										 <div class="form row m-auto">
											<div class="col-lg-10 m-auto">
												  <div class="form-group row mx-auto">
													<label for="forgotPassVcode" class="col-lg-6 col-form-label text-left">Varification Code :</label>
													<input type="text" class="col-lg-6 form-control" id="forgotPassVcode" placeholder="Varification code">
												  </div>
											 </div>
										</div>
									  </div>
									  <!-- Modal footer -->
									  <div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary" id="forgotPassVcodeSubmitBtn">submit</button>
									  </div>
									</div>
								</div>
							</div>
							 <div class="custom-control custom-checkbox mb-3">
								<input type="checkbox" class="custom-control-input" id="customControlValidation1">
								<label class="custom-control-label" for="customControlValidation1">Remember password</label>
							 </div>
						    <button type="submit" class="btn btn-primary my-3" name="submit" id="loginSubmitBtn">Sign in</button>
						    <p class="text-center">Need an account? <a href="registration.php"><small>Click here</small></a> for register.</p>
                        </form>
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