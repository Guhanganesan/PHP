<h2> Single Inheritance</h2>
<?php
class Univ
{  
   public $name="Anna Univ";
   public static $rank=10;
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
    public function details($m)
    {
        echo $m."<br>";
		
    }
	public function callUniv()
	{
		echo self::$rank;
		parent::rank();
	}
}
$Obj1 = new Univ();
$Obj1->details('Library'); 
$Obj1->rank(); 
echo $Obj1->name;

$Obj2 = new College();      
echo $Obj2->name; 
$Obj2->details($Obj2->name);
$Obj2->callUniv();
?>



<h2> MULTILEVEL </h2>

<?php
     class Grandfa{
		 public $name="Prabakaran";
		 public function sing(){
			 echo "I am singing a song<br>";
		 }
		 public function dance()
		 {
			 echo "I know dance<br>";
		 }
	 }
	 
	 class Son extends Grandfa{
		 
		 public function teaching(){
			 
			 echo "I am a teacher<br>";
		 }
		 public function dance()
		 {
			 echo "I know dance very well<br>";
		 }
		 
	 }
	 
	 class Grandson extends Son{
		 
		 public function teaching(){
			 
			 echo "I am a grandson I know with teaching<br>";
			 }
		public function sing(){
			
			echo "I am a grandson I know with teaching<br>";
		}	 
		 public function dance(){
			 
			 echo "I am grandson I know dance also<br>";
		 }
	 }
	 
	 $p = new Grandfa();
	 $q = new Son();
	 $r = new Grandson();
	 
	 $p->sing();
	 $p->dance();
	 
	 $q->teaching();
	 $q->dance();
	 echo $q->name;
	 
	 $r->teaching();
	 $r->sing();
	 $r->dance();
	 echo $r->name;
?>











