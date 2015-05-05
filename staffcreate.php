<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>Add new Staff Record</h1>
<form action="staff.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Personal Details</th>
	<tr>
		<td>Staff Name</td>
		<td><input name="fullname"></td>
		<td>Employement code</td>
		<td><input name="code" ></td>
	</tr>
	<tr>
		<td>Join Date/ Employment date</td>
		<td><input name="empdate" id="date"></td>
		<td>National ID</td>
		<td><input name="nat" ></td>
	</tr>
	<tr>
		<td>Initials</td>
		<td><select id="ini" name="initials" onchange="gender()">
			<option>Mr.</option>
			<option>Mrs.</option>
			<option>Miss.</option>
		</select> </td>
		<td>Gender</td>
		<td><select name="gender" id="gen" onmouseover="gender()">
		<option>Male</option>
		<option>Female</option>
			
		</select> </td>
		<script type="text/javascript">
				var $inn=document.getElementById('ini').value;
				var $gend=document.getElementById('gen').value;
					function gender(){
						if ($ini='Mrs' || $ini='Miss') {
							$gend='Female';
						}else
						$gend='Male';
						
					};

		</script>		
	</tr>
	<tr>
		<td>Date of Birth</td>
		<td><input name="date1" id="date1"></td>
		<td>Address</td>
		<td><input name="address" ></td>
	</tr>
	<tr>
		<td>Phone No</td>
		<td><input name="phone"></td>
		<td>Email</td>
		<td><input name="emai"></td>
	</tr>
	<tr>
		<td>Religion</td>
		<td><select  name="religion">
			<option>Christian</option>
			<option>Muslim</option>
			<option>Other</option>
		</select></td>
		<td>Job Title</td>
		<td><select name="jobtitle" >
			<option>Teacher</option>
			<option>Librarian</option>
			<OPTION>Store Manager</OPTION>
			<option>Grounds Man</option>
			<option>Driver</option>
			<option>Chaplain / Priest</option>
			<option>School Nurse</option>
			<option>Security Staff</option>
			<option>Kitchen Staff</option>
			<option>Janitor</option>
			<option>Laboratory Technician</option>
		</select></td>
	</tr>
	<tr>
		<td>Specialization</td>
		<td><input name="specs"></td>
		<td>Marital Status</td>
		<td><select name="marital">
			<option>Married</option>
			<option>Single</option>
			<option>Divorced</option>
			<option>Widowed</option>
			<option>Widower</option>
		</select></td>
	</tr>
	<tr>
		<td>Department</td>
		<td><select name="dept">
			<option>Science</option>
			<option>Mathematics</option>
			<option>Humanities</option>
			<option>Linguistics</option>
			<option>Technical</option>
			<option>Other Staff</option>
		</select></td>
		<td>Notes</td>
		<td><textarea class="input" rows="7" cols="50" placeholder="" name="notes" required="true"></textarea> </td>
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