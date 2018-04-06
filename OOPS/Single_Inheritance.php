<?php
// Single Inheritance
class Univ
{  
  public function details($x)
    {
        echo  $x. "<br>";
    }
    
    public function rank()
    {
        echo "First Class"."<br>";
    }
}
class College extends Univ
{
    public function details($x)
    {
        echo $x."<br>";
		
    }
}
$Obj1 = new Univ();
$Obj2 = new College();
$Obj1->details('Anna Universtity'); 
$Obj1->rank();       
$Obj2->details('Periyaar'); 
?>