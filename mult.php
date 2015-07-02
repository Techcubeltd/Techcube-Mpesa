
<?php

include('header.php');
// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('E-school Manager');
$pdf->SetTitle('Book Barcodes');
$pdf->SetSubject('Barcodes');
$pdf->SetKeywords('bc, PDF, codes, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 049', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 10);

// add a page
$pdf->AddPage();




$query="select * from book";
$result=mysql_query($query);
/*$row=mysql_fetch_assoc($result);
$quan=$row['employeecode'];
*/
 while ($row=mysql_fetch_assoc($result)) {
 	$bc=$row['barcode'];
 	$params = $pdf->serializeTCPDFtagParameters(array('$bc', 'CODE39', '', '', 0, 0, 0.2, array('position'=>'S', 'border'=>false, 'padding'=>4, 'fgcolor'=>array(0,0,0), 'bgcolor'=>array(255,255,255), 'text'=>false, 'font'=>'helvetica', 'fontsize'=>8, 'stretchtext'=>2), 'N'));
$str='<table cellspacing="0" cellpadding="1" border="0"><tr><td align="left">barcode</td></tr><tr><td align="center" style="padding-left:5px;">';
    $str .= '<tcpdf method="write1DBarcode" params="'.$params.'" />';
    $str .='</td></tr></table>';

$pdf->writeHTML($str,true, false,false,false,'left');
$pdf->Output('barcodes.pdf', 'I');

 }


?>
