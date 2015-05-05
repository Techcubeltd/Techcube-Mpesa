<?php
include('connect.php');
if( $_POST ){
  $con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect:'.mysql_error());
  }

  mysql_select_db("roster", $con);

  $ye = sanitizeString($_POST['year']);
  $fname = sanitizeString($_POST['name']);
  $starttime = sanitizeString($_POST['str']);
  $endtime = sanitizeString($_POST['end']);

   $query ="INSERT INTO schoolterms (year,name,startdate,enddate)
  VALUES('$ye','$fname','$starttime','$endtime');";

 
        mysql_query($query);

  echo "<h2>Congratulations new Periodcreated </h2>";

  echo "<script>location.replace('scdetails.php')</script>";
  mysql_close($con);


}
   ?>
