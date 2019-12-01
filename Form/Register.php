<html>
<body>
<a href="Login.php">Login</a>
<h2>Register</h2>

<form method="get" action="">
  Name:<br>
  <input type="text" name="a">
  <br>
  Email:<br>
  <input type="email" name="b">
  <br>
  Pass:<br>
  <input type="password" name="c">
  <br>
  <input type="submit" name="submit">
 </form> 

<?php
if(!empty($_GET))
{   
    include("db.php");
	$name=$_GET['a'];
	$email=$_GET['b'];
	$pass=$_GET['c'];
	
	//echo $name, $email, $pass;
	$query="insert into user(name,email,pass) values('".$name."','".$email."','".$pass."')";
    $sql=mysqli_query($con,$query);
	if($sql)
	{
		echo "Suceessfully Registered";
	}
}
?>
</body>
</html>