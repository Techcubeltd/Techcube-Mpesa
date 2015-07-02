<?php

include "header.php"; //Connect to Database

//$deleterecords = "TRUNCATE TABLE tablename"; //empty the table of its current records

//mysql_query($deleterecords);

if (isset($_POST['submit'])) {

    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {

        echo "<h1>" . "File ". $_FILES['filename']['name'] ." uploaded successfully." . "</h1>";

        echo "<h2>Displaying contents:</h2>";

        readfile($_FILES['filename']['tmp_name']);

    }

    $handle = fopen($_FILES['filename']['tmp_name'], "r");

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

        $import="INSERT into students(adminno,studentname,gender,academicyear,academiclevel,clsstream) values('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]')";
           mysql_insert_id(); 

        mysql_query($import) or die(mysql_error());
 }

    fclose($handle);

    print "Import done";

}else {

    print "Upload new csv by browsing to file and clicking on Upload<br />\n";

    print "<form enctype='multipart/form-data' action='uploader.php' method='post'>";

    print "File name to import:<br />\n";

    print "<input size='50' type='file' name='filename' class='btn btn-primary'><br />\n";

    print "<input type='submit' name='submit' class='btn btn-success' value='Upload'></form>";

}

 

?>

 

</div>

</div>

</body>

</html>
