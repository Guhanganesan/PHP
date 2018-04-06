<?php
     /* Create New Table  */
	 $host = "localhost";
	 $user = "root";
	 $pass = "";
	 $connect=mysql_connect($host, $user, $pass);
	 mysql_select_db("trainee");
	 $query="create table Details(Name varchar(20), Father varchar(20), Mobile varchar(20))";
	 $mysql=mysql_query($query);
	 if($mysql)
	 {echo "New Table is created successfully";} 
 ?>
