<?php
require_once('header.php');

if( $_POST ){


  $username = $_POST['usr'];
   $Status=$_POST['status'];
 

            $username = mysql_real_escape_string($username);
            $Status = mysql_real_escape_string($Status);
            


  $query ="UPDATE  user SET status='$Status' where userName='$username';";
  
  
        mysql_query($query);

  echo "<h2>Congratulations Status Updated</h2>";

 

}
  echo "<script>location.replace('manageUsers.php')</script>";
   ?>