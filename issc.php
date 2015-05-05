<?php 
require_once('header.php');
if($_POST)
{
$scode=sanitizeString($_POST['scode']);
$bcode=sanitizeString($_REQUEST['code']);
$checkqu="select quantity as quan from book where barcode='$bcode'";
$result1=mysql_query($checkqu);
$num=mysql_fetch_assoc($result1);
if ($num<2) {
	
echo "<script>alert('BOOK ISSUE LIMIT REACHED')</script>";
echo  "<script>location.replace('issue.php')</script> ";
}else


$query="SELECT * FROM book where barcode='$bcode'  ";
$result=mysql_query($query);
while ($row=mysql_fetch_array($result)){;




?>
<h3>ISSUE BOOK</h3>
<form action="bissc.php" method="post">
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
		<td name="bcode"><?php echo "<input name='bcode' value=$bcode readonly >";?></td>
	</tr>
	<tr>
		<td>Subject</td>
		<td name="sub"><?php echo $row["subject"]?></td>
		<td>Issueable</td>
		<td name="iss"><?php echo $row["issuable"]?></td>
	</tr>
	<th class="header" colspan="4">Issue Book</th>
	<tr>
		<td>Student Details</td>
	</tr>
	<tr>
		<td>Student Code</td>
		<td name="scode"><?php echo "<input name='scode' value=$scode  >";?></td>
	</tr>
	<tr>
		<td>Issue Date</td>
		<td ><input type="date" name="isdate" value="<?php echo date('d/m/Y')?>"></td>
	</tr>
	<tr>
		<td>Return Date</td>
		<td><input type="date" name="duedate"></td>
	</tr>
<tr>
	
</tr>
</table>	
<button class="btn btn-success" type="submit">Issue Book</button>
</form>


<?php

}
}
?>