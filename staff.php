<?php
include('header.php');
if( $_POST ){
 

  $fullname = sanitizeString($_POST['fullname']);
  $empcode=sanitizeString($_POST['code']);
  $dept=sanitizeString($_POST['dept']);
  $empdate=sanitizeString($_POST['empdate']);
  $nat=sanitizeString($_POST['nat']);
  $initials=sanitizeString($_POST['initials']);
  $gender=sanitizeString($_POST['gender']);
  $date1=sanitizeString($_POST['date1']);
  $address=sanitizeString($_POST['address']);
  $phone=sanitizeString($_POST['phone']);
  $email1=sanitizeString($_POST['emai']);
  $religion=sanitizeString($_POST['religion']);
  $jobtitle=sanitizeString($_POST['jobtitle']);
  $specs=sanitizeString($_POST['specs']);
  $marital=sanitizeString($_POST['marital']);
  $notes=sanitizeString($_POST['notes']);

  
        
  $query ="INSERT INTO staff (department,employeecode,fullname,initials,gender,dateofbirth,address,phoneno,email,religion,jobtitle,specialization,maritalstatus,joindate,nationalID,notes)
  VALUES('$dept','$empcode','$fullname','$initials','$gender','$date1','$address','$phone','$email1','$religion','$jobtitle','$specs','$marital','$empdate','$nat','$notes');";

 
        mysql_query($query);

  echo "<h2>Congratulations new staff created </h2>";

 echo "<script>location.replace('staffdetails.php')</script>";



}
   ?>
