<?php
require_once('header.php');
//$username=$_REQUEST['username'];
//$query="select * from bookissue where  returndate > duedate order by returndate desc";
$q2="select * from fine where status='unpaid'";

//$result=mysql_query($query);

$result2=mysql_query($q2);
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
<a class="btn btn-primary" href="rtbk.php">Late Book Returns</a>
  
</div>

<table class=" table table-list-search"  align="center" id="tableid" datapagesize="20"> 
         <thead>
          <th colspan="11" >
          


        <h4>Returned Books</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Book Code</th> 
                    <th class="header" id="usr">Student ID</th>  
                    <th class="header" id="usr">Amount</th> 
                    <th class="header" id="usr">status</th> 
                    <th class="header" id="usr">Action</th> 
                    
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result2)) { ?>   

            <?php 
            
            $d2=$row["amount"];
          
            $amnt=$d2*5;
            
           // $r3=mysql_fetch_assoc($r2);
//            $row2 = mysql_fetch_array($result2);
?>



                <tr >
                    <td><?php echo $row["bookcode"] ?></td>
                    <td><input name='sc' readonly value=<?php echo $row['studentcode']?>></td>
                     <td><?php echo $amnt ?></td>
                    <td><?php echo $row["status"] ?></td>
                    <?php
                    $st=$row["status"];
                    if ($st!="paid") { ?>
                  
                    <td><a href="payfine.php?id=<?php echo $row["bookcode"]?>" class="btn btn-danger btn-xs">Pay Fine</a></td>
                 
                   <?php 
                    }

                    ?>
                 </tr>    
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
            </div