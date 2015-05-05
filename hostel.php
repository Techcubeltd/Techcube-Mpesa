<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>Add Hostel</h1>
<form action="h.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Hostels Configuration</th>
	<tr>
		
		<td>Name</td>
    <td><input name="title" ></td>

		<td>Capacity</td>
    <td><input name="cap" ></td>
	</tr>
	<tr>
		
		<td>Master</td>
    <td>	<?php
          require_once("connect.php");
          $statusQuery="select fullname from staff where jobtitle='teacher'";
        $statusResult=queryMysql($statusQuery);
        $no = mysql_num_rows($statusResult);
      echo "<select name='mst' >";
    for ($i = 0 ; $i < $no ; ++$i)
      {
        $statusRow = mysql_fetch_row($statusResult);
        echo "<option value=$statusRow[0]>$statusRow[0]</option>";
      }

      echo "</select><br/>";
      ?></td>

		<td>Captain</td>
    <td><?php
          require_once("connect.php");
          $statusQuery="select adminno,surname from prefects";
        $statusResult=queryMysql($statusQuery);
        $no = mysql_num_rows($statusResult);
      echo "<select name='cpt' >";
    for ($i = 0 ; $i < $no ; ++$i)
      {
        $statusRow = mysql_fetch_row($statusResult);
        echo "<option value=$statusRow[1]>$statusRow[1]</option>";
      }

      echo "</select><br/>";
      ?></td>
	</tr>
  
</table>

<button class="btn btn-success" type="submit">Add New Entry</button>
</form> 