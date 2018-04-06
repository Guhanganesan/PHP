<?php  
mysql_connect("localhost", "root", "");  
mysql_select_db("trainee");  
$result = mysql_query("select Name from details");  
$row = mysql_fetch_object($result);  

print_r($row);

/*
if(in_array("Kathir",$row))
{
	 echo "True";
}  
mysql_free_result($result);
?>