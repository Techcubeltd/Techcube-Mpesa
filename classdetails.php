<?php
require_once('header.php');
//$username=$_REQUEST['username'];
$query="select * from classes";
$result=mysql_query($query);

?>
<div class="container-fluid">
<div class="form-group">
<a class="btn btn-primary" href="classes.php">add new class</a>
  
</div>

<table class=" table table-bordered"  align="center" id="tableid" datapagesize="20"> 
         <thead>
          <th colspan="11" >
          


        <h4>Class Details</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Class name</th> 
                    <th class="header" id="usr">Stream</th> 
                    <th class="header" id="usr">Class Teacher</th> 
                   
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr >
                    <td><?php echo $row["clasname"] ?></td>
                    <td><?php echo $row["stream"] ?></td>
                    <td><?php echo $row["teachername"] ?></td>
                   
                 </tr>    
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
            </div