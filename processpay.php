<?php 
include('header.php');

//if($_POST)
//{
	$user=$_SESSION['user'];
if( $_POST ){

  //$fname = sanitizeString($_POST['stream']);

//   $query ="INSERT INTO stream (name)
  //VALUES('$fname');";

$pdate=sanitizeString($_POST['pdate']);
$recpt=sanitizeString($_POST['recpt']);
$mode=sanitizeString($_POST['mode']);
$paid=sanitizeString($_POST['paid']);
$bal=sanitizeString($_POST['bal']);
$bcode=sanitizeString($_POST['bcode']);



	$query="INSERT INTO  feepay(adminno,paidamnt,adjustedbalance,pmode,paydate,financialyr,recordedby)VALUES('$bcode','$paid','$bal','$mode','$pdate','2015','$user');";
	
	mysql_query($query);

echo "FEE ITEM created succesfully <br /> <br />";
echo "<a href='javascript:window.open('','_self').close();'>close</a> ";
//echo "<a href='feeitems.php' class='btn btn-primary btn-xs' type='submit'>View Returned Books</a> ";
}
?> 