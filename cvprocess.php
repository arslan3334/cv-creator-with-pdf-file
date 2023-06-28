<?php




extract($_REQUEST);


if (isset($create)) {
	







require_once("FPDF/fpdf.php");


$cv = new FPDF();
$cv->AddPage("P", "Legal", 0);

$cv->setFillColor(230, 230, 230);
$cv->setTextcolor(0, 0, 102);
$cv->setFont("Times","B",35);
$cv->Cell(110,10,$name,0,1,"L", true);



$cv->setFont("Times","",14);
$cv->ln(10);
$cv->setFillColor(242, 242, 242);
$cv->MultiCell(0,5,$desc,0,"C",true);
$cv->setDrawColor(0, 0, 102);
$cv->setLineWidth(2);
$cv->ln(10);
$cv->Line(0, 65, 500, 65);

$cv->setFillColor(242, 242, 242);
$cv->setTextcolor(0, 0, 102);
$cv->Image("images/".$img, 170, 60, 40);
$cv->Cell(100,10,"CONTACT",0,2,"L",true);

$cv->Cell(100,10,"EMAIL :".$email,0,2,"L",true);
$cv->Cell(100,10,"ADDRESS :".$addr,0,2,"L",true);

$cv->Cell(100,10,"PHONE :".$phone,0,2,"L",true);
$cv->Cell(100,10,"LINKED PROFILE :".$linked,0,2,"L",true);
$cv->ln(5);
$cv->setDrawColor(0, 0, 102);
$cv->setLineWidth(2);
$cv->ln(2);
$cv->Line(0, 120, 500, 120);
$cv->Cell(100,10,"WORK EXPERIENCE AND CERTIFICATIONS",0,2,"L",true);
$cv->MultiCell(100,10,$workexp,0,2,"L",true);
$cv->ln(10);
$cv->Cell(100,10,"HARD SKILLS",0,2,"L",true);
$cv->Cell(100,10,$skill1,0,0,"L",true);
$cv->Cell(100,10,"LEVEL OF PROFICENCY:". $level1,0,1,"L",true);
$cv->Cell(100,10,$skill2,0,0,"L",true);
$cv->Cell(100,10,"LEVEL OF PROFICENCY:".$level2,0,1,"L",true);
$cv->Cell(100,10,$skill3,0,0,"L",true);
$cv->Cell(100,10,"LEVEL OF PROFICENCY:".$level3,0,1,"L",true);
$cv->Cell(100,10,$skill4,0,0,"L",true);
$cv->Cell(100,10,"LEVEL OF PROFICENCY:".$level4,0,2,"L",true);


$cv->ln(10);
$cv->Line(0, 215, 500, 215);

$cv->ln(10);
$cv->Line(0, 290, 500, 290);
$cv->Cell(150,10,"EDUCATION",0,2,"L",true);
$cv->Cell(150,10,"NAME OF DEGREE   :". $degree,0,2,"L",true);

$cv->Cell(150,10,"STARTING OF DEGREE   : ".$fromd,0,2,"L",true);
$cv->Cell(150,10,"ENDING OF DEGREE   : ".$tod,0,2,"L",true);

$cv->Output("I", "MyFile");



}







?>