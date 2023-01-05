<html>
<?php
//include connection file
include "newdbconfig.php";
include_once('pdf/fpdf.php');

class PDF extends FPDF
{
	//page header
	function Header()
	{
		//logo or image
		$this->Image(\sms4\uploads\student_image);
		$this->SetFont('Arial','B',13);
		//move to the right
		$this->Cell(80);
		//title
		$this->(80,10,'Employee List',1,0,'C');
		//line break
		$this->Ln(20);
	}
	
	//page footer
	function Footer()
	{
		//postion at 1.5cm from the bottom
		$this->SetY(-15);
		//arial italic 8
		$this->SetFont('Arial','I',8);
		//page number
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

$diplay_heading = array('user_id'=>'ID', 'name'=>'Name','email'=>'Email','department'=>'Department','role'=>'Role'); 
{
	$result = mysqli_query($conn, "SELECT user_id, name, email, department, role FROM users WHERE...");
	$header =mysqli_query($conn, "SHOW columns FROM users WHERE ...);
	
	$pdf = new PDF();
	//header
	$pdf->AddPage();
	//footer page
	$pdf->AliasNbPages();
	$pdf->SetFont('Arial','B',16);
	foreach($header as $heading) {
		$pdf->Cell(35,10,$display_heading[$heading['Field']],1);
	}
	foreach($result as $row) {
		$pdf->SetFont('Arial', '',10);
		$pdf->Ln();
	foreach($row as $column)
	$pdf->Cell(35,10,$column,1);
	}
	$pdf->Output();
	?>
	</html>
	


		