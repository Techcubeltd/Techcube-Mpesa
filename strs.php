<?php
require_once('header.php');
//$username=$_REQUEST['username'];
$query="select * from stream";
$result=mysql_query($query);

?>
<div class="container-fluid">
<div class="form-group">
<a class="btn btn-primary" href="streams.php">add new stream</a>
  
</div>

<table class=" table table-bordered"  align="center" id="tableid" datapagesize="20"> 
         <thead>
          <th colspan="11" >
          


        <h4>Stream Details</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">ID Number</th> 
                    <th class="header" id="usr">Stream name</th> 
                   
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr >
                <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    
                   
                 </tr>   	
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
            </div