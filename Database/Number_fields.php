<?php  
mysql_connect("localhost", "root", "");  
mysql_select_db("trainee");  
$result = mysql_query("select * from details where Name = 'Guhan'");  
echo mysql_num_fields($result);   
?>   

