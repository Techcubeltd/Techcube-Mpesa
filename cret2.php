<?php 
require_once('header.php');
if($_POST)
{
$scode=sanitizeString($_POST['scode']);
$code=sanitizeString($_REQUEST['code']);
$query="SELECT * FROM book where barcode='$code'  ";
$query2="SELECT * FROM bookissue where barcode='$code' && studentcode='$scode' &&  status='issued' order by issuedate desc ";
$result=mysql_query($query);
$result2=mysql_query($query2);
while ($row=mysql_fetch_array($result)){;
$row2=mysql_fetch_array($result2)



?>
<h3>RETURN BOOK</h3>
<form action="crt2.php" method="post">
<table class="table table-bordered">
<th class="header" colspan="4">Book Details</th>
	<tr>
		<td>Title</td>
		<td name="title"><?php echo $row["title"]?></td>

		</tr>
		<tr>
		<td>ISBN</td>
		<td name="isbn"><?php echo $row["ISBN"]?></td>
	</tr>
	<tr>
		<td>Author</td>
		<td name="auth"><?php echo $row["author"]?></td>
		<td>Barcode</td>
		<td name="bcode"><?php echo "<input name='bcode' value=$code readonly >";?></td>
	</tr>
	<tr>
		<td>Subject</td>
		<td name="sub"><?php echo $row["subject"]?></td>
		<td>Issueable</td>
		<td name="iss"><?php echo $row["issuable"]?></td>
	</tr>
	<th class="header" colspan="4">Return Book</th>
	<tr>
		<td>Staff Details</td>
	</tr>
	<tr>
		<td>Staff Code</td>
		<td name="scode"><?php echo "<input name='scode' value=$scode readonly >";?></td>
	</tr>
	<tr>
		<td>Issue Date</td>
		<td><?php echo "<input name='isdate' readonly value=".$row2['issuedate']." >"?></td>
	</tr>
	<tr>
		<td>Due Date</td>
		<td><?php echo "<input name='duedate' id='due' readonly value=".$row2['duedate']." >";?></td>

	</tr>

	<tr>
		<td>Return Date</td>
		<td><?php echo "<input name='ret' id='ret' type='date' required >";?></td>
	</tr>





</table>	
<button class="btn btn-danger" type="submit">Return Book</button>
</form>


<?php

}
}
?>