<?php // Show tables
   include("Connect.php");	  
//mysql_connect("localhost", "root", "");
$t = mysql_list_tables("trainee");
$rows = mysql_num_rows($t);
for ($i = 0; $i < $rows; $i++) {
    echo mysql_tablename($t, $i)."<br>";
}
?>
			 

