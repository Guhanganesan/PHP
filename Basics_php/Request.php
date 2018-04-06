<html>
<body>

<form method="post" action="Request.php" method="get" > <!-- post -->
  Name: <input type="text" name="name"><br><br>
  Mobile: <input type="text" name="mob"><br><br>
  Age:	  <input type="text" name="age"><br><br>
  <input type="submit">
</form>

<?php
     // Assignment: $_SERVER["REQUEST_METHOD"]

	$name =$_REQUEST['name']; 
	$mob = $_REQUEST['mob'];
	$age = $_REQUEST['age'];
   	echo $name."<br>";
	echo $mob."<br>";
	echo $age."<br>";
  
?>

</body>
</html>