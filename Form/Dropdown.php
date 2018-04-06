<html>
<html lang="en">
<head>
  <title>Payilagam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon" href="pyi.PNG">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



<form action="test.php" method="post">
   <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Experienced
          <span class="caret"></span></button>
          <ul class="dropdown-menu" style="width:250;padding:20px;">
          <li><input placeholder="Organization" name="o"> </input></li><br>
          <li><input placeholder="Domain" name="d"> </input></li><br>
          <li><input placeholder="Years of Experience" name="y"> </input></li>
          </ul>
		  </div>
		  <input type="submit" name="submit" value="submit">
</form>
<?php
$x=$_POST['o'];
echo $x;
$y=$_POST['d'];
echo $y;

$z=$_POST['y'];
echo $z;
?>