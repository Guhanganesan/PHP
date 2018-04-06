<?php
     /* Connect to Databse  */
	 $host = "localhost";
	 $user = "root";
	 $pass = "";
	 $connect=mysql_connect($host, $user, $pass);
	 $query="create database Trainee";
	 $mysql=mysql_query($query);
	 if($mysql)
	 {echo "New Databse is created successfully";}
?>