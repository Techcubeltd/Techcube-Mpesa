<?php
require_once('header.php');
?>

<div class="grid_16" id="content">
<div class="col-md-6">

	<form action="libpdf.php" method="post" id="fuel" target="_blank">
	
		<h2>Library Books Status Reports</h2>
		<br />
		<table class="table table-bordered">
		<tr>
			<td>Status:<select name="status" class="form-control">
		<option value="issued">Issued</option>
		<option value="returned">Returned</option>
		</select>
		</td>
		</tr></table>
		
		<button class="btn btn-danger" type="submit">Generate PDF Report </button>
	</form>
	<form action="classpdf.php" method="post" target="_blank" id="deliver">
	
		<h2>Course Book Reports</h2>
		<table class="table table-bordered">
		<tr>
			<td>Class:
			<?php
          require_once("connect.php");
          $statusQuery="select clasname from classes";
        $statusResult=queryMysql($statusQuery);
        $no = mysql_num_rows($statusResult);
      echo "<select name='class' class='form-control'>";
    for ($i = 0 ; $i < $no ; ++$i)
      {
        $statusRow = mysql_fetch_row($statusResult);
        echo "<option>$statusRow[0]</option>";
      }

      echo "</select><br/>";
      ?> 
		</td></tr><tr>
		<td>Stream:
					<?php
          require_once("connect.php");
          $statusQuery="select name from stream";
        $statusResult=queryMysql($statusQuery);
        $no = mysql_num_rows($statusResult);
      echo "<select name='stream' class='form-control'>";
    for ($i = 0 ; $i < $no ; ++$i)
      {
        $statusRow = mysql_fetch_row($statusResult);
        echo "<option>$statusRow[0]</option>";
      }

      echo "</select><br/>";
      ?> 


		</td>
		</tr></table>
		<button class="btn btn-info" type="submit">Generate PDF Report </button>
	</form>

		<form action="qpdf.php" method="post" target="_blank" id="deliver">
	
		<h2>inventory Reports</h2>
		<table class="table table-bordered">
		<tr>
			<td>Book Type:<select name="status" class="form-control">
		<option value="yes">Library</option>
		<option value="no">Course</option>
		</select>
		
		</td></tr></table>
		<button class="btn btn-info" type="submit">Generate PDF Report </button>
	</form>

</div>
<div class="col-md-6">

	<form action="finepdf.php" method="post" id="fuel" target="_blank">
	
			<h2>Books Fines Reports</h2>
		<br />
			<table class="table table-bordered">
		<tr>
			<td>Status:<select name="status" class="form-control">
		<option value="paid">paid</option>
		<option value="unpaid">unpaid</option>
		</select>
		</td>
		</tr></table>
		<button class="btn btn-primary" type="submit">Generate PDF Report </button>
	</form>
	
	<form action="staffpdf.php" method="post" target="_blank" id="deliver">
		<h2>Staff Course Book Reports</h2>
		<table class="table table-bordered">
		<tr>
			<td>StaffID:
			<?php
          require_once("connect.php");
          $statusQuery="select employeecode,fullname from staff";
        $statusResult=queryMysql($statusQuery);
        $no = mysql_num_rows($statusResult);
      echo "<select name='staffid' class='form-control'>";
    for ($i = 0 ; $i < $no ; ++$i)
      {
        $statusRow = mysql_fetch_row($statusResult);
        echo "<option value='$statusRow[0]'>$statusRow[1]</option>";
      }

      echo "</select><br/>";
      ?> 
		</td></tr>
		<tr>
			<td>Status:<select name="status" class="form-control">
		<option value="issued">Issued</option>
		<option value="returned">Returned</option>
		</select>
		</td>
		</tr>
		</table>
		
		<button class="btn btn-success" type="submit" name="submit">Generate PDF Report </button>
	</form>
	<form action="stdpf.php" method="post" target="_blank" id="deliver">
		<h2>Students Book Reports</h2>
		<table class="table table-bordered">
		<tr>
			<td>StudentId:
			<?php
          require_once("connect.php");
          $statusQuery="select adminno from students";
        $statusResult=queryMysql($statusQuery);
        $no = mysql_num_rows($statusResult);
      echo "<select name='adm' class='form-control'>";
    for ($i = 0 ; $i < $no ; ++$i)
      {
        $statusRow = mysql_fetch_row($statusResult);
        echo "<option value='$statusRow[0]'>$statusRow[0]</option>";
      }

      echo "</select><br/>";
      ?> 
		</td></tr>
		<tr>
			<td>Status:<select name="status" class="form-control">
		<option value="issued">Issued</option>
		<option value="returned">Returned</option>
		</select>
		</td>
		</tr>
		</table>
		
		<button class="btn btn-success" type="submit" name="submit">Generate PDF Report </button>
	</form>

</div>