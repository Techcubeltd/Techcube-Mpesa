<?php
require_once('header.php');


?>
 
<body>

<form action='status.php' method="post" enctype="multipart/form-data">
<div class="container-fluid">
<br />
    <table class="table table-bordered">
       <tr>
       <th colspan="4" >
    
      <h4>Update Procurement Status</h4> 
    
       </th>
        <tr>

      <td>Bookname</td>
      <td >  <p class="text-info">You can procure more books for Book: 
      <?php
          require_once("connect.php");
          $statusQuery="select barcode,title from book";

        $statusResult=queryMysql($statusQuery);
   
     
        $no = mysql_num_rows($statusResult);
      echo "<select name='bcode' class='form-control'>";
    for ($i = 0 ; $i < $no ; ++$i)
      {
        $statusRow = mysql_fetch_row($statusResult);
        echo "<option value='$statusRow[0]'>$statusRow[1]</option>";
      }

      echo "</select><br/>";

      ?>  </p>
      </td>
     
         
        </tr> 

<tr>
  <td colspan="2">
    <p class="text-success"> Enter Number of Copies Procured</p>
  </td>
</tr>
<tr>
        <td>New Inventory</td><td>
        <input name="quant" required="true" class="form-control">
        </td>
       
</tr>


                  
  </table>
           
<button class="btn btn-success" type="submit" >Update Status</button>
</form>

       </div>         
</body>

</html>