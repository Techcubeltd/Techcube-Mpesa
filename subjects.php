<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>Add Subject</h1>
<form action="sub.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Subjects</th>
	<tr>
		
		<td>Subject Name</td>
    <td><input name="sname" class="form-control"></td>
	</tr>
	<tr>
			<td>Field</td>
    <td>
    <select name="fields">
      <option>Languages</option>
      <option>Mathematics</option>
      <option>Sciences</option>
      <option>Humanities</option>
      <option>Technical</option>
    </select>
    </td>
	<td>code</td>
    <td><input name="bcode"></td>
	</tr>
  <tr>
      <td>Group</td>
    <td><select name="grp">
      <option>Compulsory</option>
      <option>Optional</option>
    </select></td>
  
  </tr>
  
</table>

<button class="btn btn-success" type="submit">Add New Entry</button>
</form> 