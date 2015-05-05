<?php 
require_once('header.php');

if($_POST)
{
	$user=$_SESSION['user'];
$quantity=sanitizeString($_POST['quan']);
$bcode=sanitizeString($_REQUEST['bcode']);


	# code...
	
$uquery= "UPDATE book set quantity=('$quantity'+quantity) where barcode='$bcode' ";
 
mysql_query($uquery);

echo "book procurement succesfull <br /> <br />";
echo "<a href='bdetails.php' class='btn btn-primary btn-xs' type='submit'>View All Books</a> ";




}
?>