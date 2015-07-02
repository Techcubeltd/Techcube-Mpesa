<?php
require_once('header.php');
$id=$_REQUEST['id'];
$user=$_SESSION['user'];
$query="SELECT mname from list where id='$id'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);

$movie=sanitizeString($row['mname']);

$tablequery="CREATE TABLE IF NOT EXISTS `$user.wish` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie` varchar(200) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `movie` (`movie`)
) ";
mysql_query($tablequery);

$insquery="INSERT INTO `$user.wish` (`movie`) VALUES('$movie');";
		mysql_query($insquery);	
	echo "You have succefully Added ".$movie." to your wishlist!";

?>