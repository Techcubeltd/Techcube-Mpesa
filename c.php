<?php
include('connect.php');
if( $_POST ){
  $con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect:'.mysql_error());
  }

  mysql_select_db("roster", $con);

  $fname = sanitizeString($_POST['stream']);

   $query ="INSERT INTO stream (name)
  VALUES('$fname');";

 
        mysql_query($query);

  echo "<h2>Congratulations new stream created </h2>";

  echo "<script>location.replace('strs.php')</script>";
  mysql_close($con);


}
   ?>
