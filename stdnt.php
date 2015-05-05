<?php 
require_once('header.php');

if($_POST)
{
$fname=sanitizeString($_POST['fullname']);
$sname=sanitizeString($_POST['sname']);
$gend=sanitizeString($_POST['gender']);
$bdate=sanitizeString($_POST['bdate']);
$jdate=sanitizeString($_POST['jdate']);
$acy=sanitizeString($_POST['yr']);
$alevel=sanitizeString($_POST['acalevel']);
$str=sanitizeString($_POST['stream']);
$amn=sanitizeString($_POST['adm']);





	# code...
	
$uquery= "INSERT INTO students(studentname,surname,gender,dateofbirth,admdate,academicyear,academiclevel,clsstream,adminno,status)
VALUES('$fname','$sname','$gend','$bdate','$jdate','$acy','$alevel','$str','$amn','1')  ";
 
mysql_query($uquery);

echo "Student registration succesfull <br /> <br />";
echo "<a href='stdetails.php' class='btn btn-primary btn-xs' type='submit'>View Student Deatils</a> ";

mysql_error();


}
else
mysql_error();
?>