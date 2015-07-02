<?php


require ('header.php');


  define('FPDF_FONTPATH','fonts/');

/*$sql2 = "SELECT adminno from students";
$result = $db->query($sql2);

$row = $result->fetch_assoc();
$ThisStoreNum = $row['storenum'];
$ThisStoreName = $row['storename'];*/

require('fpdf.php');

$pdf = new FPDF();
//$fpdf->SetMargins(0, 0, 0);
//$fpdf->SetAutoPageBreak(true, 0);
$pdf->SetAuthor('Walter Ballsbig');
$pdf->SetTitle('Order Form');
$pdf->SetFont('Helvetica','B',16);
$pdf->SetTextColor(0,0,0);

$pdf->AddPage('P');
//$pdf->SetDisplayMode(real,'default');

$pdf->SetXY(50,20);
$pdf->SetDrawColor(0,0,0);
$pdf->Cell(100,10,'Order Form',1,1,'C',0);
$pdf->SetFontSize(10);
$pdf->SetX(50);
$pdf->Cell(100,10, 'Barcode',1,1,'C',0);


$pdf->SetXY(10,50);
$pdf->SetFontSize(12);

$query = "SELECT adminno FROM students ";
$result = mysql_query($query);

$num_results = mysql_num_rows($result);

for ($i=0; $i <$num_results; $i++) 
{
$row = mysql_fetch_assoc($result);

$pdf->SetFontSize(12);


//$pdf->AddPage('P');
//$pdf->SetDisplayMode($real,'default');
$adm=$row['adminno'];

require('coder.php');

$MyBarCode =BarCodeIt($adm);
//echo $MyBarCode;
 
$pdf->Cell(30,6, $MyBarCode,1,0,'L',0);
}
  ob_end_clean();

$pdf->Output();

$db->close();
?>