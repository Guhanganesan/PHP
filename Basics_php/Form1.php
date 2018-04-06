<html>
<form method="post" action="Form1.php">
   Name: <input type="text" name="name" /><br><br>
   Gender: <input type="radio" name="male" value="male" />Male <input type="radio" name="male" value="female" />Female<br><br>
   Course: <select name="select" ><option>Java </option><option> PHP</option><option>C++ </option> </select><br><br>
   Pass: <input type="checkbox" name="check" value="pass"/> Fail:<input type="checkbox" name="check" value="fail"/><br><br>
   <input type="submit" value="submit" name="submit"/><br><br>
</form>
<?php
$host="localhost";
$user="root";
$pass="";
$x=$_POST['name'];
$y=$_POST['male'];
$z=$_POST['select'];
$a=$_POST['check'];
mysql_connect($host,$user,$pass);
mysql_select_db("payilagam");
$sql=mysql_query("insert into checkbox values('$x','$y','$z','$a')");
if($sql)
{
	echo "Successfully Inserted";
}
?>
</html>
