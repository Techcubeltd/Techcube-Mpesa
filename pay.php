<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>Record Payment</h1>
<form action="recordpay.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Receive Pay</th>
	<tr>
    <td>Student Code/ID</td>
    <td><input name="code" ></td>
	</tr>
	
  
</table>



<button class="btn btn-success" type="submit" >Receive Payment</button>
</form> 