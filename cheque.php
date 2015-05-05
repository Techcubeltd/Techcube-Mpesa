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
$bank=sanitizeString($_POST['bcode']);
$admin=sanitizeString($_POST['bcode']);
$cdate=sanitizeString($_POST['cdate']);


	$query="INSERT INTO cheque(chequeno,adminno,bankbranch,bank)VALUES('$nam','$snam','$rec');";
	
	mysql_query($query);

echo "Bank ITEM created succesfully <br /> <br />";
// echo "<a href='javascript:window.open('','_self').close();'>close</a> ";
}
?> 