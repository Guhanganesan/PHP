<table>
<form action="Muti_array_form.php" method="post" >
<tr>
  
 <td><input type="checkbox" name="r00" value="1"></td>
  <td><input type="checkbox" name="r01" value="1"></td>
  <td><input type="checkbox" name="r02" value="1"></td>
  <td><input type="checkbox" name="r03" value="1"></td>
  <td><input type="checkbox" name="r04" value="1"></td>
  <td><input type="checkbox" name="r05" value="1"></td>
  <td><input type="checkbox" name="r06" value="1"></td>
  <td><input type="checkbox" name="r07" value="1"></td>
  
</tr>
  
  <input type="submit" name="submit" value="submit">
  </form>
 </table> 

<?php
         


if(empty($_POST['r00'])){$r00=0;}
else{$r00=1;}

if(empty($_POST['r01'])){$r01=0;}
else{$r01=1;}

if(empty($_POST['r02'])){$r02=0;}
else{$r02=1;}

if(empty($_POST['r03'])){$r03=0;}
else{$r03=1;}

if(empty($_POST['r04'])){$r04=0;}
else{$r04=1;}

if(empty($_POST['r05'])){$r05=0;}
else{$r05=1;}

if(empty($_POST['r06'])){$r06=0;}
else{$r06=1;}

if(empty($_POST['r07'])){$r07=0;}
else{$r07=1;}



echo $r00;
echo $r01;
echo $r03;
echo $r04;
echo $r05;
echo $r06;



         /*
         $x=array($_POST['r20'],$_POST['r21'],$_POST['r22'],$_POST['r23'],$_POST['r24'],$_POST['r25']);
         for($i=0;$i<=5;$i++)
		 {
			 echo $x[$i]."<br>";
		 }
         */














 //$t[0][2]="Guhan";
  //echo $t[0][2];
/*
for($i=0; $i<3; $i++)
{
	for($j=0;$j<3; $j++)
	{
	   echo$t[$i][$j];	   
	}
	echo "<br>";
}
*/

?>