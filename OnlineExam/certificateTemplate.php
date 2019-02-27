<?php
require "apps/controller/dbConnector.php";
require "apps/controller/sessionController.php";

$query = "SELECT * FROM student WHERE user_id='$user_id'";
$result = $conn->query($query);
$row = mysqli_fetch_array($result);
$name = $row['academic_name'];
$date = date('jS F Y');
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Certificate</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
            @font-face {
                font-family: "Calligraphy";
                src: url(assets/fonts/broken_planew.ttf);
                font-weight: bold;
            }
            .navbar{
                opacity: 0.7;
            }
            .navbar:hover{
                opacity: .9;
            }
            .txt{
                color: #cccccc;
            }
            a{
                color: #cccccc;
            }
            a:hover{
                color: #ffffff;
            }
        </style>
    </head>
    <body>
    <div class=" navbar bg-dark w-100" style="position: fixed; z-index: 3; height: 40px;">
        <div class="col-4 p-0" id="">
            <p class="txt mx-0">Certificate of <?php echo $name;?></p>
        </div>
        <div class="col-4 text-center p-0" id="">
            <p class="txt mx-0">1/1</p>
        </div>
        <div class="col-4 text-lg-right" id="">
            <p class="text-white mx-0">
                <a class="m-2 p-0" href="certificateTemplate.php"><i class="fa fa-spinner p-0 m-0"></i></a>
                <a class="mx-2 p-0" href="certificateGenerate.php"><i class="fa fa-download p-0 m-0"></i></a>
                <a class="m-2 p-0" href="#"><i class="fa fa-print p-0 m-0"></i></a>
            </p>
        </div>
    </div>
    <img src="assets/img/certificate.jpg" class="w-100 m-0 p-0" style="position: absolute; z-index: 2;">
    <div id="HTMLtoPDF">
        <div class="container" style="position: relative; z-index: 2;" id="container">
            <div class="row w-100 mx-auto">
                <div class="col-4"></div>
                <div class="col-4 mx-auto text-center" style="margin-top: 150px;"><img class="mx-auto" src="assets/img/Uni-logo.png"></div>
                <div class="col-4"></div>
            </div>
            <div class="row w-100 mx-auto">
                <div class="col-3"></div>
                <div class="col-6 mt-2 text-center"><h3 class="mx-auto font-weight-bold" style="font-family: 'Calligraphy'; font-size: 60px;">Certificate of Completion</h3></div>
                <div class="col-3"></div>
            </div>
            <div class="row w-100 mx-auto">
                <div class="col-3"></div>
                <div class="col-6 text-center"><h3 class="mx-auto font-weight-bold" style="font-family: 'Calligraphy'; font-size: 32px;">Awarded to</h3></div>
                <div class="col-3"></div>
            </div>
            <div class="row w-100 mx-auto">
                <div class="col-3"></div>
                <div class="col-6 text-center">
                    <p class="mx-auto" style="font-family: 'Lucida Calligraphy'; font-size: 18px;">
                        <?php echo"$name<br>";?>
                        Id : 142-15-3794
                        <br>Department of CSE</p>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row w-100 mx-auto">
                <div class="col-3"></div>
                <div class="col-6 text-center"><h3 class="mx-auto font-weight-bold" style="font-family: 'Calligraphy'; font-size: 32px;">For</h3></div>
                <div class="col-3"></div>
            </div>
            <div class="row w-100 mx-auto">
                <div class="col-3"></div>
                <div class="col-6 text-center">
                    <p class="mx-auto" style="font-family: 'Lucida Calligraphy'; font-size: 18px;">
                        Participating in the examination and successful completion with cgpa 3.50
                    </p>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row w-100 h-25 mx-auto">

            </div>
            <div class="row w-100 mx-auto">
                <div class="col-1 text-center">

                </div>
                <div class="col-3 text-center text-dark">
                    <p class="mx-auto mt-4 mb-2 font-weight-bold" style="font-family: 'Lucida Calligraphy'; font-size: 18px;">
                        <?php echo $date;?>
                    </p>
                    <p class="mx-auto border-dark border-top font-weight-bold" style="font-family: 'Calligraphy'; font-size: 24px;">
                        Date of completion
                    </p>
                </div>
                <div class="col-4 text-center">

                </div>
                <div class="col-3 ml-4 mr-0 text-center text-dark">
                    <img class="w-50" src="assets/img/signature.png">
                    <p class="mx-auto border-dark border-top font-weight-bold" style="font-family: 'Calligraphy'; font-size: 24px;">
                        Signature of Dean
                    </p>
                </div>
                <div class="col-1 text-center">

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    </body>
</html>