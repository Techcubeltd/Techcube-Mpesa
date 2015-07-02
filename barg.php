<?php
require_once('header.php');
if (isset($_SESSION['user'])){
$assignedto=$_SESSION['user'];
$bcode=$_REQUEST['bcode'];
$query="SELECT * FROM book where barcode='$bcode'";


$result=mysql_query($query);
$row=mysql_fetch_array($result);
}

?>
<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" />
  

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.1/jquery.min.js"> </script>
  <script src="barcode/EAN_UPC.js"></script>
  <script src="barcode/CODE128.js"></script>
  <script src="barcode/JsBarcode.js"></script>
<h1>Generate Book Barcode</h1>

<table class="table table-bordered">
	<th class="header" colspan="4">BARCODE NUMBER GENERATOR</th>
	<tr>
    <td>BARCODE NO</td>
    <td><input name="code" id="code" value="<?php echo $bcode ?>" readonly ></td>
	</tr>
	  

	<tr>
    <td>QUANTITY</td>
    <td><input name="code" id="code" value="<?php echo $row['quantity'] ?>" readonly ></td>
  </tr>
    
  
</table>

<button class="btn btn-info btn-xs" type="submit" target onclick='$("#barcode").JsBarcode("<?php echo $bcode?>",{format:"CODE128",displayValue:true,fontSize:20});' >GENERATE BOOK BARCODE</button>
<br />
<br />
 <div align="centre" class="span4 offest2">
 	 <img id="barcode" title="BOOK BARCODE">

 </div> 
<br />
<div class="row-fluid">



  
   
 <br />
<br />
   <!--a href="mult.php?bcode=<?php echo $bcode;?>" class="btn btn-info btn-xs" type="submit" >GENERATE COPY BARCODES</a-->


 </div>
