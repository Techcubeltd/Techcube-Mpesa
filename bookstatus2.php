
<?php 
require_once("header.php");

$bcode=$_REQUEST['code'];
//$orderNo=$_REQUEST['assignedto'];

$result = mysql_query("select * from book where barcode='$bcode'");

echo mysql_error();

?>
   
 
<body>

<form action='status.php' method="post" enctype="multipart/form-data">
<div class="container-fluid">
<br />
    <table class="table table-bordered">
    <?php while ($row = mysql_fetch_array($result)){ ?>
       <tr>
       <th colspan="4" >
    
      <h4>Update Procurement Status</h4> 
      <p class="text-info">You can procure more books for Barcode: <?php echo "<input name='bcode' value=$bcode readonly >";?> </p>
       </th>
        <tr>

      <td>Bookname</td>
      <td ><input name="bname" id="username" class="form-control" readonly="" onMouseOver="javascript:geter3()"></td>
         <script type="text/javascript">  
        function geter3(){
         var $i= document.getElementById('username').value ='<?php echo $row["title"] ?>';

          };
        
</script>
         
        </tr>
         <tr>
      <td>Publisher</td>
      <td ><input name="pub" id="pname" class="form-control" readonly="" onMouseOver="javascript:geter()"></td>
         <script type="text/javascript">  
        function geter(){
         var $i= document.getElementById('pname').value ='<?php echo $row["publisher"] ?>';

          };
        
</script>

         <td>Author</td>
      <td ><input name="auth" id="aname" class="form-control" readonly="" onMouseOver="javascript:geter1()"></td>
         <script type="text/javascript">  
        function geter1(){
         var $i= document.getElementById('aname').value='<?php echo $row["author"] ?>';

          };
        
</script>

         
        </tr>
          <td>Author</td>
      <td ><input name="edt" id="edt" class="form-control" readonly="" onMouseOver="javascript:geter2()"></td>
         <script type="text/javascript">  
        function geter2(){
         var $i= document.getElementById('edt').value='<?php echo $row["edition"] ?>';

          };
        
</script>
  <td>Current Inventory</td>
      <td ><input name="edt" id="cur" class="form-control" readonly="" onMouseOver="javascript:geter5()"></td>
         <script type="text/javascript">  
        function geter5(){
         var $i= document.getElementById('cur').value='<?php echo $row["quantity"] ?>';

          };
        
</script>
</tr>
<tr>
<tr>
  <th class="header">
    <p class="text-success"> Enter Number of Copies Procured</p>
  </th>
</tr>
        <td>New Inventory</td><td>
        <input name="quan" required="true" class="form-control">
        </td>
       
</tr>


                  
  </table>
           
<a class="btn btn-success" type="submit" id="savebtn" href="status.php" >Update Status</a>
</form>
      
<?php } ?>
       </div>         
</body>

</html>