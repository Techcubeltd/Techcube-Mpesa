<?php
require_once('header.php');
$staff=$_REQUEST['code'];
$query="select * from bookissue where studentcode='$staff' && issuedto!='student' order by issuedate desc ";
$q2="select * from staff where employeecode='$staff'";

$result=mysql_query($query);
$r2=mysql_query($q2);
$r=mysql_fetch_array($r2);
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
<a class="btn btn-primary" href="issuet.php">issue book </a>
                    
                     <a class="btn btn-primary" type="submit" href="staffbksissuereport.php?id=<?php  echo $staff ?>" target="_blank">Print Report</a> 

</div>

<table class=" table table-list-search"  align="center" id="tableid" datapagesize="20"> 
         <thead>
          <th colspan="11" >
          


        <h4>Issued Books to <?php echo $r['fullname']?></h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Book Code</th> 
                    <th class="header" id="usr">Staff ID</th> 
                    <th class="header" id="usr">Issue Date</th> 
                    <th class="header" id="usr">Due Date</th>  

                   
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr >
                    <td><?php echo '<a href="bookstatus.php?code='.$row["barcode"].'">'.$row["barcode"].'</a>';?></td>
                    <td><?php echo $row["studentcode"] ?></td>
                     <td><?php echo $row["issuedate"] ?></td>
                    <td><?php echo $row["duedate"] ?></td>
                    <td><a href="rtbk.php" class="btn btn-danger btn-xs" type="submit">return book</td>
                   
                 </tr>    
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
            </div