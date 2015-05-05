<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>Add Grades</h1>
<form action="g.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Grades Configuration</th>
	<tr>
		
		<td>Name</td>
    <td><input name="title" ></td>

		<td>Minimum Score</td>
    <td><input name="min" ></td>
	</tr>
	<tr>
		
		
  
</table>

<button class="btn btn-success" type="submit">Add New Entry</button>
</form> 