<?php
require_once('header.php');
$result=mysql_query("SELECT  * FROM students");
$row=mysql_fetch_array($result);
$ac=$row["academiclevel"];

	# code...


$query2="UPDATE students set  academiclevel=academiclevel+1 where academiclevel!='4' && academiclevel!='complete' ";
$query="UPDATE students set  academiclevel='complete' where academiclevel='4' ";
mysql_query($query2);
mysql_query($query);
echo "<script type='text/javascript'>alert('you are about to advance classes')</script>";

echo "Class Advance succesfull <br /> <br />";
echo "<a href='stdetails.php' class='btn btn-primary btn-xs' type='submit'>View student details</a> ";



?>