<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>Add new Prefects</h1>
<form action="pc.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Personal Details</th>
	<tr>
		<td>Admission Number</td>
		<td><input name="adminno"></td>
		<td>First Name</td>
		<td><input name="fname" ></td>
	</tr>
	<tr>
		<td>SurName</td>
		<td><input name="surname" ></td>
		<td>email</td>
		<td><input name="email" ></td>
	</tr>
	<tr>
		<td>Class</td>
		<td name="class">
		<?php
          require_once("connect.php");
          $statusQuery="select clasname from classes";
        $statusResult=queryMysql($statusQuery);
        $no = mysql_num_rows($statusResult);
      echo "<select name='class' class='form-control'>";
    for ($i = 0 ; $i < $no ; ++$i)
      {
        $statusRow = mysql_fetch_row($statusResult);
        echo "<option value=$statusRow[0]>$statusRow[0]</option>";
      }

      echo "</select><br/>";
      ?> </td>
		<td>Gender</td>
		<td><select name="gender" id="gen" onmouseover="gender()">
		<option>Male</option>
		<option>Female</option>
			
		</select> </td>
		
	</tr>
	<tr>
		<td>Designation Type</td>
		<td><select name="destype">
			<option>Prefects Heads</option>
			<option>Special Designation</option>
			<option>Class Prefect</option>
			<option>Dorm monitor</option>
			<option>Students Council</option>
		</select></td>
		<td>Description</td>
		<td><textarea class="input" rows="5" cols="20" placeholder="" name="desc" required="true"></textarea> </td>
	</tr>
	<tr>
		<td>Date Appointed</td>
		<td><input name="appdate" id="date"></td>
		<td>Term Expiry</td>
		<td><input name="exp" id="date1"> </td>
	</tr>
	<tr>
		
		<td>Roles</td>
		<td><textarea class="input" rows="7" cols="50" placeholder="" name="roles" required="true"></textarea> </td>
	</tr>


	<script src="datetimePicker/jquery.datetimepicker.js"></script>
						<script type="text/javascript">
							$('#date').datetimepicker(
									{
										dayOfWeekStart : 1,
										lang : 'en',
										disabledDates : [ '1986/01/08',
												'1986/01/09', '1986/01/10' ],
										startDate : 'yyyy/MM/dd',
									});
							$('#date').datetimepicker({
								value : '2015/01/01',
								format :'y/m/d',
								step : 6,
							});
						</script>

						
						<script type="text/javascript">
							$('#date1').datetimepicker(
									{
										dayOfWeekStart : 1,
										lang : 'en',
										disabledDates : [ '1986/01/08',
												'1986/01/09', '1986/01/10' ],
										startDate : 'yyyy/MM/dd',
									});
							$('#date1').datetimepicker({
								value : '2015/01/01',
								format :'y/m/d',
								step : 6,
							});
						</script>
						<tr>

							
						</tr>

</table>

<button class="btn btn-success" type="submit">Add New Entry</button>
</form> 