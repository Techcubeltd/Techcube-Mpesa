<?php require_once('header.php');
//mysql_select_db($database_conn, $conn);
//"SELECT type, COUNT(name) FROM products GROUP BY type"; 
//$_REQUEST['user'];
if ($_POST) {
	# code...	
	$status=sanitizeString($_POST['status']);

$query_Products = "SELECT * from book where library='$status' ";

$Products = mysql_query($query_Products) or die(mysql_error());
$row_Products = mysql_fetch_assoc($Products);
$totalRows_Products = mysql_num_rows($Products);

?>
<?php
define('FPDF_FONTPATH', 'fonts/');
require('fpdf.php');

class PDF extends FPDF
{
//Page header
function Header()
{
	$this->Image('images/logo.jpg',5);
	$this->Ln();
		$this->SetFont('Times','B',20);
		$this->SetFillColor(255);
//		$this->SetTextColor(0,0,255);
		
		
		
		$this->Cell(200, 6,'Inventory Report', 0, 0, 'C', 1);
		
		$this->Ln();
	
		$this->Ln();
		//Colors, line width and bold font
		$this->SetFillColor(0,100,100);
		$this->SetTextColor(255);
		$this->SetDrawColor(100,0,0);
		$this->SetLineWidth(.3);
		$this->SetFont('Times','B',15);
		//Header

		$header=array('Barcode','Title','Quantity','Status','library book');
		$w=array(30,60,30,20,30);
		$this->Cell(20);
		for($i=0;$i<count($header);$i++)
			$this->Cell($w[$i],7,$header[$i],1,0,'C',1);
		$this->Ln();
		//Color and font restoration
		$this->SetFillColor(224,235,255);
		$this->SetTextColor(0);
		$this->SetFont('');	
}
}
//Page footer
function Footer()
{
	$this->SetY(-15);			// Position at 1.5 cm from bottom
	$this->SetFont('Arial','I',8);		// Arial italic 8

$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

	// Page number
}


//Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

//$result=mysql_query($StockDetails);


do {
	$pdf->Cell(20);
	$pdf->Cell(30, 6,$row_Products['barcode'] ,1 , 0,'L');
	$pdf->Cell(60, 6,$row_Products['title'] ,1 , 0,'L');
	$pdf->Cell(30, 6, $row_Products['quantity'], 1, 0, 'L');
	$pdf->Cell(20, 6, $row_Products['status'], 1, 0, 'L');
	$pdf->Cell(30, 6, $row_Products['library'], 1, 0, 'L');
	$pdf->Ln();
} while($row_Products = mysql_fetch_assoc($Products));
ob_end_clean();
$pdf->Output();
mysql_free_result($Products);
}
?>
