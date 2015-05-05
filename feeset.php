<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>Add Fees Item</h1>
<form action="f.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Fees Configuration</th>
	<tr>
		
		<td>Name</td>
    <td><input name="name" required></td>
	</tr>
	<tr>
		
		<td>Amount</td>
    <td><input name="amt" required></td>
	</tr>
	<tr>
		<td>Academic Group</td>
    <td><select name="grp">
    	<option>1</option>
    	<option>2</option>
    	<option>3</option>
    	<option>4</option>
    	<option>all</option>
    </select></td>
	</tr>
  <tr>
  <td>Financial Year</td>
  <td>
  	<input name="yr" value="<?php echo date('Y')?>" >
 
  </td>
  	 </tr>
</table>

<button class="btn btn-success" type="submit">Add New Entry</button>
</form> 