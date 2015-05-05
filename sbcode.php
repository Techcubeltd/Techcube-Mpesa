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
<h1>Generate Student Barcode </h1>

<table class="table table-bordered">
<tr>
	<th class="header" colspan="4"> BARCODE NUMBER GENERATOR </th>
  </tr>
<tr>
  
    <th class="header">STUDENT ADMISSION NUMBER</th>
</tr>
    <tr> <td>
    <p class="text-info">
      Enter Student Admission or Registration Number
    </p>
</td>
    
    <td><input name="code" id="coder" required class="form-control" ></td>
	</tr>
	  

	
  
</table>

<button class="btn btn-info btn-xs" type="submit" onclick='$("#barcode").JsBarcode(document.getElementById("coder").value,{format:"CODE128",displayValue:true,fontSize:20});' >GENERATE BARCODE</button>
<br />
<br />
 <div align="centre" class="span4 offest2">
 	 <img id="barcode">

 </div> 
