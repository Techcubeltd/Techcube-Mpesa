<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>Add new Student Record</h1>
<form action="stdnt.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Personal Details</th>
	<tr>
		<td>Student Name</td>
		<td><input name="fullname"></td>
		<td>Surname</td>
		<td><input name="sname" ></td>
	</tr>
	<tr>
		<td>Date of Birth</td>
		<td><input name="bdate" type="date" ></td>
		<td>Admin No</td>
		<td><input name="adm" ></td>
	</tr>
	<tr>
		<td>Admission Date</td>
		<td><input name="jdate" type="date"></td>
		<td>Gender</td>
		<td><select name="gender" id="gen" >
		<option>Male</option>
		<option>Female</option>
			
		</select> </td>
	</tr>
	<tr>
	<td>Academic Year</td>
	<td><input name="yr" readonly="" value=<?php echo date('Y');?>></td>
		
		<td>Academic Level</td>
		<td><select name="acalevel" >
			<option>1</option>
			<option>2</option>	
			<option>3</option>
			<option>4</option>
		</select> </td>
	</tr>
	<tr>
		<td>Stream</td>
		<td><?php
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
      ?> </td>
		
	</tr>
	



						<tr>

							
						</tr>

</table>

<button class="btn btn-success" type="submit">Add New Entry</button>
</form> 