<?php
require_once('header.php');
//$username=$_REQUEST['username'];
$query="select * from bookissue where status='returned' && issuedto='staff' order by returndate desc";

$result=mysql_query($query);

?>
<script type="text/javascript" src="js/jquery-2.1.3.min.js"> </script>

<script type="text/javascript" src="datatable.js"> </script>

<link rel="stylesheet" type="text/css" href="datatable.css">

<div class="container-fluid">

        <div class="col-md-3">
<a class="btn btn-primary" href="crtn.php">Staff Return Course book</a>
  
</div>


<table class=" display"  align="center" id="tableid" datapagesize="20"   >
         <thead>
          <th colspan="11" >
          


        <h4>Staff Returned Books</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Book Code</th> 
                    <th class="header" id="usr">Staff ID</th> 
                    <th class="header" id="usr">Return Date</th> 
                    <th class="header" id="usr">Due Date</th> 
                   
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr >
                    <td><?php echo $row["barcode"] ?></td>
                    <td><?php echo $row["studentcode"] ?></td>
                     <td><?php echo $row["returndate"] ?></td>
                    <td><?php echo $row["duedate"] ?></td>
                 
                   
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