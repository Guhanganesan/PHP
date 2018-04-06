<?php
     /* Insert data into table  */
	 $host = "localhost";
	 $user = "root";
	 $pass = "";
	 $connect=mysql_connect($host, $user, $pass);
	 mysql_select_db("trainee");
	 $query="Insert into details values('Guhan', 'Ganesan', '979181****')";
	 $mysql=mysql_query($query);
	 if($mysql)
	 {
		 echo "The Data is inserted into the table is success!!";
	 } 
?>