<?php
include('connect.php');
if( $_POST ){
  $con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect:'.mysql_error());
  }

  mysql_select_db("roster", $con);

  $fname = sanitizeString($_POST['name']);
  $starttime = sanitizeString($_POST['str']);
  $endtime = sanitizeString($_POST['end']);

   $query ="INSERT INTO period (name,starttime,endtime)
  VALUES('$fname','$starttime','$endtime');";

 
        mysql_query($query);

  echo "<h2>Congratulations new Periodcreated </h2>";

  echo "<script>location.replace('period.php')</script>";
  mysql_close($con);


}
   ?>
