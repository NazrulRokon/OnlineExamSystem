<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>::..Registration|Co-ordinator..::</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
	  <link type="text/css" rel="stylesheet" href="css/custom-all.css">
	  <link type="text/css" rel="stylesheet" href="css/custom-footer.css">
	  <link type="text/css" rel="stylesheet" href="css/scrolltop.css">
	  <link type="text/css" rel="stylesheet" href="css/fa-svg-with-js.css">
	  
	  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  
	  <script type="text/javascript" src="js/custom-all.js"></script>
	  <script type="text/javascript" src="js/jquery.js"></script>
	  <script type="text/javascript" src="js/bootstrap.js"></script>
	  <script type="text/javascript" src="js/scrolltop.js"></script>
	  <script defer src="js/fontawesome-all.min.js"></script>
	  <script defer src="https://use.fontawesome.com/releases/4.7.0/js/all.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
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
				  <a class="navbar-brand pt-0 mt-0" data-toggle="tooltip" data-placement="right" title="Back to home" href="index.html">
					<span class="text-success font-weight-bold" style="font-size: 24px">Porik</span><span class="text-danger" style="font-size: 22px">kha</span>
				  </a>
				  <div class="collapse navbar-collapse" id="navbarToggler">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					  <li class="nav-item">
						<a class="nav-link text-light" href="index.html">Home<span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link text-light" href="examPools.html">Exam-pools</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link text-light" href="questionBank.html">Question-bank</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link text-light" href="features.html">Features</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link text-light" href="about.html">About</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link text-light" href="contact.html">Contact</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link text-light" href="faq.html">FAQ</a>
					  </li>
					</ul>
					<div class="form-inline my-2 my-lg-0">
					  <button onclick="loginPage()" class="btn btn-outline-success my-2 my-sm-0 mx-2" type="submit"><span class="fa fa-sign-in mr-2"></span>Login</button>
					  <button onclick="registerHomePage()" class="btn btn-outline-info my-2 my-sm-0" type="submit"><span class="fa fa-user-plus mr-1"></span>Register</button>
					</div>
				  </div>
				</nav>
			</div>
		</div>
		<div class="row w-100 m-auto pb-4"  style="background-color:#eeeeee;">
			<div class="col-sm-12 text-center"><h2 class="mt-4" style="text-shadow: 4px 4px 10px white">Registration.</h2></div>
			<div class="col-sm-10 mx-auto mb-5">
				<div class="card mx-auto my-lg-4 w-50"  style="background-color: #e8f5e9; box-shadow: 2px 2px 20px black;">
					<div class="card-header" style="background-color: #B4DBB7">
						<h4 class="text-center">Exam Co-ordinator</h4>
					</div>
					<div class="card-body" style="border-radius: 10px;">
						<p style="font-family: Gotham, Helvetica Neue, Helvetica, Arial,' sans-serif'">* Please fill the form below to complete your registration.<br>** Star ( <span class="text-danger font-weight-bold">*</span> ) sign denotes mandetory fields.</p>
						<div class="form-group">
						  <div class="form-row mt-4">
							<label class="col-form-label col-sm-4"><b>First Name<span class="text-danger">*</span> :</b></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" placeholder="Enter first name" required>
							</div>
						  </div>
						  <div class="form-row mt-3">
							<label class="col-form-label col-sm-4"><b>Last Name<span class="text-danger">*</span> :</b></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" placeholder="Enter last name" required>
							</div>
						  </div>
						  <div class="form-row mt-3">
							<label class="col-form-label col-sm-4"><b>Email Address<span class="text-danger">*</span> :</b></label>
							<div class="col-sm-8">
								<input type="email" class="form-control" placeholder="Enter email address" required>
							</div>
						  </div>
						  <div class="form-row mt-3">
							<label class="col-form-label col-sm-4"><b>Password<span class="text-danger">*</span> :</b></label>
							<div class="col-sm-8">
								<input type="password" class="form-control" placeholder="Create password" required>
								<small class="text-secondary ml-4" id="inputMsgPass1">Password can contain [a-z], [A-Z], Symbol [#,*,%]</small>
							</div>
						  </div>
						  <div class="form-row mt-3">
							<label class="col-form-label col-sm-4"><b>Confirm password<span class="text-danger">*</span>:</b></label>
							<div class="col-sm-8">
								<input type="password" class="form-control" placeholder="Confirm password" required>
							</div>
						  </div>
						</div>
						<div class="custom-control custom-checkbox mb-3  mt-4">
							<input type="checkbox" class="custom-control-input border" id="customControlValidation1" required>
							<label class="custom-control-label" for="customControlValidation1">I have read and accept the <a href="terms.html">Terms & Condition.</a></label>
					  	</div>
					  	<div class="col-sm-11">
							<button type="submit" class="btn btn-primary my-3 float-right px-4 py-2">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row w-100 mx-auto footer">
			<div class="row mx-auto mt-4 w-100">
				<div class="col-sm-6 mt-2">
					<ul class="navbar mx-auto my-2 w-75"> 
						<li class=" nav nav-item"><a class="foot-nav text-secondary" href="index.html">Home</a></li>
						<li class=" nav nav-item"><a class="foot-nav text-secondary" href="features.html">Features</a></li>
						<li class=" nav nav-item"><a class="foot-nav text-secondary" href="solutions.html">Solution</a></li>
						<li class=" nav nav-item"><a class="foot-nav text-secondary" href="about.html">About</a></li>
						<li class=" nav nav-item"><a class="foot-nav text-secondary" href="contact.html">Contact</a></li>
						<li class=" nav nav-item"><a class="foot-nav text-secondary" href="faq.html">FAQ</a></li>
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
					<img src="img/Uni-logo.png" class="ml-2" style="width: 50%;">
				</div>
				<div class="col-sm-6 px-0 mb-0">
					<h6 class="text-secondary font-weight-bold text-center mt-">Contact us</h6>
					<p class="text-secondary text-center m-auto pb-3">4/2, Sobhanbag, Mirpur Road, Dhanmondi, Dhaka-1207.<br>
					<b>E-mail:</b> info@daffodilvarsity.edu.bd , <b>Phone:</b> +88 48111639, <b>Fax:</b> 88-02-9131947.</p>
				</div>
				<div class="col-sm-3 px-0">
				</div>
				<hr width="60%" class="mt-0" style="background-color: dimgray">
			</div>
			<div class="row m-auto w-100">
				<div class="col-sm-6 text-center">
					<p class="text-secondary m-auto pb-3">All right reserved by porikkha.com &copy; 2018</p>
				</div>
				<div class="col-sm-6 text-center">
					<p class="text-secondary m-auto pb-3">@ This site is developed by Ashfaque,Kafi & Nazrul.</p>
				</div>
			</div>
		</div>
  	</body>
  	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous">
	</script>
</html>