<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>Add new Streams</h1>
<form action="c.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Streams</th>
	<tr>
		<td>Name</td>
		<td><input name="stream"></td>
	
	</tr>
	
		

</table>

<button class="btn btn-success" type="submit">Add New Entry</button>
</form> 