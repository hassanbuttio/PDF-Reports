<?php

require('fpdf/fpdf.php');

class PDF extends FPDF{
	function Header(){
		$this->Image("logo_be.png",10,7,30,30);
		$this->SetFont("Arial","B",10);
        $this->Cell(60);
        $this->Cell(70,20,'Complain Report',1,0,"C");
        $this->Cell(60,20,"Complain #:",0,2,"C");
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
$pdf->SetTitle("Complain Report Be Energy");

$pdf->SetFont("Arial","B",10);

$pdf->Cell(45,10,"Complainer",1,0,"L");

$pdf->Cell(45,10,"",1,0,"L");

$pdf->Cell(45,10,"Subject",1,0,"L");

$pdf->Cell(45,10,"",1,1,"L");

$pdf->Cell(45,10,"Department",1,0,"L");

$pdf->Cell(45,10,"",1,0,"L");

$pdf->Cell(45,10,"Status",1,0,"L");

$pdf->Cell(45,10,"",1,1,"L");

$pdf->Cell(45,50,"Complain",1,0,"L");

$pdf->Cell(135,50,"",1,1,"L");


$pdf->Cell(45,50,"Remarks",1,0,"L");

$pdf->Cell(135,50,"",1,1,"L");


$pdf->Cell(45,10,"Priority",1,0,"L");

$pdf->Cell(45,10,"",1,0,"L");

$pdf->Cell(45,10,"Date of Complain",1,0,"L");

$pdf->Cell(45,10,"",1,0,"L");
$pdf->Ln(80);

$pdf->Cell(100,20,"Sheikh Karim (Head Manager IT)",1,0,"L");

$pdf->Cell(80,20,"",1,0,"L");

$pdf->Output("","Be Energy Report");

?>