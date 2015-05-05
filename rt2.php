<?php 
require_once('header.php');

if($_POST)
{
	$user=$_SESSION['user'];
$scode=sanitizeString($_POST['scode']);
$bcode=sanitizeString($_POST['bcode']);
$issuedate=sanitizeString($_POST['isdate']);
$retdate=sanitizeString($_POST['ret']);

$query="UPDATE  bookissue set status='returned', returndate='$retdate' where barcode='$bcode' && studentcode='$scode' ";

mysql_query($query);

$uquery= "UPDATE book set quantity=(quantity+1) where barcode='$bcode' ";

 
mysql_query($uquery);

$q2="UPDATE  `$scode.tbl` set status='returned' where bookcode='$bcode' ";
mysql_query($q2);

echo "book issue succesfull <br /> <br />";
echo "<a href='returns.php' class='btn btn-primary btn-xs' type='submit'>View Returned Books</a> ";
}
?>