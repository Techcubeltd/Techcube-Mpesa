<?php
require_once('header.php');
//$username=$_REQUEST['username'];
$query="select * from schoolterms";
$result=mysql_query($query);

?>
<div class="container-fluid">
<div class="form-group">
<a class="btn btn-primary" href="terms.php">add new term</a>
  
</div>

<table class=" table table-bordered"  align="center" id="tableid" datapagesize="20"> 
         <thead>
          <th colspan="11" >
          


        <h4>Term Details</h4>         
             </th>
             
                <tr> <th class="header" id="usr">Year</th> 
                    <th class="header" id="usr">Term name</th> 
                    <th class="header" id="usr">Start time</th> 
                    <th class="header" id="usr">End Time</th> 
                   
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr >
                <td><?php echo $row["year"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["startdate"] ?></td>
                    <td><?php echo $row["enddate"] ?></td>
                   
                 </tr>    
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
            </div