<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>RETURN STAFF COURSE BOOK</h1>
<form action="cret2.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Return Book</th>
	<tr>
		
		<td>Book Code/ID</td>
    <td><input name="code" required ></td>
    <td>Student Code/ID</td>
    <td><input name="scode" required></td>
	</tr>
	
  
</table>



<button class="btn btn-danger" type="submit" >Return Book</button>
<a class="btn btn-danger" href="returns2.php"type="submit" >View Returned Books</a>

</form> 