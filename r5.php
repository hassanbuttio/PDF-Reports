<?php

require('fpdf/fpdf.php');
class PDF extends FPDF{
	function Header(){
		$this->Image("logo_be.png",10,7,30,30);
		$this->setFont("Arial","",10);
		$this->Cell(50	);
        $this->Cell(70,20,'Users Report',1,0,"C");
        $this->Ln();
	}

		function Footer(){
		$this->SetY(-15);
		$this->setFont("Arial","",10);
        $this->Cell(100,10,'Page Number'.$this->PageNo().'/{nb}',1,0,"C");
	}



}
$pdf = new PDF();
$pdf->AliasNBPages();
$pdf->AddPage();
$pdf->Output("","Be Energy Report");

?>