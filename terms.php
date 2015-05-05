<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />

<h1>Add new Period</h1>
<form action="sc.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Classes</th>
	<tr>
    <td>Year</td>
    <td><input name="year" id="yr" ></td>
    
		<td>Name</td>
		<td><select name="name" class="form-control">
    <option>Term 1</option> 
    <option>Term 2</option>
    <option>Term 3</option>
       </select></td>
		
	
	</tr>
	<tr>
  <td>Start date</td>
    <td> <input name="str" id="time">
      
    </td>
			<td>End date</td>
		<td ><input id="time1" name="end">
			
		</td>
	
	</tr>
		
  <script src="datetimePicker/jquery.datetimepicker.js"></script>
       <script type="text/javascript">
              $('#yr').datetimepicker(
                  {
                    dayOfWeekStart : 1,
                    lang : 'en',
                    disabledDates : [ '1986/01/08',
                        '1986/01/09', '1986/01/10' ],
                    startDate : 'Y',
                  });
              $('#yr').datetimepicker({
                value : '2015/01/01',
                 format :'Y',
                step : 6,
              });
            </script>

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
                 format :'y/m/d',
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
                format :'y/m/d',
                step : 6,
              });
            </script>

</table>

<button class="btn btn-success" type="submit">Add New Entry</button>
</form> 