<?php
require_once('header.php');
//$username=$_REQUEST['username'];
$query="select * from period";
$result=mysql_query($query);

?>
<div class="container-fluid">
<div class="form-group">
<a class="btn btn-primary" href="periodc.php">add new study period</a>
  
</div>

<table class=" table table-bordered"  align="center" id="tableid" datapagesize="20"> 
         <thead>
          <th colspan="11" >
          


        <h4>Period Details</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Period name</th> 
                    <th class="header" id="usr">Start time</th> 
                    <th class="header" id="usr">End Time</th> 
                   
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr >
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["starttime"] ?></td>
                    <td><?php echo $row["endtime"] ?></td>
                   
                 </tr>    
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
            </div