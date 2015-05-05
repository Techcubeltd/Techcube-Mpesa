<?php
require_once('header.php');
//$username=$_REQUEST['username'];
$query="select * from bookissue where status='returned' && issuedto='student' order by returndate desc";

$result=mysql_query($query);

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"> </script>

<script type="text/javascript" src="search.js"> </script>


<div class="container-fluid">

        <div class="col-md-3">
            <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="Search for" >
                    

                </div>
                
            </form>
        </div>
<div class="col-md-9">
<a class="btn btn-primary" href="crtbk.php">Return Course book</a>
  
</div>

<table class=" table table-list-search"  align="center" id="tableid" datapagesize="20"> 
         <thead>
          <th colspan="11" >
          


        <h4>Returned Books</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Book Code</th> 
                    <th class="header" id="usr">Student ID</th> 
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
            </div