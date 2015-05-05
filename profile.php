<?php
require_once('header.php');

if (isset($_SESSION['user']))
{
$userName=$_SESSION['user'];
}
//else
//$userName="noTable";
$profileQuery="select fullname,email,dateadded,status from user where userName='".$userName. "'";

$detailsResult=queryMysql($profileQuery);
$row=mysql_fetch_row($detailsResult);

echo "<table class='table table-striped'><tr><td>Full names:</td><td>$row[0]</td></tr>";
echo "<tr><td>Email:</td><td>$row[1]</td></tr>";
echo "<tr><td>Member since:</td><td>$row[2]</td></tr>";
echo "<tr><td>Status:</td><td>$row[3]</td></tr>";



?>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<div class="container">
<h2>Profile </h2>
<p class="alert-danger">We would like to warn everyone that buying or selling our accounts is a wrongful act and a severe violation of our Rules and Policies. 
Such accounts are closed upon disclosure and the payments to such corporate account owners are suspended by Administration.</p>
<p>Below is your personal data and contact information. Please, always keep your contact information up-to-date. 
If you want to edit the non-adjustable field (e-mail, username ), please contact IT Department directly.</p>
	
</div>

</div>


<br />

