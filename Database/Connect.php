<?php
     /* Insert data into table  */
	 $host = "localhost";
	 $user = "root";
	 $pass = "";
	 $connect=mysql_connect($host, $user, $pass);
	 //mysql_select_db("trainee");
?>

<?php
     /* Connect to Databse  */
	 $host = "localhost";
	 $user = "root";
	 $pass = "";
	 $connect=mysql_connect($host, $user, $pass);
	 $query="create database Trainee";
	 $mysql=mysql_query($query);
	 if($mysql)
	 {echo "New Databse is created successfully";}
?>

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

 <?php
      $conn=mysql_connect("localhost","root","");
      $db=mysql_list_dbs($conn);
      if($db)
      {
          echo mysql_db_name($db,0);
      }
  
	  $rows=mysql_num_rows($db);
	  
	  //echo $rows;
  
        for($i=0; $i<15; $i++)
       {
		   echo mysql_db_name($db, $i)."<br>";
	   }		  
?>

<?php
$con=mysql_connect('localhost', 'root', '');   
$list = mysql_list_dbs($con);  
$rows = mysql_num_rows($list); 
$i = 0; 
while ($i < $rows)   
{  
echo mysql_db_name($list, $i) . "<br />";  
$i++;  
} 
?>  

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
<?php   // In array
mysql_connect("localhost", "root", "");  
mysql_select_db("trainee");  
$result = mysql_query("select Name from details");  
$row = mysql_fetch_object($result);  

print_r($row);

if(in_array("Kathir",$row))
{
	 echo "True";
}  
mysql_free_result($result);
?>
<?php // Show tables
   include("Connect.php");	  
//mysql_connect("localhost", "root", "");
$t = mysql_list_tables("trainee");
$rows = mysql_num_rows($t);
for ($i = 0; $i < $rows; $i++) {
    echo mysql_tablename($t, $i)."<br>";
}
?>
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
<?php  
mysql_connect("localhost", "root", "");  
mysql_select_db("trainee");  
$result = mysql_query("select * from details where Name = 'Guhan'");  
echo mysql_num_fields($result);   
?> 

<?php  
$con = mysql_pconnect("localhost", "root", "");  
if ($con)  
  {  
  echo "Connected successfully at : ". date("d/m/y : H:i:s", time());  
  }  
?>  

<?php   // Prepared Statement
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anbu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO data (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>


