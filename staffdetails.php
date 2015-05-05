<?php
require_once('header.php');
//$username=$_REQUEST['username'];
$query="select * from staff";
$result=mysql_query($query);

?>
<div class="container-fluid">


<table class=" table table-bordered"  align="center" id="tableid" datapagesize="20"> 
         <thead>
          <th colspan="11" >
          


        <h4>Staff Details</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Staff code</th> 
                    <th class="header" id="usr">Initials</th> 
                    <th class="header" id="usr">Fullname</th> 
                    <th class="header" >Email</th>
                      <th class="header" >Department</th>
                        <th class="header" >Phone Number</th>
                          <th class="header" >Specialization</th>
                    <th class="header" >Date Employed</th>

                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr >
                <td><?php echo $row["employeecode"] ?></td>
                    <td><?php echo $row["initials"] ?></td>
                    <td><?php echo $row["fullname"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["department"] ?></td>
                    <td><?php echo $row["phoneno"] ?></td>
                    <td><?php echo $row["specialization"] ?></td>
                    <td><?php echo $row["joindate"] ?></td>
                   
                 </tr>   	
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
            </div