<?php
require_once('header.php');
//$username=$_REQUEST['username'];
$query="select * from students order by academiclevel asc";
$result=mysql_query($query);

?>
<div class="container-fluid">


<table class=" table table-bordered"  align="center" id="tableid" datapagesize="20"> 
         <thead>
          <th colspan="11" >
          


        <h4>Student Details</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Student Names</th> 
                    <th class="header" id="usr">Surname</th> 
                    <th class="header" id="usr">Admin No</th> 
                    <th class="header" >Gender</th>
                      <th class="header" >Academic Level</th>
                        <th class="header" >Stream</th>
                          <th class="header" >Admission Date</th>

                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr >
                <td><?php echo $row["studentname"] ?></td>
                    <td><?php echo $row["surname"] ?></td>
                    <td><?php echo $row["adminno"] ?></td>
                    <td><?php echo $row["gender"] ?></td>
                    <td><?php echo $row["academiclevel"] ?></td>
                    <td><?php echo $row["clsstream"] ?></td>
                    <td><?php echo $row["admdate"] ?></td>
                                      
                 </tr>   	
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
            </div