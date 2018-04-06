<?php  // Fetch Object
mysql_connect("localhost", "root", "");  
mysql_select_db("trainee");  
$result = mysql_query("select * from details");  
while ($row = mysql_fetch_object($result))  
{
 echo $row->Name."<br>";
 echo $row->Father."<br>"; 
 echo $row->Mobile."<br>"; 
}  
mysql_free_result($result);
/*
mysql_free_result() will free all memory associated with the result identifier result

The mysqli_fetch_object() function returns the current row of a result set, as an object.
*/  
?>  