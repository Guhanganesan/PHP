<form method="post" action="" autocomplete="off">
Data1:<input name="input1"><br><br>
Data2:<input name="input2"><br><br>
       <input type="submit" name="add" value="+"></button>
       <input type="submit" name="sub" value="-"></button>
       <input type="submit" name="mul" value="*"></button>
       <input type="submit" name="div" value="/"></button>
</form>
<?php      
        
        if(!empty($_POST))
	    {
	 		$data1 = $_POST['input1'];
			$data2 =  $_POST['input2'];
						
			function add($a,$b)
		    {
			      echo $a+$b;
		    }
			function sub($a,$b)
		    {
			      echo $a-$b;
		    }
			function mul($a,$b)
		    {
			      echo $a*$b;
		    }
			function div($a,$b)
		    {
			      echo $a/$b;
		    }
            
			if(isset($_POST['add']))
			{
				add($data1,$data2);
			}
			else if(isset($_POST['sub']))
			{
				sub($data1,$data2);
			}
			else if(isset($_POST['mul']))
			{
				mul($data1,$data2);
			}
			else 
			{
				div($data1,$data2);
			}
			
       }
				
?>
