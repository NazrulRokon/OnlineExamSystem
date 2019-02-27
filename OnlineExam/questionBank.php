<?php
require "apps/controller/dbConnector.php";
require "apps/controller/commonPageController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>::..Question Bank(Finished Exam)..::</title>
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
<div class="row w-100 m-auto" style=" background-color:#f1f8e9;">
    <div class="col-md-10 mx-auto col px-5 pt-2 main mx-4 mt-4 border" style="min-height: 1000px;">
        <div class="page-header">
            <h2 class="text-center">Question Bank <smal class="text-success">(Finished exam)</smal></h2>
        </div>
        <p class="lead text-center">Find question or finished exam here.</p>
        <hr>
        <div class="row p-0">
            <div class="col-md-12">
                <form class="form-inline ml-4" role="form">
                    <div class="form-group">
                        <label for="filter" class="mx-1">Institute type :</label>
                        <select class="form-control mr-3 my-2">
                            <option value="0" selected>Select an option</option>
                            <option value="0">University</option>
                            <option value="1">College</option>
                            <option value="1">High School</option>
                        </select>
                    </div>
                    <input type="text" class="form-control mr-3 my-2" placeholder="Enter institute name">
                    <input type="text" class="form-control mr-3 my-2" placeholder="Exam pool code">
                    <button type="submit" class="btn btn-primary mx-2 my-2"  id="searchExamPool"><span class="fa fa-search" aria-hidden="true"></span>Search</button>
                </form>
            </div>
        </div>
        <hr>

        <div class="container border rounded p-3"  style="height:700px; overflow-y: scroll; box-shadow: 1px 1px 20px gray;">
            <div class="row w-100 mx-auto">

                <?php
                $pool_query = "SELECT * FROM exam_pools";
                $pool_exists = $conn->query("$pool_query");
                $count_pool = mysqli_num_rows($pool_exists);

                $current_date = date("Y-m-d");
                $current_time = time();
                $current_time = strtotime($current_time);
                $current_time = date("H:i:s");

                if ($count_pool > 0) {
                    While ($pool_row = mysqli_fetch_array($pool_exists)) {
                        $pool_id = $pool_row['pool_id'];
                        $pool_type = $pool_row['que_type'];
                        $course_code = $pool_row['course_code'];
                        $course_name = $pool_row['course_name'];
                        $pool_token = $pool_row['pool_token'];
                        $que_setter_email = $pool_row['que_setter_email'];
                        $exam_date = $pool_row['exam_date'];
                        $start_time = $pool_row['start_time'];
                        $ending_time = $pool_row['ending_time'];
                        $co_id = $pool_row['co_id'];
                        $pool_approved = $pool_row['approved'];
                        $institute_name = $pool_row['institute_name'];
                        $duration = $pool_row['duration'];
                        $num_of_que = $pool_row['num_of_exam_que'];

                        $_SESSION['pool_id'] = $pool_id;
                        $_SESSION['course_code'] = $course_code;
                        $_SESSION['course_name'] = $course_name;

                        $co_query = "SELECT * FROM co_ordinator WHERE co_id='$co_id'";
                        $co_exists = $conn->query("$co_query");
                        $co_row = mysqli_fetch_array($co_exists);
                        $co_name = $co_row['academic_name'];

                        $date_time = $current_date." ".$current_time;

                        if ($current_date < $exam_date)
                            $status = "Upcoming";
                        else if ($current_date < $exam_date && $start_time<$current_time && $ending_time>$current_time)
                            $status = "Running";
                        else if ($current_date > $exam_date)
                            $status = "ended";
                        if($current_date>$exam_date) {
                            echo '<div class="card col-lg-12 mx-auto p-0 my-3" style="box-shadow: 1px 1px 10px black;">
                                <div class="card-header p-0">
                                    <div class="col-lg-4 px-3 py-2 float-left text-success text-center">
                                        <span style="font-weight: 800; font-size: 24px;">' . $course_code . '</span><small class="text-secondary">' . $course_name . '</small>
                                        <span class="badge badge-info">' . $pool_type . '</span>
                                    </div>
                                    <div class=" btn-group col-lg-3 py-3 ml-4 float-left text-center">
                                        <span style="font-weight: 800; font-size: 16px;"><span class="text-primary" style="font-size: 18px;">Start At : </span><span id="demo">' . $start_time . '</span></span>
                                    </div>
                                    <div class=" btn-group col-lg-3 py-3 px-1 float-left text-center">
                                        <span style="font-weight: 800; font-size: 16px;"><span class="text-primary" style="font-size: 18px;">End At : </span><span id="demo">' . $ending_time . '</span></span>
                                    </div>
                                    <div class=" btn-group col-lg-1 py-3 px-lg-2 ml-lg-2 float-left">
                                        <a class="btn btn-sm btn-success rounded mx-1"  data-toggle="tooltip" title="Enter exam pool" href="poolQue&AnsList.php"><i class="fa fa-play"></i></a>
                                        <button class="btn btn-sm btn-info rounded mx-1"   data-toggle="modal" title="See Information"  data-target="#infoModalExam"><i class="fa fa-info-circle"></i></button>
                                        <div class="modal fade" id="infoModalExam">
                                             <div class="modal-dialog">
                                                <div class="modal-content">

                                                  <!-- Modal Header -->
                                                  <div class="modal-header">
                                                    <h4 class="modal-title">Exam pool information</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  </div>

                                                  <!-- Modal body -->
                                                  <div class="modal-body text-center">
                                                    <small><b>Institue : </b>' . $institute_name . '</small>
                                                    <p><b>Course name : </b>' . $course_name . '</p>
                                                    <p><b>Institute : </b>' . $institute_name . '</p>
                                                    <p><b>Question Setter : </b>' . $que_setter_email . '</p>
                                                    <p><b>Exam date : </b>' . $exam_date . '</p>
                                                    <p><b>Duration : </b>' . $duration . ' hr</p>
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
                                        <small><b>Institue : </b>' . $institute_name . '</small>
                                    </div>
                                    <div class="col-sm-4 pt-3 float-left text-center">
                                        <small><b>Duration : </b>' . $duration . ' hr</small>
                                    </div>
                                    <div class="col-sm-3 pt-3 float-left text-right">
                                        <b>Status : </b>' . $status . '
                                    </div>
                                </div>
                            </div>';
                        }
                    }
                }
                ?>

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