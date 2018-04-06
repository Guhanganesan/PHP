<?php
     $dbhost="localhost";
     $dbuser="root";
     $dbpass="";
     $conn=mysql_connect($dbhost,$dbuser,$dbpass);
     mysql_select_db("trainee"); 
     $result = mysql_query("select * from details 
     where name='Guhan'");
     $row= mysql_fetch_row($result); // It stores values in an array
     echo $row[0];
	 echo $row[1];
	 echo $row[2];
?>