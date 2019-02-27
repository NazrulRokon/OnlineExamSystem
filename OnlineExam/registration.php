<?php
    require "apps/controller/registrationController.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>::..Registration..::</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="assets/css/home.css">
        <link type="text/css" rel="stylesheet" href="assets/css/custom-all.css">
        <link type="text/css" rel="stylesheet" href="assets/css/custom-footer.css">
        <link type="text/css" rel="stylesheet" href="assets/css/scrolltop.css">
        <link type="text/css" rel="stylesheet" href="assets/css/fa-svg-with-js.css">
        <link type="text/css" rel="stylesheet" href="assets/css/registration.css">
        <link type="text/css" rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">

        <script type="text/javascript" defer src="apps/validator/regValidation.js"></script>
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
                            <button onclick="loginPage()" class="btn btn-outline-success my-2 my-sm-0 mx-2" type="submit"><span class="fa fa-sign-in mr-2"></span>Login</button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row w-100 m-auto pb-4"  style="">
            <div class="col-lg-10 mx-auto mb-5">
                <div class="container col-lg-10 my-lg-5 text-center">
                    <p class="m-0" style="font-size: 22px; font-weight: 500;">
                        Already have an account? <a href="login.php" style="font-weight: 200">click here</a> for login. <span class="text-success">or</span>
                    </p>
                    <hr>
                    <p class="mt-3 lead" style="font-size: 20px;">Create an account to create, manage and attend in exams.</p>
                </div>
                <div class="card mx-auto my-lg-4 w-50"  style=" box-shadow: 2px 2px 20px gray;">
                    <div class="card-header" style="background-color: #e8f5e9;">
                        <h4 class="text-center">Registration</h4>
                    </div>
                    <div class="card-body" style="border-radius: 10px;">
                        <form method="post" action="">
                            <p style="font-family: Gotham, Helvetica Neue, Helvetica, Arial,' sans-serif'">* Please fill the form below to complete your registration.<br>** Star ( <span class="text-danger font-weight-bold">*</span> ) sign denotes mandetory fields.</p>
                            <div class="form-group">
                                <div class="form-row">
                                    <label  class="col-form-label col-sm-4 font-weight-bold">Register as<span class="text-danger font-weight-bold">*</span></label>
                                    <div class="col-sm-8">
                                        <select class="custom-select" name="usertype" id="regAs" required>
                                            <option>Choose an option....</option>
                                            <option value="academic admin">Academic Admin</option>
                                            <option value="exam coordinator">Exam Co-ordinator</option>
                                            <option value="question setter">Question Setter</option>
                                            <option value="student" class="pb-1">Student</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mt-4">
                                    <label class="col-form-label col-sm-4"><b>First Name<span class="text-danger">*</span> :</b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="regFirstname" placeholder="Enter first name" name="firstname" required>
                                        <p><small id="regFirstnameMsg" style="color: red;"></small></p>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <label class="col-form-label col-sm-4"><b>Last Name<span class="text-danger">*</span> :</b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="regLastname" placeholder="Enter last name" name="lastname" required>
                                        <p><small id="regLastnameMsg" style="color: red;"></small></p>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <label class="col-form-label col-sm-4" for="registerUsername"><b>Username<span class="text-danger font-weight-bold">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="registerUsername" id="regUsername" name="username" aria-describedby="userHelp" placeholder="Enter username" required>
                                        <p><small id="registerUsernameMsg" style="color: red;"></small></p>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <label class="col-form-label col-sm-4"><b>Email Address<span class="text-danger">*</span> :</b></label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="regEmail" placeholder="Enter email address" name="email" required>
                                        <p><small id="regEmailMsg"></small></p>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <label class="col-form-label col-sm-4"><b>Password<span class="text-danger">*</span> :</b></label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="password"  onfocus="validatePassword()" id="regPass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Create password" required>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div id="message">
                                        <h4>Password must contain the following:</h4>
                                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                        <p id="number" class="invalid">A <b>number</b></p>
                                        <p id="length" class="invalid">Minimum <b>8</b> & maximum <b>30</b> characters</p>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <label class="col-form-label col-sm-4"><b>Confirm password<span class="text-danger">*</span>:</b></label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="confirmpassword" id="regConfPass" placeholder="Confirm password" required>
                                        <p><small id="regConfPassMsg" style="color: red;"></small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox mb-3  mt-4">
                                <input type="checkbox" class="custom-control-input border" id="customControlValidation1" required>
                                <label class="custom-control-label" for="customControlValidation1">I have read and accept the <a href="terms.html">Terms & Condition.</a></label>
                            </div>
                            <div class="col-sm-11">
                                <button type="submit" class="btn btn-primary my-3 float-right px-4 py-2" id="validateReg" name="submit">Submit</button>
                            </div>
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

