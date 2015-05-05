<?php
require_once('header.php');
//$username=$_REQUEST['username'];
$query="select * from user ";
$result=mysql_query($query);

?>
<div class="container-fluid">


<table class=" table table-bordered"  align="center" id="tableid" datapagesize="20"> 
         <thead>
          <th colspan="11" >
          


        <h4>User Details</h4>         
             </th>
             
                <tr> 

                   
                    <th class="header" id="usr">Username</th> 
                    <th class="header" >Email</th>
                    <th class="header" >Status</th>
                    <th class="header" >Date Joined</th>
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr >
                 
                    <td><?php echo '<a href="changeuser.php?userName='.$row["userName"].'">'.$row["userName"].'</a>';?></td>
                    <td><?php echo $row["email"] ?></td>
                     <td><?php echo $row["status"] ?></td>
                    <td><?php echo $row["dateadded"] ?></td>
                   
                 </tr>   	
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
            </div