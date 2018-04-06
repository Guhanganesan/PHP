<?php
     /* View All Databases  */
	 
	 $host = "localhost";
	 $user = "root";
	 $pass = "";
	 $connect=mysql_connect($host, $user, $pass);
	 $query="show databases";
	 $mysql=mysql_query($query);
	 /*$row=mysql_fetch_assoc($mysql);
	 while($row=mysql_fetch_assoc($mysql))
	 {
		 echo $row['Database']."<br>";
	 }
	 */
	 
	$row=mysql_fetch_row($mysql);
	 
	 echo $row[1]."<br>";
	 
	// $row1=mysql_num_rows( $mysql);
	 
	 //echo $row1;
?>