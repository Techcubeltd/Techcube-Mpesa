<?php
require_once('connect.php');
session_start();
if(isset($_SESSION['loggedIn']))
{
if(($_SESSION['loggedIn'])==true)
{
$user=$_SESSION['user'];
  $query=mysql_query("select accountType as usr from user where userName='$user'");
      $row = mysql_fetch_assoc($query);
    if ($row['usr']!='1') {
echo <<<HeaderFunction

<!DOCTYPE html>
<html lang="en">
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iLibrary System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/drop.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
        

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    <div id="wrapper" >
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">iLibrary System</a>
            </div>
                
                                   
    
        <ul class="nav top-nav">
        <!--li>
        <a href="frontdesk/index.php">Front Desk</a>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Academic<b class="caret"></b></a>
            <ul class="dropdown-menu">
            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Books & Subjects</a>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="books.php">Books</a></li>
            <li><a href="subjects.php">Subjects</a></li>
            </ul> 
 
            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Classes</a>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="streams.php">Streams</a></li>
            <li><a href="classes.php">Classes</a></li>
            </ul>     
            </li>
 
            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Examinations</a>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="streams.php">Exam</a></li>
            <li><a href="classes.php">Report Card</a></li>
            <li><a href="classes.php">Datasheet</a></li>
            <li><a href="eset.php">Settings</a></li>
            <li><a href="grades.php">Grades</a></li>
            <li><a href="examtype.php">Exam Types</a></li>
            
            </ul>     
            </li>
 
            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Library</a>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="librarybooks.php">Library Books</a></li>
            <li><a href="issue.php">Issue Book</a></li>
             <li><a href="rtbk.php">Return Book</a></li>
             <li><a href="fines.php">Fine</a></li>
             <li><a href="sbcode.php">Student Codes</a></li>
             <li class="dropdown-submenu"> <a tabindex="-1" href="#">Reports</a>
            <ul class="dropdown-menu">
                 <li><a href="issues.php">Issued Book</a></li>
             <li><a href="returns.php">Returned Book</a></li>
             <li><a href="fine.php">Fine Reports</a></li>
            </ul>     
            </li>
            </ul>     
            </li>

            </ul>
        </li-->
           <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">BOOKS<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="books.php">Course Books</a></li>
                <li><a href="librarybooks.php">Library books</a></li>

                <li><a href="pbooks.php">Procure books</a></li>

            </ul>
        </li>
          <!--li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Finance<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li class="dropdown-submenu"> <a tabindex="-1" href="#">Fees</a>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="feeset.php">Fees Setup</a></li>
            <li><a href="pay.php">Receive Payment</a></li>
             <li><a href="rtbk.php">Balances</a></li>
             <li><a href="fine.php">Fines</a></li>
            </ul>     
            </li>


            </ul>
        </li--> 

 

         <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Administration<b class="caret"></b></a>
            <ul class="dropdown-menu">
            
            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Students</a>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="student.php">Students Registration</a></li>
            <li><a href="sbcode.php">Students Barcode</a></li>
            <li><a href="stdetails.php">Students Details</a></li>    
            </ul>   
            </li>
            
            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Subjects</a>
            <ul class="dropdown-menu">
             <li><a href="subjects.php">Add Subjects</a></li>
            <li><a href="sdetails.php">Subjects Details</a></li>
            

             </ul> 
                
            </li>


            </ul>
        </li>
           <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Issue Books<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="issue.php">Issue Students</a></li>
                 <li><a href="issuet.php">Issue Teachers</a></li>
            </ul>
        </li>

          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Return Books<b class="caret"></b></a>
            <ul class="dropdown-menu">
                  <li><a href="rtbk.php">Return Book</a></li>
                 <li><a href="rtn.php">Staff Return </a></li>
            </ul>
        </li>

         <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Fines<b class="caret"></b></a>
            <ul class="dropdown-menu">
                  <li><a href="fine.php">Student Fines</a></li>
                 
            </ul>
        </li>


             <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Course Books<b class="caret"></b></a>
            <ul class="dropdown-menu">


            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Books</a>
            <ul class="dropdown-menu">
             <li><a href="books.php">Add Book</a></li>
            <li><a href="cbdetails.php">Books Details</a></li>
            </ul> 
             </li>



                <li><a href="issuec.php">Issue Students</a></li>
                 <li><a href="issuetc.php">Issue Teachers</a></li>
            </ul>
        </li>


           <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Statistics<b class="caret"></b></a>
            <ul class="dropdown-menu">
            
            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Staff</a>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="staffissues.php">Book issues</a></li>
            <li><a href="staffcbooks.php">Course Books</a></li>
            <li><a href="stbcode.php">Staff Barcode</a></li>
            <li><a href="staffdetails.php">Staff Details</a></li>    
            </ul>   
            </li>
            
            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Students</a>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="studentissues.php">Book issues</a></li>
            <li><a href="coursestd.php">Course Books</a></li>
            </ul>   
            </li>

            </ul>
        </li>


           <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Reports<b class="caret"></b></a>
            <ul class="dropdown-menu">
            
            <li> <a tabindex="-1" href="reports.php">Reports</a>
            
            </li>
            
            </ul>   
            </li>

      



        <li class="dropdown pull-right">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">$user <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="logOut.php">Log Out</a></li>
                 <!--li><a href="admin/index.php">Admin Panel</a></li-->
            </ul>
        </li>

    </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="info">
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="staffcreate.php"><i class="fa fa-fw fa-bar-chart-o"></i>Add New Staff Members</a>
                    </li>
                    <li>
                        <a href="staffdetails.php"><i class="fa fa-fw fa-table"></i>Staff Details</a>
                    </li>
                   
                    <li>
                        <a href="manageusers.php"><i class="fa fa-fw fa-edit"></i>Users</a>
                    </li>
                   
                   
 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> Configuration <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="terms.php">School Year Setup</a>

                            </li>
                            <li>
                                <a href="periodc.php">Study Periods Setup</a>
                            </li>
                            <li>
                                <a href="streams.php">Streams Setup</a>
                            </li><li>
                                <a href="classes.php">Classes Setup</a>
                            </li>
                            <li>
                                <a href="advance.php">Advance Classes</a>
                            </li>
                        </ul>
                    </li>

                      <!--li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Reports <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="scdetails.php">View School Terms</a>

                            </li>
                            <li>
                                <a href="period.php">View Study Periods</a>
                            </li>
                            <li>
                                <a href="strs.php">View Streams</a>
                            </li><li>
                                <a href="classdetails.php">View ClassRooms</a>
                            </li>
                        </ul>
                    </li-->

                   


                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

    <!-- /#wrapper -->
<div id="page-wrapper">
<div class="container-fluid" >
 <div class="row">
 
<div class="col-lg-12">
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>


HeaderFunction;

}else

echo <<<HeaderFunction

<!DOCTYPE html>
<html lang="en">
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>iLibrary System</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
        <div id="wrapper" >
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">iLibrary System</a>
            </div>
                
                                   
    
        <ul class="nav top-nav">

           <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">BOOKS<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="cbooks.php">Course Books</a></li>
                <li><a href="ulibrarybooks.php">Library books</a></li>
            </ul>
        </li>
      

 

         <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Administration<b class="caret"></b></a>
            <ul class="dropdown-menu">
            
            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Students</a>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="student.php">Students Registration</a></li>
            <li><a href="sbcode.php">Students Barcode</a></li>
            <li><a href="stdetails.php">Students Details</a></li>    
            </ul>   
            </li>
            
            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Subjects</a>
            <ul class="dropdown-menu">
             <li><a href="subjects.php">Add Subjects</a></li>
            <li><a href="sdetails.php">Subjects Details</a></li>
            

             </ul> 
                
            </li>


            </ul>
        </li>
           <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Issue Books<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="issue.php">Issue Students</a></li>
                 <li><a href="issuet.php">Issue Teachers</a></li>
            </ul>
        </li>

          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Return Books<b class="caret"></b></a>
            <ul class="dropdown-menu">
                  <li><a href="rtbk.php">Return Book</a></li>
                 <li><a href="rtn.php">Staff Return </a></li>
            </ul>
        </li>

         <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Fines<b class="caret"></b></a>
            <ul class="dropdown-menu">
                  <li><a href="fine.php">Student Fines</a></li>
                 
            </ul>
        </li>


             <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Course Books<b class="caret"></b></a>
            <ul class="dropdown-menu">


            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Books</a>
            <ul class="dropdown-menu">
             <li><a href="books.php">Add Book</a></li>
            <li><a href="cbdetails.php">Books Details</a></li>
            </ul> 
             </li>



                <li><a href="issuec.php">Issue Students</a></li>
                 <li><a href="issuetc.php">Issue Teachers</a></li>
            </ul>
        </li>


           <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Statistics<b class="caret"></b></a>
            <ul class="dropdown-menu">
            
            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Staff</a>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="staffissues.php">Book issues</a></li>
            <li><a href="staffcbooks.php">Course Books</a></li>
            <li><a href="stbcode.php">Staff Barcode</a></li>
            <li><a href="staffdetails.php">Staff Details</a></li>    
            </ul>   
            </li>
            
            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Students</a>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="studentissues.php">Book issues</a></li>
            <li><a href="coursestd.php">Course Books</a></li>
            </ul>   
            </li>

            </ul>
        </li>


           <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Reports<b class="caret"></b></a>
            <ul class="dropdown-menu">
            
            <li> <a tabindex="-1" href="reports.php">Reports</a>
            
            </li>
            
            </ul>   
            </li>

      



        <li class="dropdown pull-right">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">$user <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="logOut.php">Log Out</a></li>
                 <!--li><a href="admin/index.php">Admin Panel</a></li-->
            </ul>
        </li>

    </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="info">
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="staffcreate.php"><i class="fa fa-fw fa-bar-chart-o"></i>Add New Staff Members</a>
                    </li>
                    <li>
                        <a href="staffdetails.php"><i class="fa fa-fw fa-table"></i>Staff Details</a>
                    </li>
                   
                    <li>
                        <a href="manageusers.php"><i class="fa fa-fw fa-edit"></i>Users</a>
                    </li>
                   
                   
 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> Configuration <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="terms.php">School Year Setup</a>

                            </li>
                            <li>
                                <a href="periodc.php">Study Periods Setup</a>
                            </li>
                            <li>
                                <a href="streams.php">Streams Setup</a>
                            </li><li>
                                <a href="classes.php">Classes Setup</a>
                            </li>
                            <li>
                                <a href="advance.php">Advance Classes</a>
                            </li>
                        </ul>
                    </li>

                      <!--li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Reports <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="scdetails.php">View School Terms</a>

                            </li>
                            <li>
                                <a href="period.php">View Study Periods</a>
                            </li>
                            <li>
                                <a href="strs.php">View Streams</a>
                            </li><li>
                                <a href="classdetails.php">View ClassRooms</a>
                            </li>
                        </ul>
                    </li-->

                   


                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    <!-- /#wrapper -->
<div id="page-wrapper">
<div class="container-fluid" >
 <div class="row">
 
<div class="col-lg-12">
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
  
HeaderFunction;

echo <<< logOut
<script type="text/javascript">;
function logOut()
{
    location.replace('logOut.php');
}
 </script>
logOut;
}
else
{
echo <<< Home
    <script>
    location.replace("signIn.php");
    </script>
Home;
}
}
else
{
    echo <<< Home
    <script>
    location.replace("signIn.php");
    </script>
Home;
}
?>