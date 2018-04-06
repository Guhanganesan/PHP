<?php  
$con = mysql_pconnect("localhost", "root", "");  
if ($con)  
  {  
  echo "Connected successfully at : ". date("d/m/y : H:i:s", time());  
  }  
?>  