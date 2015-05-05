<?php 
include('header.php');

//if($_POST)
//{
	//$user=$_SESSION['user'];
if( $_POST ){

  //$fname = sanitizeString($_POST['stream']);

//   $query ="INSERT INTO stream (name)
  //VALUES('$fname');";

$nam=sanitizeString($_POST['name']);
$amt=sanitizeString($_POST['amt']);
$grp=sanitizeString($_POST['grp']);
$yr=sanitizeString($_POST['yr']);

	$query="INSERT INTO  feeset(name,amount,academicgroup,financialyear)VALUES('$nam','$amt','$grp','$yr');";
	
	mysql_query($query);

echo "FEE ITEM created succesfully <br /> <br />";
echo "<a href='feeitems.php' class='btn btn-primary btn-xs' type='submit'>View Returned Books</a> ";
}
?> 