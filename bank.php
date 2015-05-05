<?php 
include('header.php');

//if($_POST)
//{
	//$user=$_SESSION['user'];
if( $_POST ){

  //$fname = sanitizeString($_POST['stream']);

//   $query ="INSERT INTO stream (name)
  //VALUES('$fname');";

$nam=sanitizeString($_POST['bank']);
$snam=sanitizeString($_POST['bcode']);

$rec=sanitizeString($_POST['bankrec']);


	$query="INSERT INTO  bank(bankn,adminno,bankreceipt)VALUES('$nam','$snam','$rec');";
	
	mysql_query($query);

echo "Bank ITEM created succesfully <br /> <br />";
// echo "<a href='javascript:window.open('','_self').close();'>close</a> ";
}
?> 