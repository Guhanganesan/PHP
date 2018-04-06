<form action="Regular_Expression.php" method="post">

      <input type="text" name="name" >
	  <input type="submit" name="submit" value="submit">
</form>
<?php
     $x=""; $a=""; $b="";
	 if(!empty($_POST['name']))
	 {
		 $x=$_POST['name'];
		 $pattern="/^[a-zA-Z]*$/";
		 if (preg_match($pattern,$x))
										{
											$a="valid Id"; 
										}
										else
										{
											$b="Invalid Id"; 
										}											
	 }	
    echo $a; echo $b;	 
?>
                  <h2> REQUEST</h2>
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

