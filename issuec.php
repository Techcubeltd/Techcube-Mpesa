<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>ISSUE BOOK</h1>
<form action="issc.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Issue Book</th>
	<tr>
		
		<td>Book Code/ID</td>
    <td><input name="code" required ></td>
    <td>Student Code/ID</td>
    <td><input name="scode" required></td>
	</tr>
	
  
</table>



<button class="btn btn-success" type="submit" >Issue Book</button>
<a class="btn btn-danger" type="submit" href="coursestd.php">View Issued course Books</a>
</form> 