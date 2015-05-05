<?php 
require_once('header.php');

if($_POST)
{
	$user=$_SESSION['user'];
$scode=sanitizeString($_POST['scode']);
$bcode=sanitizeString($_POST['bcode']);
$isdate=sanitizeString($_POST['isdate']);
$duedate=sanitizeString($_POST['duedate']);

	# code...
	$query="INSERT INTO bookissue(barcode,studentcode,issuedate,duedate,issuedby,issuedto)VALUES('$bcode','$scode','$isdate','$duedate','$user','staff')";
mysql_query($query);
$uquery= "UPDATE book set quantity=(quantity-1) where barcode='$bcode' ";
 
mysql_query($uquery);

$tablequery="CREATE TABLE IF NOT EXISTS `$scode.tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bookcode` int(11) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'issued',
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
 
) ";
mysql_query($tablequery);

$insquery="INSERT INTO `$scode.tbl` (`bookcode`) VALUES('$bcode');";
		mysql_query($insquery);	



echo "book issue succesfull <br /> <br />";
echo "<a href='staffissues.php' class='btn btn-primary btn-xs' type='submit'>View Issued Books</a> ";




}
?>