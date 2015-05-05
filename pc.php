<?php
include('connect.php');
if( $_POST ){
  $con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect:'.mysql_error());
  }

  mysql_select_db("roster", $con);

  $fname = sanitizeString($_POST['fname']);
  $adminno=sanitizeString($_POST['adminno']);
  $desc=sanitizeString($_POST['desc']);
  $exp=sanitizeString($_POST['exp']);
  $surname=sanitizeString($_POST['surname']);
  $class=sanitizeString($_POST['class']);
  $gender=sanitizeString($_POST['gender']);
  $appdate=sanitizeString($_POST['appdate']);
  $desctype=sanitizeString($_POST['desctype']);
  $roles=sanitizeString($_POST['roles']);
  $email=sanitizeString($_POST['email']);

  
        
  $query ="INSERT INTO prefects (firstname,adminno,surname,description,termexpiry,gender,dateappointed,roles,email,class,designationtype)
  VALUES('$fname','$adminno','$surname','$desc','$exp','$gender','$appdate','$roles','$email','$class','$desctype');";

 
        mysql_query($query);

  echo "<h2>Congratulations new prefect created </h2>";

  echo "<script>location.replace('prefectsdetails.php')</script>";
  mysql_close($con);


}
   ?>
