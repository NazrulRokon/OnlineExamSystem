<?php
require "../apps/controller/examPanelController.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>::..Exam Panel..::</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/home.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/custom-all.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/custom-footer.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/scrolltop.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/fa-svg-with-js.css">
        <link type="text/css" rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/examPanel.css">

        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row w-100 m-auto main-nav">
            <div class="col-sm-2 pt-3">
                <span class="text-success font-weight-bold" style="font-size: 24px;">Smart</span><span class="text-danger" style="font-size: 22px">Exam</span>
            </div>
            <div class="col-sm-4 m-auto">
                <div class="col-sm-6 bg-success px-0 pt-2 text-center m-auto">
                    <span class="mx-0 px-0">Current Time : </span>
                    <hr class="py-0 my-0 bg-dark">
                    <div id="clock">
                        <span class="unit font-weight-bold" id="hours" style="font-size: 24px;"></span><span style="font-size: 24px;"> : </span>
                        <span class="unit font-weight-bold" id="minutes" style="font-size: 24px;"></span><span style="font-size: 24px;"> : </span>
                        <span class="unit font-weight-bold" id="seconds" style="font-size: 24px;"></span>
                        <span class="unit font-weight-bold" id="ampm" style="font-size: 24px;"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 m-auto">
                <div class="col-sm-6 bg-info px-0 pt-2 text-center m-auto">
                    <span class="mx-0 px-0">Remaining Time : </span>
                    <hr class="py-0 my-0 bg-dark">
                    <span id="demo" class="font-weight-bold" style="font-size: 24px;"></span>
                </div>
            </div>
            <div class="col-sm-2 pt-3">
                <p class="text-light float-right mr-3"><i class="fa fa-user"> </i><span id="stdFullName"> <span id="acaAdminFullName"><?php echo " ".$fullname; ?></span></span></p>
            </div>
        </div>
        <div class="row w-100 m-auto" >
            <div class="col-lg-9  border-secondary border-right">
                <div class="row bg-light" style="border-bottom: 3px #67A8D7 solid">
                    <div class="col-lg-4 py-4">
                        <span class=""><h5 class="m-0"><span class="text-success font-weight-bold">CSE 112</span> <small>Computer Fundamentals</small></h5></span>
                    </div>
                    <div class="col-lg-5 pt-4 pb-2 text-center">

                    </div>
                    <div class="col-lg-3 py-3">
                        <button class="btn btn-secondary float-right">View Instruction</button>
                    </div>
                </div>
                <div class="row px-3 pb-5" style="overflow-y: scroll; max-height: 600px;">
                    <div class="row w-100 mx-auto mb-5" style="border-bottom: 3px #67A8D7 solid; background-color: #D7D7D7">

                        <?php foreach ($candidate_ans_row as $candidate_que):?>
                        <?php
                        $que_query = "SELECT * FROM question_list WHERE que_id = '$candidate_que[3]'";
                        $que_exists = $conn->query("$que_query");
                        $que_row = mysqli_fetch_array($que_exists);
                        $que_type = $que_row['que_type'];
                        $que_text = $que_row['que_text'];
                        $opt_A = $que_row['A'];
                        $opt_B = $que_row['B'];
                        $opt_C = $que_row['C'];
                        $opt_D = $que_row['D'];
                        $correct_ans = $que_row['correct_answer'];

                        $_SESSION['que_no']=$candidate_que[0]
                        ?>

                        <div class="col-lg-6 py-2 pb-2 text-left">
                            <span class=""><h5 class="m-0"><span class="text-success font-weight-bold">Question No : </span> <small><?php echo $candidate_que[0];?></small></h5></span>
                        </div>
                        <div class="col-lg-6 py-2 pb-2 text-right">
                            <span class=""><h5 class="m-0"><span class="text-success font-weight-bold">Question Type : </span> <small><?php echo $que_type;?></small></h5></span>
                        </div>
                    </div>
                    <div class="row w-100 pb-4 mb-5 mx-auto" style="border-bottom: 3px orange solid">
                        <div class="col-lg-10">
                            <p style="font-size: 20px;"><span class="text-danger font-weight-bold">Question : </span><span><?php echo $que_text;?></span></p>
                        </div>
                    </div>


                    <?php
                    if($que_type == "MCQ") {
                        echo ' <div class="row w-100 pb-1 mx-auto">
                        <div class="col-lg-10">
                            <p class="font-weight-bold" style="font-size: 20px;">Please select the correct answer from below.</p>
                        </div>
                    </div>
                    <div class="row w-100 pb-4 mb-5 mx-auto">
                        <div class="col-lg-10">
                            <!--Radio group-->
                            <div class="radio">
                                    <div class="control-group">
                                        <label class="control control--radio">
                                            <input type="radio" name="radio_btn" value="A"/>
                                            <div class="control__indicator"></div>'.$opt_A.'
                                        </label>
                                        <label class="control control--radio">Plotter
                                            <input type="radio" name="radio_btn"  value="B"/>
                                            <div class="control__indicator"></div>'.$opt_B.'
                                        </label>
                                        <label class="control control--radio">Scanner
                                            <input type="radio" name="radio_btn"  value="C"/>
                                            <div class="control__indicator"></div>'.$opt_C.'
                                        </label>
                                        <label class="control control--radio">None of these
                                            <input type="radio" name="radio_btn"  value="D"/>
                                            <div class="control__indicator"></div>'.$opt_D.'
                                        </label>
                                    </div>
                                </div>';
                            }
                            else{
                                echo '<div class="row w-100 pb-1 mx-auto">
                                            <div class="col-lg-10">
                                                <p class="font-weight-bold" style="font-size: 20px;">Please enter correct answer below.</p>
                                            </div>
                                        </div>
                                        <div class="row w-100 pb-4 mb-5 mx-auto">
                                            <div class="col-lg-10">
                                            <div class="form-group">
                                              <label for="answer">Answer:</label>
                                              <input name="answer_txt" type="text" class="form-control border-dark" id="answer" placeholder="Enter your answer">
                                            </div>';
                            }
                            ?>
                            <!--Radio group-->


                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>
            </div>
            <div class="col-lg-3 border-secondary border-left">
                <div class="row w-100 mx-auto" style="border-bottom: 3px #67A8D7 solid">
                    <div class="col-lg-12 py-4">
                        <h5 class="m-0">Question Panel</h5>
                    </div>
                </div>
                <div class="col-lg-12 px-3 mt-3 mx-auto">

                        <?php for($i=1;$i<=$pages;$i++): ?>
                            <?php if($i<10){ ?>
                                <a id="active" href="?page=<?php echo  $i ?>" class="btn btn-secondary rounded-circle font-weight-bold ml-1 mt-3">0<?php echo  $i ?></a>
                            <?php } else {?>
                                <a id="active" href="?page=<?php echo  $i ?>" class="btn btn-secondary rounded-circle font-weight-bold ml-1 mt-3"><?php echo  $i ?></a>
                        <?php } endfor; ?>

                </div>
            </div>
        </div>
        <div class="row w-100 mx-auto mt-3 footer position-fixed" style="bottom: 0px;">
            <div class="col-lg-4 py-2">
                <span class="text-light" style="font-size: 24px;">Duration<span class="time"> 00:20:00</span></span>
            </div>
            <div class="col-lg-4 py-2 text-center">
                <button class="btn btn-success rounded mr-3 py-2 font-weight-bold">Submit <i class="fa fa-check-circle"></i></button>
            </div>
            <div class="col-lg-4 py-2">
                <div class="btn-group float-right mr-5">
                    <a href="?page=<?php $prev_page = $page-1; echo  $prev_page; ?>" class="btn btn-danger rounded mr-3 py-2 font-weight-bold"><i class="fa fa-arrow-circle-left"></i> Previous</a>
                    <a href="?page=<?php $next_page = $page+1; echo  $next_page; ?>" class="btn btn-success rounded py-2 px-4 font-weight-bold">Next <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="../assets/js/custom-all.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="../assets/js/scrolltop.js"></script>
    <script defer src="../assets/js/fontawesome-all.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/4.7.0/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/current_timer.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    <script>
        // Set the date we're counting down to
        var ending_date = "<?php echo $ending_date?>";
        var countDownDate = new Date(ending_date).getTime();
        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML =hours+"h "+minutes + "m " + seconds +"s ";

            // If the count down is over, write some text
            if (countDownDate<now+10000) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "Time Up";
            }
        }, 1000);
    </script>

    <script type="text/javascript" src="../assets/js/jquery-timer.js"></script>

    <script>
        $(document).ready(function(){
            $('input[type="radio"]').click(function(){
                var radio_btn = $(this).val();
                $.ajax({
                    url:"../apps/controller/insertCandidateAnsController.php",
                    method:"POST",
                    data:{radio_btn:radio_btn},
                    success:function(data){
                        $('#result').html(data);
                    }
                });
            });

            $('input[type="text"]').keydown(function(){
                var answer_txt = $(this).val();
                $.ajax({
                    url:"../apps/controller/insertCandidateAnsController.php",
                    method:"POST",
                    data:{answer_txt:answer_txt},
                    success:function(data){
                        $('#result').html(data);
                    }
                });
            });
        });
    </script>
</html>
