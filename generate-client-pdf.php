<?php

include "db.php";
include_once('pdf/fpdf.php');
 
class PDF extends FPDF
{


function Header()
{

    $this->Image('https://i.pinimg.com/564x/ab/11/1f/ab111f37f0cdd0f9f0f92c3c7ff20ce8--self-branding.jpg',10,5,30);
    $this->SetFont('Times','B',15);

    $this->Cell(50);

    $this->Cell(90,10,'REPORT',0,0,'C');

    $this->Ln(30);
    $this->Cell(50);
    $this->Cell(110,10,'DETAILS OF REVENUE PROVIDERS',1,0,'C');

    $this->Ln(30);
}
 
function Footer()
{

    $this->SetY(-15);
    $this->SetFont('Times','B',14);
    $this->Cell(90,10,'Signature of the Verifier',1,0,'C');
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

}
}
 
$display_heading = array('client_id'=>'ID', 'name'=> 'Name','staff_id'=> 'STAFF ID', 'date_of_expiry'=>'PROJ END', 'amount'=>'Amount');
 
$result = mysqli_query($conn, "SELECT client_id, name, staff_id, date_of_expiry,amount FROM client") or die("database error:". mysqli_error($conn));
$header = mysqli_query($conn, "SHOW columns FROM client WHERE field NOT IN ('revenue','mobileno','type_of_partnership','date_of_signing') ");
 
$pdf = new PDF();

$pdf->AddPage();

$pdf->AliasNbPages();
$pdf->SetFont('Times','B',16);
foreach($header as $heading) {
$pdf->Cell(35,10,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->SetFont('Times','',12);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(35,10,$column,1);
}
$pdf->Output();
?>
