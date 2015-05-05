<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>Add new Period</h1>
<form action="p.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Classes</th>
	<tr>
		<td>Name</td>
		<td><select name="name" class="form-control">
    <option>Morning Prep</option> 
    <option>Morning Period</option>
    <option>Break Time</option>
    <option>Mid Mornings Periods</option>
    <option>Lunch</option>
    <option>Afternoon</option>
    <option>Dusk</option>
    <option>EVening Prep</option>  
    </select></td>
		
	
	</tr>
	<tr>
  <td>Start Time</td>
    <td> <input name="str" id="time">
      
    </td>
			<td>End Time</td>
		<td ><input id="time1" name="end">
			
		</td>
	
	</tr>
		
  <script src="datetimePicker/jquery.datetimepicker.js"></script>
            <script type="text/javascript">
              $('#time').datetimepicker(
                  {
                    dayOfWeekStart : 1,
                    lang : 'en',
                    disabledDates : [ '1986/01/08',
                        '1986/01/09', '1986/01/10' ],
                    startDate : 'yyyy/MM/dd',
                  });
              $('#time').datetimepicker({
                value : '2015/01/01',
                 format :'h:m',
                step : 6,
              });
            </script>

            
            <script type="text/javascript">
              $('#time1').datetimepicker(
                  {
                    dayOfWeekStart : 1,
                    lang : 'en',
                    disabledDates : [ '1986/01/08',
                        '1986/01/09', '1986/01/10' ],
                    startDate : 'yyyy/MM/dd',
                  });
              $('#time1').datetimepicker({
                value : '2015/01/01',
                format :'h:m',
                step : 6,
              });
            </script>

</table>

<button class="btn btn-success" type="submit">Add New Entry</button>
</form> 