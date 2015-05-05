<?php 
require_once('header.php');
if($_POST)
{

$code=sanitizeString($_REQUEST['code']);
$query="SELECT * FROM students where adminno='$code'  ";
$result=mysql_query($query);
while ($row=mysql_fetch_array($result)){;




?>
<h3>Record Pay</h3>
<form action="processpay.php" method="post">
<table class="table table-bordered">
<th class="header" colspan="4">Student Details</th>
  <tr>
    <td>Name</td>
    <td name="title"><?php echo $row["studentname"]?></td>

    <td>Surname</td>
    <td name="isbn"><?php echo $row["surname"]?></td>
    </tr>
   
  <tr>
    <td>Date of Birth</td>
    <td name="auth"><?php echo $row["dateofbirth"]?></td>
    <td>Admin No</td>
    <td name="bcode"><?php echo "<input name='bcode' readonly value=$code  >";?></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td name="sub"><?php echo $row["Gender"]?></td>
     </tr>
  <tr>
   <td>Stream</td>
    <td name="sub"><?php echo $row["stream"]?></td>
    <td>Academic Level</td>
    <td name="iss"><?php echo $row["academiclevel"]?></td>
  </tr>
  <th class="header" colspan="4">Fee Details</th>
  <?php

  $level= $row['academiclevel'];
 $result2= mysql_query(" SELECT SUM(amount) AS sumtot  FROM feeset where academicgroup='all' || academicgroup='$level'  ");

            while($row4=mysql_fetch_assoc($result2)) 
            {
           //echo('<tr><td id="ColgNames">'.$row['name'].'</td><td align="center">'.$row[$brachTxt].'</td></tr>');
            


  ?>
  <tr>
  <td>Receipt No</td>
    <td name="rec"><input name="recpt" required="true" id="receipt" value="recptno <?php echo $row['adminno'].date('-d-m')?>"></td>
    <td>Paid Amount</td>
    <td><input name="paid" required="true" id="amt"></td>
  </tr>
  <tr>
    <td>Paid Date</td>
    <td ><input type="date" name="pdate"></td>
  </tr>   <tr>
    <td>Total Fee</td>
    <td><?php
    

     echo "<input name='tot' id='tot' readonly value=".$row4['sumtot'].">";?></td>
  </tr>
  <tr>
    <td>Adjusted Balance</td>
    <td ><input  name="bal" id="bal" onmouseover="calc()"></td>
  </tr>
<script type="text/javascript">
        function calc() {
                   var sum = parseFloat(document.getElementById("tot").value - document.getElementById("amt").value);
                    //var sub= parseFloat(sum - document.getElementById("amt").value);
                    document.getElementById("bal").value = sum;
                    //document.getElementById('total').write(sum);
                    //document.write(sum);
                };

</script>


<tr>
<td>Mode</td>
<td><select name="mode">
  <option>Mpesa</option>
  <option>Bank Deposit</option>
  <option>Cheque</option>
</select></td>  
</tr>
</table> 
<button class="btn btn-success" href="processpay.php" target="_blank" type="submit" id="paybtn" target="_bank">Record Payment</button>
<script type="text/javascript">
  $(document).one('click', '#paybtn', function(){
    alert('Process Payment');
});

</script>
</form>
<br />


<ul class="nav nav-tabs" id="tabs">

    <li class="active"><a data-toggle="tab" href="#bank">Bank Deposit</a></li>
    <li><a data-toggle="tab" href="#cheque">Cheque</a></li>
    <li><a data-toggle="tab" href="#mpesa">Mobile Money</a></li>
   

</ul>
<div class="tab-content">
    <div id="bank" class="tab-pane fade in active">
    <form action="bank.php">
      <table class="table table-bordered">
      <th class="header">Bank Deposit</th>
      <tr>
        <td>Bank Name</td>
        <td><input name="bank"></td>
       
      
        
        <td>Bank Receipt Number</td>
        <td><input name="bankrec"></td>
      </tr> 
      </table>
<a href="bank.php" class="btn btn-danger btn-xs" target="_blank" type="submit">Process Bank Payment</a>
    </form>
    </div>
    <div id="cheque" class="tab-pane fade">
        <form action="cheque.php">
      <table class="table table-bordered">
      <th class="header">Cheque Deposit</th>
      <tr>
        <td>Bank Branch</td>
        <td><input name="bank"></td>
        <td>Cheque Number</td>
        <td><input name="chequeno"></td>
         <td>Cheque date</td>
        <td><input name="cdate" type="date"></td>
      </tr> 
      </table>
      <a href="cheque.php" class="btn btn-danger btn-xs" target="_blank" type="submit">Process Cheque Payment</a>
    </form>
            
    </div>
    <div id="mpesa" class="tab-pane fade">
          <form action="mobile.php">
      <table class="table table-bordered">
        <td>Operator</td>
        <td><select name="operator">
          <option>MPesa</option>
          <option>Airtel Money</option>
          <option>Orange Money</option>
        </select></td>
        <td>Confirmation Code</td>
        <td><input name="code"></td>
        </table>
        <a href="mpesa.php" class="btn btn-danger btn-xs" target="_blank" type="submit">Process Mobile Payment</a>
        </form>
    </div>
 <br />
</div>
<script src="../jquery-ui-1.11.2.custom/external/jquery/jquery.js"> </script>
<script src="../jquery-ui-1.11.2.custom/jquery-ui.min.js"> </script>
        <script>
  /*  $("#tabs").tabs ();
    $.ajax({ 
"type":"POST", 
"url":"financeOverview.php", 
"success":function(data){ 
$("#overview") 
.css("background","white") 
.html(data); 
} 
});
    $.ajax({ 
"type":"POST", 
"url":"requests.php", 
"success":function(data){ 
$("#requested") 
.css("background","white") 
.html(data); 
} 
});
        $.ajax({ 
"type":"POST", 
"url":"history.php", 
"success":function(data){ 
$("#history") 
.css("background","white") 
.html(data); 
} 
});
                $.ajax({ 
"type":"POST", 
"url":"accounts.php", 
"success":function(data){ 
$("#account") 
.css("background","white") 
.html(data); 
} 
});*/

</script>


<?php
}

}
}
?>