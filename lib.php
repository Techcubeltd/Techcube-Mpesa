<?php 
include('header.php');

//if($_POST)
//{
	//$user=$_SESSION['user'];
if( $_POST ){

  //$fname = sanitizeString($_POST['stream']);

//   $query ="INSERT INTO stream (name)
  //VALUES('$fname');";

$title=sanitizeString($_POST['title']);
$isbn=sanitizeString($_POST['isbn']);
$auth=sanitizeString($_POST['auth']);
$pub=sanitizeString($_POST['pub']);
$edt=sanitizeString($_POST['edt']);
$vol=sanitizeString($_POST['vol']);
$sub=sanitizeString($_POST['subject']);


$code=sanitizeString($_POST['code']);

$quan=sanitizeString($_POST['quan']);

$price=sanitizeString($_POST['price']);

$issue=sanitizeString($_POST['issue']);

$st=sanitizeString($_POST['st']);

$da=sanitizeString($_POST['da']);

	$query="INSERT INTO  book(subject,title,ISBN,author,publisher,edition,issuable,volume,status,dateadded,quantity,barcode,library,price)
	VALUES('$sub','$title','$isbn','$auth','$pub','$edt','$issue','$vol','$st','$da','$quan','$code','yes','$price');";
	
	mysql_query($query);
$tablequery="CREATE TABLE IF NOT EXISTS `$code.tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `copyno` int(11) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'available',
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `copyno` (`copyno`)
) ";
mysql_query($tablequery);

mysql_query($tablequery);
	for ($i=1; $i<$quan+1 ; $i++) { 
# code...
	$insquery="INSERT INTO `$code.tbl` (`copyno`) VALUES('$i');";
		mysql_query($insquery);	
	}

echo "FEE ITEM created succesfully <br /> <br />";
//echo "<a href='feeitems.php' class='btn btn-primary btn-xs' type='submit'>View Returned Books</a> ";
 echo "<script>location.replace('barg.php?bcode=$code')</script>";
}
?> 