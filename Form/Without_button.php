<html>
<head>
<script>
function myFunction()
{
document.getElementById("myForm").submit();
}
</script>
</head>
<body>
<form method="post" action="Without_button.php" id="myForm">
<input type="text" name="name" /><br><br>
<input type="text" name="mobile" /><br><br>
<input type="text" name="age" /><br><br>
</form>
<div onclick="myFunction()">Click me</div>
</body>
</html>

<?php
$x="";
$y="";
$z="";
 if(!empty($_POST['name']))
 {
	 $x=$_POST['name'];
	 echo $x. "<br>";
 }
 if(!empty($_POST['mobile']))
 {
	 $y=$_POST['mobile'];
	 echo $y."<br>";
 }
 if(!empty($_POST['age']))
 {
	 $z=$_POST['age'];
	 echo $z."<br>";
 }
?>