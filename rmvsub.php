<?php
include_once('connect.php');
$id=$_REQUEST['id'];
$query="Delete  from subject where subjectID='$id'";
mysql_query($query);
echo "subject deleted";

echo "<script>location.replace('sdetails.php')</script>";

/*if($result)
{

echo "<script>location.replace('sdetails.php')</script>";
}
else
{
	
echo "<script>location.replace('sdetails.php')</script>";

}*/
?>