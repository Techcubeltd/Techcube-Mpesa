<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>Add Exam Type</h1>
<form action="exa.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Examinations Configuration</th>
	<tr>
		
		<td>Examination Name</td>
    <td><input name="title" ></td>
	</tr>
	
  
</table>

<button class="btn btn-success" type="submit">Add New Entry</button>
</form> 