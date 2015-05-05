<?php
require_once('header.php');
//$username=$_REQUEST['username'];
$query="select * from prefects";
$result=mysql_query($query);

?>
<div class="container-fluid">


<table class=" table table-bordered"  align="center" id="tableid" datapagesize="20"> 
         <thead>
          <th colspan="11" >
          


        <h4>Prefects Details</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Admission Number</th> 
                    <th class="header" id="usr">Surname</th> 
                    <th class="header" id="usr">Firstname</th> 
                                         <th class="header" >Description</th>
                        <th class="header" >Class</th>
                          <th class="header" >Date Appointed</th>
                    <th class="header" >Term Expiry</th>

                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr >
                <td><?php echo $row["adminno"] ?></td>
                    <td><?php echo $row["surname"] ?></td>
                    <td><?php echo $row["firstname"] ?></td>
                 
                    <td><?php echo $row["description"] ?></td>
                    <td><?php echo $row["class"] ?></td>
                    <td><?php echo $row["dateappointed"] ?></td>
                    <td><?php echo $row["termexpiry"] ?></td>
                   
                 </tr>   	
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
            </div