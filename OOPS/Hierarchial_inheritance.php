<?php
class RBI
{    public function principle($x)
    {
        echo  $x. "<br>";
    }
    
    public function interest()
    {
        echo "First Class"."<br>";
    }
}
class Axis extends RBI
{
    public function interest($x)
    {
        echo $x."<br>";
		
    }
}

class IOB extends RBI{
	public function principle()
	{
		$m=30;
		$n=45;
		echo $m+$n."<br>";
	}
	public function rate()
	{
		$r=10;
		$s=20;
		echo $r+$s;
	}
}
//$Obj1 = new RBI();
$A = new Axis();
$A->interest('Anna Universtity'); 

$B = new IOB();

$B->principle();

$B->rate();
?>