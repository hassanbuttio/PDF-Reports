<?php

require('fpdf/fpdf.php');

class PDF extends FPDF{
	function Header(){
		$this->Image("logo_be.png",10,7,30,30);
		$this->SetFont("Arial","B",10);
        $this->Cell(60);
        $this->Cell(70,20,'Users Report',1,0,"C");
        $this->Cell(60,20,"Date #:",0,2,"C");
        $this->Ln(20);
	}

		function Footer(){
		$this->SetY(-15);
		$this->SetFont("Arial","B",10);
        $this->Cell(0,10,'Page Number'.$this->PageNo().'/{nb}',0,0,"C");
	}
}
$pdf = new PDF();
$pdf->AliasNBPages();
$pdf->AddPage();
$pdf->SetTitle("Users Report Be Energy");

$pdf->SetFont("Arial","B",10);

$pdf->Cell(23,10,"SR.No",1,0,"C");

$pdf->Cell(35,10,"Username",1,0,"C");

$pdf->Cell(35,10,"Fullname",1,0,"C");
$pdf->Cell(45,10,"Email",1,0,"C");

$pdf->Cell(22,10,"Type",1,0,"C");

$pdf->Cell(22,10,"Status",1,1,"C");

$pdf->Cell(23,10,"",1,0,"C");
$pdf->Cell(35,10,"",1,0,"C");
$pdf->Cell(35,10,"",1,0,"C");
$pdf->Cell(45,10,"",1,0,"C");
$pdf->Cell(22,10,"",1,0,"C");
$pdf->Cell(22,10,"",1,0,"C");

$pdf->Output("","Be Energy Report");

?>