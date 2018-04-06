<?php // Escape String
      $conn=mysql_connect("localhost","root","");
	  $link=mysql_client_encoding($conn);
	  echo $link."<br>";
	  mysql_select_db("payilagam");
	  
	  $x="test";
	  
	  $y= mysql_real_escape_string($x);
	  
	  $q = "select * from data where name= '$y'";    // user='{$_POST['username']}'
	  
	  $query = mysql_query($q);
	  
	  $row = mysql_fetch_row($query);
	  
	  if($row)
	  {
		  echo $row[0];
	  }

?>

<?php  
$con = mysql_connect("localhost", "root", "");  
$selectdb = mysql_select_db("payilagam");  
?>
<form  method="POST" action="Escape_string.php">  
Check :<input type="text" name="name" />  
<input type="submit" name="submit" value="SUbmit" />  
</form>  
<?php  
$topic = mysql_real_escape_string($_POST['name']); 
 
$sql = mysql_query("select * from data where name = '$topic'");  
  
$row = mysql_fetch_row($sql); 
if($row)
{	
echo "<b style='color:blue;'>The details are:</b><br><br>";  
echo $row[0]."<br>".$row[1]."<br>".$row[2]."<br>".$row[3];  
}
else
{
	echo "This user is not exist";
}
?>  