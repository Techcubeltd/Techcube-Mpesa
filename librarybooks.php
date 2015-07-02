<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.1/jquery.min.js"> </script>
  <script src="barcode/EAN_UPC.js"></script>
  <script src="barcode/CODE128.js"></script>
  <script src="barcode/JsBarcode.js"></script>
<h1>Add New Library Book</h1>
<form action="lib.php" method="post">
<table class="table table-bordered">
	<th class="header" colspan="4">Library Book</th>
	<tr>
		
		<td>Subject</td>
		<td name="stream">
			<?php
          require_once("connect.php");
          $statusQuery="select subjectname from subject";
        $statusResult=queryMysql($statusQuery);
        $no = mysql_num_rows($statusResult);
      echo "<select name='subject' >";
    for ($i = 0 ; $i < $no ; ++$i)
      {
        $statusRow = mysql_fetch_row($statusResult);
        echo "<option value=$statusRow[0]>$statusRow[0]</option>";
      }

      echo "</select><br/>";
      ?>
		</td>
	<td>Title</td>
    <td><input name="title" class="form-control"></td>
	</tr>
	<tr>
			<td>ISBN</td>
    <td><input name="isbn" id="isbn" onkeyup="cop()" onchange="cop()"></td>
	<td>Author</td>
    <td><input name="auth"></td>
	</tr>
  <tr>
      <td>Publisher</td>
    <td><input name="pub"></td>
  <td>Edition</td>
    <td><input name="edt"></td>
  </tr>
  <tr>
      <td>Volume</td>
    <td><input name="vol"></td>
  <td>Quantity</td>
    <td><input name="quan"></td>
  </tr>
		
  <tr>
      <td>Price</td>
    <td><input name="price"></td>
  <td>Issuable</td>
    <td><select name="issue">
      <option>Yes</option>
      <option>NO</option>
    </select></td>
  </tr>
  <tr>
  <td>Barcode</td>
    <td><input name="code"  id="bcode"></td>
    <script type="text/javascript">
        function cop(){
          document.getElementById('bcode').value=document.getElementById('isbn').value;

        }
</script>
   <td>Status</td>
    <td><select name="st">
      <option>Available</option>
      <option>Not Available</option>
    </select></td>
  </tr> 
  <tr>

      <td>Date</td>
    <td><input name="da" type="date" class="date"  value=<?php echo date('Y-m-d');?>></td>
    </tr>
      
      
</table>

<button class="btn btn-success" type="submit">Add New Entry</button>
</form> 