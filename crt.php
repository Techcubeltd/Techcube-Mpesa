<?php 
require_once('header.php');

if($_POST)
{
	$user=$_SESSION['user'];
$scode=sanitizeString($_POST['scode']);
$bcode=sanitizeString($_POST['bcode']);
$issuedate=sanitizeString($_POST['isdate']);
$retdate=sanitizeString($_POST['ret']);
$duedate=sanitizeString($_POST['duedate']);


$query="UPDATE  bookissue set status='returned', returndate='$retdate',booktype='course' where barcode='$bcode' && studentcode='$scode' ";
mysql_query($query);
$uquery= "UPDATE book set quantity=(quantity+1) where barcode='$bcode' ";

if ($retdate>$duedate) {
	# code...
$diff=mysql_query("SELECT DATEDIFF('$retdate','$duedate') as diffe");
$resul=mysql_fetch_assoc($diff);

$subs=$resul['diffe'];
$insquery="INSERT INTO `fine` (`bookcode`,`studentcode`,`amount`,`status`) VALUES('$bcode','$scode','$subs','unpaid');";
		mysql_query($insquery);	

}

 
mysql_query($uquery);
echo "book return succesfull <br /> <br />";
echo "<a href='coursestd.php' class='btn btn-primary btn-xs' type='submit'>View Returned Books</a> ";
}
?>