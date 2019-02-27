<?php
require "apps/controller/commonPageController.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Features</title>
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
    <div class="row mx-auto mt-1 pt-4 pb-2 border-bottom border-dark" style="background-color: #87af6d;">
        <h3 class="mx-auto">Want to know more? Visit
            <a class="btn btn-primary font-weight-bold btn-lg ml-2" href="faq.php">FAQ Page</a></h3>
    </div>
    <div class="row p-5 w-100 mx-auto">
        <div class="mx-auto">
            <h3 class="text-center mx-auto mb-3">Create Your Exam and Test pools</h3>
            <p class="text-center mx-auto w-50">Build and create the most beautiful exams with our easy to use cloud based exam builder. Combine text, video, images, practice questions in your exams</p>
        </div>
        <div class="card-group w-75 mx-auto">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fa fa-2x text-info"></i>
                    <h5 class="card-title text-center">Make exams</h5>
                    <p class="card-text">Use our exam builder to create engaging online exams and challenge your students.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <i class="fa fa-2x text-info"></i>
                    <h5 class="card-title text-center">Easy to use</h5>
                    <p class="card-text">Take the full benefit of our easy to use test maker and create tests within minutes. </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <i class="fa fa-2x text-info"></i>
                    <h5 class="card-title text-center">Lots of question types</h5>
                    <p class="card-text">We have a wide range of question types to choice from multiple choice text questions, Fill in the blanks.</p>
                </div>
            </div>
        </div>
        <div class="card-group w-75 mx-auto">
            <div class="card border-top-0">
                <div class="card-body text-center">
                    <i class="fa fa-2x text-info"></i>
                    <h5 class="card-title text-center">Question bank</h5>
                    <p class="card-text">Create a question bank with lots of questions. Use your question bank to efficiently create exams. Just choose our randomizer and put in the amount of questions you want to have in your exams.  </p>
                </div>
            </div>
            <div class="card border-top-0">
                <div class="card-body text-center">
                    <i class="fa fa-2x text-info"></i>
                    <h5 class="card-title text-center">Set the rules</h5>
                    <p class="card-text">You set the rules of your exam. Set the pass and fail rules. Set the amount of attemtps for each user. Can they review their answers before committing. Do they get feedback after each question, at the end of the exam, or none at all. Set a timer on your exam, or not. The possibilities are endless.</p>
                </div>
            </div>
            <div class="card border-top-0">
                <div class="card-body text-center">
                    <i class="fa fa-2x fa-pencil text-info"></i>
                    <h5 class="card-title text-center">No Limits</h5>
                    <p class="card-text">Create unlimited online exams with our exam builder. The sky is the limit. Never stop learning!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-5 w-100 mx-auto" style="background-color: #EDEDED">
        <div class="mx-auto">
            <h3 class="text-center mx-auto mb-3">Ease of Use </h3>
            <p class="text-center mx-auto w-50">Give your students the best distraction free elearning experience with our Exam builder.Take care your student perfectly.</p>
        </div>
        <div class="card-group w-75 mx-auto">
            <div class="card" style="background-color: #EDEDED">
                <div class="card-body text-center">
                    <i class="fa fa-2x text-info"></i>
                    <h5 class="card-title text-center">Know your students</h5>
                    <p class="card-text">With our advanced user management you can know your users by asking extra information.</p>
                </div>
            </div>
            <div class="card" style="background-color: #EDEDED">
                <div class="card-body text-center">
                    <i class="fa fa-2x text-info"></i>
                    <h5 class="card-title text-center">Invite users to your exams</h5>
                    <p class="card-text">Upload your users to our cloud based exam software and send them an invite, completely automated.</p>
                </div>
            </div>
            <div class="card" style="background-color: #EDEDED">
                <div class="card-body text-center">
                    <i class="fa fa-2x text-info"></i>
                    <h5 class="card-title text-center">Self-registration</h5>
                    <p class="card-text">Let your users sign-up for your exams themselves. No assigning required.</p>
                </div>
            </div>
        </div>
        <div class="card-group w-75 mx-auto">
            <div class="card border-top-0" style="background-color: #EDEDED">
                <div class="card-body text-center">
                    <i class="fa fa-2x text-info"></i>
                    <h5 class="card-title text-center">Single Sign-On</h5>
                    <p class="card-text">Do you want to give your colleagues easy access to your learning content using your companies user credentials? Use our Single Sign On integration to give easy and secure access.</p>
                </div>
            </div>
            <div class="card border-top-0" style="background-color: #EDEDED">
                <div class="card-body text-center">
                    <i class="fa fa-2x text-info"></i>
                    <h5 class="card-title text-center">Academy Portal</h5>
                    <p class="card-text">Do you need to manage a lot of exams and participants? The Academy portal allows you to assign groups of students access to your learning content. Creating custom learning portals for your students with ease. </p>
                </div>
            </div>
            <div class="card border-top-0" style="background-color: #EDEDED">
                <div class="card-body text-center">
                    <i class="fa fa-2x text-info"></i>
                    <h5 class="card-title text-center">Certification</h5>
                    <p class="card-text">Need to hand out certificates after completing a course? No worries. Our automated exam certification proces handles all the administration.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-5 w-100 mx-auto">
        <div class="mx-auto">
            <h3 class="text-center mx-auto mb-3">Tracking & Reporting</h3>
            <p class="text-center mx-auto w-50">Keep track of your students. Download the results and stats to evaluate your exams and training material. Integrate with your other software.</p>
        </div>
        <div class="card-group w-75 mx-auto">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fa fa-2x text-info"></i>
                    <h5 class="card-title text-center">Track progress</h5>
                    <p class="card-text">Track the progress of your students through the exams.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <i class="fa fa-2x fa-file text-info"></i>
                    <h5 class="card-title text-center">Results</h5>
                    <p class="card-text">Take a look at there results and see where they need a hand or some extra learning material. </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <i class="fa fa-2x text-info"></i>
                    <h5 class="card-title text-center">Stats</h5>
                    <p class="card-text">Have a look at the stats of your exams. Learn where you can improve your learning material. </p>
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