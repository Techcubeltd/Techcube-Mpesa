
<?php 
require_once("header.php");

$username=$_REQUEST['userName'];
//$orderNo=$_REQUEST['assignedto'];

$result = mysql_query("select * from user where username='$username'");

echo mysql_error();

?>
   
 
<body>

<form action='status2.php' method="post" enctype="multipart/form-data">
<div class="container">
<br />
    <table class="table table-bordered">
    <?php while ($row = mysql_fetch_array($result)){ ?>
       <tr>
       <th colspan="4" >
    
      <h4>Change User Status</h4> 
        <tr>
      <td>Username</td>
      <td colspan="3"><input name="usr" id="username" readonly="" onMouseOver="javascript:geter3()">
         <script type="text/javascript">  
        function geter3(){
         var $i= document.getElementById('username').value ='<?php echo $row["userName"] ?>';

          };
        
</script>
          </th>
        </tr>
        <td>Status:</td><td> <select name="status" required="true">
              <option value="active">Active</option>
              <option value="suspended">Suspended</option>
              <option value="waiting">Waiting</option>
        </td>
       
</tr>

<?php } ?>
                  
  </table>
           
<button class="btn btn-success" type="submit" id="savebtn" >Update Status</button>
</form>
      

       </div>         
</body>

</html>