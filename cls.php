<?php
include('connect.php');
if( $_POST ){
  $con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect:'.mysql_error());
  }

  mysql_select_db("roster", $con);

  $name= sanitizeString($_POST['name']);
  $stream = sanitizeString($_POST['stream']);
  $tr = sanitizeString($_POST['tr']);

   $query ="INSERT INTO classes (clasname,stream,teachername) VALUES('$name','$stream','$tr');";

 
        mysql_query($query);

  echo "<h2>Congratulations new class created </h2>";

  echo "<script>location.replace('classdetails.php')</script>";
  mysql_close($con);


}
   ?>
