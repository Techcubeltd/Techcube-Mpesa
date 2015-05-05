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
	$query="INSERT INTO bookissue(barcode,studentcode,issuedate,duedate,issuedby,booktype)VALUES('$bcode','$scode','$isdate','$duedate','$user','course')";
mysql_query($query);
$uquery= "UPDATE book set quantity=(quantity-1) where barcode='$bcode' ";
 
mysql_query($uquery);

echo "book issue succesfull <br /> <br />";
echo "<a href='issues.php' class='btn btn-primary btn-xs' type='submit'>View Issued Books</a> ";




}
?>