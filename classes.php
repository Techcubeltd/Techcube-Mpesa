<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>Add new Class</h1>
<form action="cls.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Classes</th>
	<tr>
		<td>Form / Class</td>
		<td><input name="name"></td>
		<td>Stream</td>
		<td name="stream">
			<?php
          require_once("connect.php");
          $statusQuery="select name from stream";
        $statusResult=queryMysql($statusQuery);
        $no = mysql_num_rows($statusResult);
      echo "<select name='stream' class='form-control'>";
    for ($i = 0 ; $i < $no ; ++$i)
      {
        $statusRow = mysql_fetch_row($statusResult);
        echo "<option value=$statusRow[0]>$statusRow[0]</option>";
      }

      echo "</select><br/>";
      ?>
		</td>
	
	</tr>
	<tr>
			<td>Teachers Name</td>
		<td  name="tr">
			<?php
          require_once("connect.php");
          $statusQuery="select fullname from staff";
        $statusResult=queryMysql($statusQuery);
        $no = mysql_num_rows($statusResult);
      echo "<select name='tr' class='form-control'>";
    for ($i = 0 ; $i < $no ; ++$i)
      {
        $statusRow = mysql_fetch_row($statusResult);
        echo "<option value=$statusRow[0]>$statusRow[0]</option>";
      }

      echo "</select><br/>";
      ?>
		</td>
	
	</tr>
		

</table>

<button class="btn btn-success" type="submit">Add New Entry</button>
</form> 