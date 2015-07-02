<?php
require_once('header.php');
//$username=$_REQUEST['username'];
$query="select * from subject order by subjectname asc ";
$result=mysql_query($query);

?>
<script type="text/javascript" src="js/jquery-2.1.3.min.js"> </script>

<script type="text/javascript" src="datatable.js"> </script>

<link rel="stylesheet" type="text/css" href="datatable.css">


<div class="container-fluid">

        <div class="col-md-3">
<a class="btn btn-primary" href="issue.php">Issue Book</a>
  
</div>

<table class=" display"  align="center" id="tableid" datapagesize="20"   >
         <thead>
          <th colspan="11" >
          


        <h4>Subjects</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Subject Code</th> 
                     <th class="header" id="usr">Subject Name</th>
                    <th class="header" id="usr">Group</th> 
                    <th class="header" id="usr">Field</th> 
                    <th class="header" id="usr">Actions</th> 
                  
                   
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr >
                    <td><?php echo $row["subjectcode"];?></td>
                    <td><?php echo $row["subjectname"] ?></td>
                     <td><?php echo $row["subjectgroup"] ?></td>
                    <td><?php echo $row["field"] ?></td>
                   
                    <td><a href="rmvsub.php?id=<?php echo $row["subjectID"]?>" class="btn btn-danger btn-xs" type="submit">remove subject</td>
                   
                 </tr>    
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
            </div>

            <script type="text/javascript">
              $(document).ready(function() {
    $('#tableid').dataTable( {
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    } );
} );
            </script>