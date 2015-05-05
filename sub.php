<?php 
require_once('header.php');

if($_POST)
{
$sname=sanitizeString($_POST['sname']);
$scode=sanitizeString($_POST['bcode']);
$field=sanitizeString($_POST['fields']);
$grp=sanitizeString($_POST['grp']);


	# code...
	
$uquery= "INSERT INTO subject (subjectname,field,subjectcode,subjectgroup)VALUES('$sname','$field','$scode','$grp')  ";
 
mysql_query($uquery);

echo "Subjects addition succesfull <br /> <br />";
echo "<a href='sdetails.php' class='btn btn-primary btn-xs' type='submit'>View All Subjects</a> ";




}
else
mysql_error();
?>