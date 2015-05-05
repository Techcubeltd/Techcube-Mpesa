<?php
require_once('header.php');
$bookcode=sanitizeString($_REQUEST["id"]);

$query="UPDATE fine SET status='paid' where bookcode='$bookcode'  && status='unpaid' ";
mysql_query($query);
echo  "<script>location.replace('fine.php')</script> ";


?>