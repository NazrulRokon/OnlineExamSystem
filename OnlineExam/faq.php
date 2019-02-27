<?php
require "apps/controller/commonPageController.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>::..FAQ..::</title>
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
        <div class="row mx-auto w-100 text-center">
            <div class="container col-8 mt-lg-5 text-center">
                <h1 class="text-center mx-auto mt-2 mb-3 text-success font-weight-bold">FAQ!</h1>
                <p class="m-0" style="font-size: 22px; font-weight: 500;">Do you have any query? <a class="btn btn-info font-weight-bold" href="contact.php" style="font-weight: 200">click here</a> to ask.</p>
            </div>
        </div>
        <div class="row mx-auto w-100 text-center">
            <div class="container col-8 mb-lg-5 text-center mt-5 border p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-pills mx-auto" role="tablist" style="background-color: #B4DBB7;">
                    <li class="nav-item ml-4">
                        <a class="nav-link active  rounded-0" data-toggle="pill" href="#accountPill">Account</a>
                    </li>
                    <li class="nav-item ml-1">
                        <a class="nav-link rounded-0" data-toggle="pill" href="#examPill">Exam</a>
                    </li>
                    <li class="nav-item ml-1">
                        <a class="nav-link rounded-0" data-toggle="pill" href="#resultPill">Result</a>
                    </li>
                    <li class="nav-item ml-1">
                        <a class="nav-link rounded-0" data-toggle="pill" href="#othersPill">Others</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="accountPill" class="container tab-pane active">
                        <h3 class="my-3">Account</h3>
                        <div id="account" class=" mb-5">
                            <div class="card">
                                <div class="card-header text-justify py-2" id="accountHeadingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed p-0 font-weight-bold text-dark" data-toggle="collapse" data-target="#accountOne" aria-expanded="true" aria-controls="accountOne">
                                            Q1: How do I create an account ?
                                        </button>
                                    </h5>
                                </div>

                                <div id="accountOne" class="collapse" aria-labelledby="accountHeadingOne" data-parent="#account">
                                    <div class="card-body text-justify">
                                        <p class="mb-2">To create an account and start creating tests just go to our website <a href="index.php">www.porikkha.com</a> and click "register" in the upper-right corner of the screen.</p>
                                        <p class="m-0">Now, it's time to enter some details so that we can keep you (and your awesome tests and courses) in our database.This information is necessary for your authentication process.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header text-justify py-2" id="accountHeadingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed p-0 font-weight-bold text-dark" data-toggle="collapse" data-target="#accountTwo" aria-expanded="false" aria-controls="accountTwo">
                                            Q2: How do I cancel my account ?
                                        </button>
                                    </h5>
                                </div>
                                <div id="accountTwo" class="collapse" aria-labelledby="accountHeadingTwo" data-parent="#account">
                                    <div class="card-body text-justify">
                                        <p>To cancel your subscription you would just have to login to your account, and follow the following steps:<br><br>
                                            1. Click on your username in the right top.<br>
                                            2. Click on "my account".<br>
                                            3. There's a shiny big button on the bottom of that page saying "Delete my account.". It'll do just that!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header text-justify py-2" id="accountHeadingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed p-0 font-weight-bold text-dark" data-toggle="collapse" data-target="#accountThree" aria-expanded="false" aria-controls="accountThree">
                                            Q3: I have lost the password to my account, now what ?
                                        </button>
                                    </h5>
                                </div>
                                <div id="accountThree" class="collapse" aria-labelledby="accountHeadingThree" data-parent="#account">
                                    <div class="card-body text-justify">
                                        This might be quite frustrating for you, but the solution is quite simple!<br>
                                        Just go to this <a href="login.php">page</a>, give up your email address, wait for a nice mail to arrive in your mailbox and reset your password.<br>

                                        If this doesn't work, just send us an e-mail. We'll help you out. Please go to our <a href="contact.php">Contact</a> page.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header text-justify py-2" id="accountHeadingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed p-0 font-weight-bold text-dark" data-toggle="collapse" data-target="#accountFour" aria-expanded="false" aria-controls="accountFour">
                                            Q4: I would like to reset my password. How I can do it ?
                                        </button>
                                    </h5>
                                </div>
                                <div id="accountFour" class="collapse" aria-labelledby="accountHeadingFour" data-parent="#account">
                                    <div class="card-body text-justify">
                                        <p>
                                            <span style="font-size: 20px">How you can reset your password depends on the reason<br> why you would like to do this:</span><br><br>
                                            If you can't enter your account because you've lost it, read how to reset it here.<br><br>
                                            If you just like to change your password to something else, you can simply follow these steps:<br><br>
                                            1. Login to your account<br>
                                            2. Click on your username in the upper right corner<br>
                                            3. Select "My Account"<br>
                                            4. Select "Edit Password" in the menu on the left<br>
                                            5. Change it to something nice, like "#5welkh4sg%".
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header text-justify py-2" id="accountHeadingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed p-0 font-weight-bold text-dark" data-toggle="collapse" data-target="#accountFive" aria-expanded="false" aria-controls="accountFive">
                                            Q5: How can I update or edit my account information ?
                                        </button>
                                    </h5>
                                </div>
                                <div id="accountFive" class="collapse" aria-labelledby="accountHeadingFive" data-parent="#account">
                                    <div class="card-body text-justify">
                                        <p>
                                            If you just like to change your account information to something else, you can simply follow these steps:<br><br>
                                            1. Login to your account<br>
                                            2. Click on your username in the upper right corner<br>
                                            3. Select "My Account"<br>
                                            4. Select "Edit account info" in the menu<br>
                                            5. Change anything you want to edit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="examPill" class="container tab-pane fade">
                        <h3 class="my-3">Exam</h3>
                        <div id="exam" class="mb-5">
                            <div class="card">
                                <div class="card-header text-justify py-2" id="examHeadingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-0 font-weight-bold text-dark" data-toggle="collapse" data-target="#examOne" aria-expanded="true" aria-controls="examOne">
                                            Q1: What is online examination ?
                                        </button>
                                    </h5>
                                </div>

                                <div id="examOne" class="collapse" aria-labelledby="examHeadingOne" data-parent="#exam">
                                    <div class="card-body text-justify">
                                        <p>
                                            Online examination is conducting a test online to measure the knowledge of the participants on a given topic. In the olden days everybody had to gather in a classroom at the same time to take an exam. With online examination students can do the exam online, in their own time and with their own device, regardless where they life. You online need a browser and internet connection.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header text-justify py-2" id="examHeadingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed p-0 font-weight-bold text-dark" data-toggle="collapse" data-target="#examTwo" aria-expanded="false" aria-controls="examTwo">
                                            Q2: How Online Examination System Works ?
                                        </button>
                                    </h5>
                                </div>
                                <div id="examTwo" class="collapse" aria-labelledby="examHeadingTwo" data-parent="#exam">
                                    <div class="card-body text-justify">
                                        <p>Our online test generator will help you creating your online exam with timer. You’ve decided to give an online examination. Now you’re wondering which steps to follow to accomplish that. Good question! This article will you show a small overview that you will have to take for putting on an online examination.<br><br>
                                            <b>1. Set up the exam</b><br>
                                            It’s easy to get started with our online examination software. First you are able to write a short introduction. In this introduction you can write what participants can expect from your exam. After that, you can add questions (multiple choice, fill in the blanks or free text).<br><br>
                                            <b>2. Share the exam</b><br>
                                            You can decide the start date and the end date (including hours) for your participants to have access to the exam. After you’ve created the exam, it gives you the chance to put it online. By sharing the URL, participants are able to click on the link that will lead them to the exam.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header text-justify py-2" id="examHeadingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed p-0 font-weight-bold text-dark" data-toggle="collapse" data-target="#examThree" aria-expanded="false" aria-controls="examThree">
                                            Q3: What about online exam security ?
                                        </button>
                                    </h5>
                                </div>
                                <div id="examThree" class="collapse" aria-labelledby="examHeadingThree" data-parent="#exam">
                                    <div class="card-body text-justify">
                                        <p>Taking online tests increases the chance of cheating in comparison with paper testing. What can you do to prevent students from online cheating? Totally preventing students from cheating seems to be impossible with all the advanced technology going on today. Here are some tips and tricks that will help prevent cheating.<br><br>
                                            <b>1. Randomize questions</b><br>
                                            When taking tests, users are often getting asked questions in the same sequence. This makes it easier for participants to cheat on their exams. This is obviously not what you want to happen. In order to prevent this, you can randomize your questions. So, let's shuffle those questions! Students are not very likely to get the questions in the same sequence when taking the test.<br><br>
                                            <b>2. Set Timer</b><br>
                                            Cheating can take some time. When students are adequately prepared for their exams, it’s not necessary think a long time to fill in the right answer. Unprepared (cheating!) students can take up some time to finish their exam. A solution is to set a timer. You can set a timer for the whole exam or set a timer per question. So hurry up, the time is ticking away! No time for cheating.<br><br>
                                            <b>3. Problem-oriented questions</b><br>
                                            Problem-oriented questions do not rely on only recall of basic information. Recall of basic information is largely at Bloom's level 1 and 2. Problem-oriented questions require an understanding of spatial processes and relationships. These answers cannot easily be found in a textbook or on the internet. Problem-oriented questions address Bloom's level 3, 4 and 5.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header text-justify py-2" id="examHeadingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed p-0 font-weight-bold text-dark" data-toggle="collapse" data-target="#examFour" aria-expanded="false" aria-controls="examFour">
                                            Q4: How many types of exams and tests in this system?
                                        </button>
                                    </h5>
                                </div>
                                <div id="examFour" class="collapse" aria-labelledby="examHeadingFour" data-parent="#exam">
                                    <div class="card-body text-justify">
                                        <p>There are different test with different goals. We describe the different goals to perform a test. 		Each test can be made with our online exam builder.<br><br>
                                            <b>1. Diagnostic test</b><br>
                                            With this test you can test how much your students already know about a given subject or topic. You can use the results of this test to schedule your class. Which subjects need some extra attention. For the student this gives him or her some insights in which part of the class need some extra study hours. <br><br>
                                            <b>2. Placement test</b><br>
                                            This kind of test can be used to place the student in the appropriate class or level. For example for language classes this is often used prior to starting the class.<br><br>
                                            <b>3. Progress or Achievement tests</b><br>
                                            These tests are used to measure progress in a given subject. This will mostly follow a diagnostic test or can be in regular intervals. If you measure regularly you get a better picture of the progress of your students.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header text-justify py-2" id="examHeadingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed p-0 font-weight-bold text-dark" data-toggle="collapse" data-target="#examFive" aria-expanded="false" aria-controls="examFive">
                                            Q5: What are the objectives of our online examination system ?
                                        </button>
                                    </h5>
                                </div>
                                <div id="examFive" class="collapse" aria-labelledby="examHeadingFive" data-parent="#exam">
                                    <div class="card-body text-justify">
                                        <p>
                                            Online examination is becoming more popular in this digital century. But what are the objectives of online examination system?<br><br>
                                            1. User-friendly system<br>
                                            2. Responsive design<br>
                                            3. Offering several types of questions<br>
                                            4. Auto exam publish<br>
                                            5. Automatically checked answers<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="resultPill" class="container tab-pane fade">
                        <h3 class="my-3">Result</h3>
                        <div id="result" class="mb-5">
                            <div class="card">
                                <div class="card-header text-justify py-2" id="resultHeadingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-0 font-weight-bold text-dark" data-toggle="collapse" data-target="#resultOne" aria-expanded="true" aria-controls="resultOne">
                                            Q1: How to get my exam results ?
                                        </button>
                                    </h5>
                                </div>

                                <div id="resultOne" class="collapse" aria-labelledby="resultHeadingOne" data-parent="#result">
                                    <div class="card-body text-justify">
                                        <p>Our exambuilder checks the answers of participants and shows them their results. What’s better than 		that? It’s less work for you and learners can get an immediate insight into their results. This 		article will show you how to get your exam results online. There are two options to show to 			participants after they’ve made the test. You can choose either to show them a standard result page 	where not extra information is given about the results or you can show them their results.<br><br>
                                            <b>1. Do not show results</b><br>
                                            This is the text that will appear when participants finish their test. The content that will be shown, is up to you. For example you can write down that participants have finished the test and that you will send them a certificate whether they have passed the exam or not. It’s even possible to add a link.<br><br>
                                            <b>2. Show results</b><br>
                                            There are three options from which you can choose to show:<br><br>
                                            1. Show correct answers and score per question<br>
                                            2. Show score per question only<br>
                                            3. Do not show questions and answers
                                            <br><br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header text-justify py-2" id="resultHeadingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed p-0 font-weight-bold text-dark" data-toggle="collapse" data-target="#resultTwo" aria-expanded="false" aria-controls="resultTwo">
                                            Q5: Can I create an exam with a certificate ?
                                        </button>
                                    </h5>
                                </div>
                                <div id="resultTwo" class="collapse" aria-labelledby="resultHeadingTwo" data-parent="#result">
                                    <div class="card-body text-justify">
                                        <p>
                                            It is possible to set up a Certificate to be generated for any particular scoring range for the Exam. Here's how to set that up...<br><br>
                                            1. Select the range of pass or fail to select the examinee eligibility for certificate.<br>
                                            2. By clicking on the "certification tab" and you'll see the certificate options.<br>
                                            3. you can select your own template otherwise certificate will be generated with default template.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="othersPill" class="container tab-pane fade">
                        <h3 class="my-3">Others</h3>
                        <div id="others" class="mb-5">
                            <div class="card">
                                <div class="card-header text-justify py-2" id="othersHeadingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-0 font-weight-bold text-dark" data-toggle="collapse" data-target="#othersOne" aria-expanded="true" aria-controls="othersOne">
                                            Q1: How do I give people access to my test?
                                        </button>
                                    </h5>
                                </div>

                                <div id="othersOne" class="collapse" aria-labelledby="othersHeadingOne" data-parent="#others">
                                    <div class="card-body text-justify">
                                        So you have finished setting up your Quiz (or Exam, Assessment, Course) and now you want your users to take it..! Here's how you can share your test with the world..<br><br>
                                        1. You can share the direct link to the test.<br>
                                        2. You can use our "invite only feature" to securely invite a select group of users
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header text-justify py-2" id="othersHeadingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed p-0 font-weight-bold text-dark" data-toggle="collapse" data-target="#othersTwo" aria-expanded="false" aria-controls="othersTwo">
                                            Q2: Do I need to register to be able to attend in the exam?
                                        </button>
                                    </h5>
                                </div>
                                <div id="othersTwo" class="collapse" aria-labelledby="othersHeadingTwo" data-parent="#others">
                                    <div class="card-body text-justify">
                                        <p>No, it's not necessary for people to register before they are able to take a quiz. It's what you want.<br><br>

                                            Under the tab "User Management" in the menu of your quiz, you will find the registration options we have.<br><br>

                                            First you'll select IF you want people to register in the "user details" setting. The options are:<br>

                                            1. Required<br>
                                            2. No<br>
                                            3. Optional<br>
                                            4. Only by invite<br><br>

                                            And then you can select HOW you want people to register. The options are:<br>

                                            1. Username, email address and password (full account)<br>
                                            2. Username and email address<br>
                                            3. Username<br><br>

                                            As a last step you can then set WHEN you want people to register. The options are:<br>

                                            1. At the beginning of the quiz<br>
                                            2. At the end of the quiz
                                        </p>
                                    </div>
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