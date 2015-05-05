<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>Add Room</h1>
<form action="o.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Rooms Configuration</th>
	<tr>
		
		<td>Name</td>
    <td><input name="title" ></td>

		<td>Code</td>
    <td><input name="cd" ></td>
	</tr>
	<tr>
		
		<td>Department</td>
    <td><?php
          require_once("connect.php");
          $statusQuery="select subjectname from subject";
        $statusResult=queryMysql($statusQuery);
        $no = mysql_num_rows($statusResult);
      echo "<select name='dept' >";
    for ($i = 0 ; $i < $no ; ++$i)
      {
        $statusRow = mysql_fetch_row($statusResult);
        echo "<option value=$statusRow[0]>$statusRow[0]</option>";
      }

      echo "</select><br/>";
      ?></td>

		<td>Type</td>
    <td>
    <select name="type">
    <option>Office</option>
        <option>Laboratory</option>
      
    </select>
      </td>
	</tr>
  
</table>

<button class="btn btn-success" type="submit">Add New Entry</button>
</form> 