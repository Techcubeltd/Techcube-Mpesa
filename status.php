<?php 
require_once('header.php');

if($_POST){
$quan=sanitizeString($_POST['quant']);
$bcode=sanitizeString($_POST['bcode']);


	# code...
	
$query= "UPDATE book set quantity=quantity+'$quan' where barcode='$bcode' ";
 
mysql_query($query);

echo "book procurement succesfull <br /> <br />";
echo "<a href='book.php' class='btn btn-primary btn-xs' type='submit'>View All Books</a> ";




}
?>