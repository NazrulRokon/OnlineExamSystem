<?php
require "apps/controller/commonPageController.php";
$check_que ="SELECT * FROM question_list WHERE que_id = 41";
$que_result = $conn->query($check_que);
$que_row = mysqli_fetch_array($que_result);
$que_id = $que_row['que_id'];
$que_topic = $que_row['que_topic'];
$que_type = $que_row['que_type'];
$que_text = $que_row['que_text'];
$opt_A = $que_row['A'];
$opt_B = $que_row['B'];
$opt_C = $que_row['C'];
$opt_D = $que_row['D'];
$correct_option = $que_row['correct_option'];
$correct_answer = $que_row['correct_answer'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>::..Pool Qsuestion List..::</title>
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
		<div class="row w-100 m-auto pb-4"  style="background-color:#eeeeee;">
			<div class="col-sm-10 mx-auto my-5">
			<div class="page-header text-center" >
                <p class="mt-3"><span class="text-success" style="font-size: 30px; font-weight: bold;"><?php echo $_SESSION['course_code']?></span> <?php echo $_SESSION['course_name']?></p>
			</div>
			<hr class="pb-1">
				
			<div class="card w-100 mx-auto bg-white" style="height: 800px;">
				<div class="card-header text-center"><h4>Question List :</h4></div>
				<div class="card-body" style="overflow-y: scroll;">
					<div class="container-fluid bg-light border rounded my-5">
						<div class="row border border-dark text-center mb-4">
							<div class="col-lg-3 bg-light"><h5>Question : <span class="text-success"><?php echo $que_id?></span></h5></div>
							<div class="col-lg-5"><h5>Question Type : <span class="text-success"><?php echo $que_type?></span></h5></div>
							<div class="col-lg-4 bg-light"><h5>Question Topic : <span class="text-success"><?php echo $que_topic?></span></h5></div>
						</div>
						<div class="row mt-4">
							<div class="col-lg-2 mr-0 pr-0">
								<h5 class="text-danger lead">Question : </h5>
							</div>
                            <div class="col-lg-10 mx-0 pr-0">
                                <h5><span><?php echo $que_text?></span></h5>
                            </div>
						</div>
						<hr class="bg-light">
						<hr class="bg-light">
						<h5 class="text-primary">Options :</h5>
                        <?php
                            echo '<div class="row mb-1">
                                    <div class="col-lg-1 mx-0 float-right">
                                        <span class="font-weight-bold mx-0 float-right">A.</span>
                                    </div>
                                    <div class="col-lg-9 ml-0 pl-0">
                                        <span class="ml-0">'.$opt_A.'</span>
                                    </div>
                                </div>';
                            echo '<div class="row mb-1">
                                    <div class="col-lg-1 mx-0 float-right">
                                        <span class="font-weight-bold mx-0 float-right">B.</span>
                                    </div>
                                    <div class="col-lg-9 ml-0 pl-0">
                                        <span class="ml-0">'.$opt_B.'</span>
                                    </div>
                                </div>';
                            echo '<div class="row mb-1">
                                    <div class="col-lg-1 mx-0 float-right">
                                        <span class="font-weight-bold mx-0 float-right">C.</span>
                                    </div>
                                    <div class="col-lg-9 ml-0 pl-0">
                                        <span class="ml-0">'.$opt_C.'</span>
                                    </div>
                                </div>';
                            echo '<div class="row mb-1">
                                    <div class="col-lg-1 mx-0 float-right">
                                        <span class="font-weight-bold mx-0 float-right">A.</span>
                                    </div>
                                    <div class="col-lg-9 ml-0 pl-0">
                                        <span class="ml-0">'.$opt_C.'</span>
                                    </div>
                                </div>';
                        ?>
						<hr class="bg-light">
						<hr class="bg-light">
						<div class="row mb-1">
							<div class="col-lg-10">
                                <?php
                                if($que_type == "MCQ")
                                    echo '<div class="row mb-4">
                                        <div class="col-lg-2 mx-0 pr-0 float-right">
                                            <span class="text-success lead mr-0 ml-1"><b>Answer : </b></span>
                                            <span class="font-weight-bold text-dark mr-1 ml-0 float-right" style="font-size: 20px">'.$correct_option.' . </span>
                                        </div>
                                        <div class="col-lg-9 ml-1 pl-0">
                                            <span class="ml-0 py-1 lead text-dark">'.$correct_answer.'</span>
                                        </div>
                                    </div>';
                                if($que_type == "Fill")
                                    echo '<div class="row mb-4">
                                        <div class="col-lg-2 mx-0 pr-0 float-right">
                                            <span class="text-success lead mr-0 ml-1"><b>Answer : </b></span>
                                        </div>
                                        <div class="col-lg-9 ml-1 pl-0">
                                            <span class="ml-0 py-1 text-dark">'.$correct_answer.'</span>
                                        </div>
                                    </div>';
                                ?>
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
    <script defer src="assets/js/fontawesome-all.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/4.7.0/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous">
	</script>
</html>