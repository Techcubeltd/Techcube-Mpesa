   <script type="text/javascript">
              $(document).ready(function() {
    $('#tableid').dataTable( {
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    } );
} );
            </script>
<?php
require_once('header.php');
//$username=$_REQUEST['username'];
$query="select * from book  where library!='yes' order by title asc ";
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
          


        <h4>Course Books</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Book Code</th> 
                     <th class="header" id="usr">Book Name</th>
                    <th class="header" id="usr">Publisher</th> 
                    <th class="header" id="usr">Author</th> 
                    <th class="header" id="usr">Price</th>  
                    <th class="header" id="usr">Inventory</th>
                    <th class="header" id="usr">Date Added</th>
                    <th class="header" id="usr">Status</th>
                    <th class="header" id="usr">Actions</th>


                   
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr >
                    <td><?php echo $row["barcode"];?></td>
                    <td><?php echo $row["title"] ?></td>
                     <td><?php echo $row["publisher"] ?></td>
                    <td><?php echo $row["author"] ?></td>
                     <td><?php echo $row["price"] ?></td>
                      <td><?php echo $row["quantity"] ?></td>
                       <td><?php echo $row["dateadded"] ?></td>
                        <td><?php echo $row["status"] ?></td>
                    <td><a href="rmv.php?barcode=<?php echo $row["barcode"]?>" class="btn btn-danger btn-xs" type="submit">remove book</td>
                   
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