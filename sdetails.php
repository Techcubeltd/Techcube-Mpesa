<?php
require_once('header.php');
//$username=$_REQUEST['username'];
$query="select * from subject order by subjectname asc ";
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
<a class="btn btn-primary" href="issue.php">Issue Book</a>
  
</div>

<table class=" table table-list-search"  align="center" id="tableid" datapagesize="20"> 
         <thead>
          <th colspan="11" >
          


        <h4>Subjects</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Subject Code</th> 
                     <th class="header" id="usr">Subject Name</th>
                    <th class="header" id="usr">Group</th> 
                    <th class="header" id="usr">Field</th> 
                  
                   
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