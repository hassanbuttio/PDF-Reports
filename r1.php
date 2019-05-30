<?php

require('fpdf/fpdf.php');
$fpdf = new FPDF();
$fpdf->SetTitle("Be Energy");
$fpdf->SetTopMargin(40);

$fpdf->AddPage();
$fpdf->SetFont("Arial","",10);
/*Left, Top, width, Height*/
$fpdf->Image("logo_be.png",10,7,30,30);
/*width height text border another cell  textalign*/


$fpdf->Cell(50,11,"Hello World Text FPDF1", 1,1,"C");
$fpdf->Cell(50,11,"Hello World Text FPDF2", 1,1,"C");


$fpdf->Output();
?>