<?php
include_once('connect.php');
$id=$_REQUEST['barcode'];
$query="Delete  from book where barcode='$id'";

echo "<script>alert('You are about to delete book code $id')</script>";
mysql_query($query);
echo "book deleted";
echo "<script>location.replace('cbdetails.php')</script>";

/*if($result)
{

echo "<script>location.replace('sdetails.php')</script>";
}
else
{
	
echo "<script>location.replace('sdetails.php')</script>";

}*/
?>