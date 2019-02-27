<?php
    //include template
require "apps/controller/dbConnector.php";
require "apps/controller/sessionController.php";

    $query = "SELECT * FROM student WHERE user_id='$user_id'";
    $result = $conn->query($query);
    $row = mysqli_fetch_array($result);
    $name = $row['academic_name'];
    $template = "assets/img/certificate.jpg";
    $html = "<h5 align='center'>I am here</h5>";
    $para = "<p><br>Id : 142-15-3794<br>Department of CSE</p>";
    $date = date('jS F Y');

    //include dompdf library
    require ('TCPDF/tcpdf.php');
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT,'A4', true, 'UTF-8', false);
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->AddPage();
    $pdf->Image($template,0,0,209);
    $pdf->Image('assets/img/Uni-logo.png',90,22,35);
    $pdf->SetFont('broken_planew','B','28');
    $pdf->SetAbsXY('91','32');
    $pdf->Cell('30','20','Certificate of Achievement','','','C');
    $pdf->SetFont('broken_planew','B','16');
    $pdf->SetAbsXY('91','40');
    $pdf->Cell('30','20','Awarded to','','','C');

    $fontname = TCPDF_FONTS::addTTFfont('assets/fonts/lucida calligraphy italic.ttf', 'TrueTypeUnicode', '', 32);
    $pdf->SetFont($fontname,'I','9');
    $pdf->SetAbsXY('91','47');
    $pdf->Cell('30','20','Md. Raisul Islam','','','C');
    $pdf->SetFont($fontname,'I','9');
    $pdf->SetAbsXY('91','51');
    $pdf->Cell('30','20','Id: 142-15-3794','','','C');
    $pdf->SetFont($fontname,'I','9');
    $pdf->SetAbsXY('91','55');
    $pdf->Cell('30','20','Computer Science & Engineering','','','C');

    $pdf->SetFont('broken_planew','B','16');
    $pdf->SetAbsXY('91','62');
    $pdf->Cell('30','20','For','','','C');

    $pdf->SetFont($fontname,'I','9');
    $pdf->SetAbsXY('91','69');
    $pdf->Cell('30','20','Participating in the examination and successful','','','C');
    $pdf->SetFont($fontname,'I','9');
    $pdf->SetAbsXY('91','73');
    $pdf->Cell('30','20','completion with sgpa 3.50','','','C');
    $pdf->SetFont($fontname,'I','9');
    $pdf->SetAbsXY('91','80');
    $pdf->Cell('30','20','"Wishing your successful and peaceful life."','','','C');

    $pdf->SetFont($fontname,'B','10');
    $pdf->SetAbsXY('32','115');
    $pdf->Cell('40','10',$date,'','','C');
    $pdf->Line('32','125','72','125','B');
    $pdf->SetFont('broken_planew','B','12');
    $pdf->SetAbsXY('32','123');
    $pdf->Cell('40','10','Date of completion','','','C');
    $pdf->Image('assets/img/signature.png','144','115','30','10','','','C');
    $pdf->Line('140','125','180','125','B');
    $pdf->SetFont('broken_planew','B','12');
    $pdf->SetAbsXY('140','123');
    $pdf->Cell('40','10','Signature of Dean','','','C');
    $pdf->Output('certificate.pdf');
?>


