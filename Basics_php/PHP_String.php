<style>
  h2{color:blue;}
  *{color:red;}
</style>
<?php
				$string ="Payilagam Velachery";
				echo "<h2> length</h2>";
				echo strlen($string);
				echo "<br>";
/*---------------------------------------------*/
				echo "<h2> lowercase</h2>";
				echo strtolower($string);
				echo "<br>";
/*---------------------------------------------*/

				echo "<h2> uppercase</h2>";
				echo strtoupper($string);
				echo "<br>";

/*---------------------------------------------*/


				echo "<h2>substring</h2>";
				// substr ( string $string , int $start [, int $length ] )
				echo substr("Anbarasan",3, 4); // length 4-- aras , 3-starting
				echo "<br>";

/*---------------------------------------------*/


				echo "<h2>word count</h2>";
				echo str_word_count("Guhan anbu");//2
				echo "<br>";

/*---------------------------------------------*/

				echo "<h2>Reverse</h2>";
				echo strrev("Aagaaya Vennila");//alinneV ayaagaA
				echo "<br>";

/*---------------------------------------------*/

				echo "<h2>Position</h2>";
				$x="This is my php page";
				
				echo strpos($x, "php"); //11
								
				if(strpos($x, "php"))
				{
					echo "String is available";
					
				}
                else
				{
					echo "Not Available";
				}
			
				
/*---------------------------------------------*/
					

				echo "<h2>Replace</h2>";
				echo str_replace("4455", "", "6677");
				echo "<br>";
				
/*---------------------------------------------*/

				$string="velajery";
				$replacement="che";
				

//substr_replace ($string ,$replacement ,$start,[$length ] )
				echo substr_replace($string, $replacement,4); //velache
				echo substr_replace($string, $replacement,4,2); //velachery

/*---------------------------------------------*/
				echo "<h2>Chop</h2>";	

				echo "<pre>";
				$str = "   Hello   World! ";
				echo chop($str);
				echo "</pre>";
				
/*---------------------------------------------*/				
				echo "<h2> Trim </h2>";
				
				echo "He is my friend";echo "<br>"; //He is my friend
				
				echo "\tHe\t is my friend's";echo "<br>";//He is my friend's 
				
/*---------------------------------------------*/
				
				echo "<h2> Trim </h2>";
				$str = "Hello world!";
				echo chunk_split($str,2," "); //He ll o wo rl d! 

/*---------------------------------------------*/

			    echo "<h2>Encode</h2>";
				$str = "Hello world!";
				echo convert_uuencode($str);	//,2&5L;&\@=V]R;&0A ` 


/*---------------------------------------------*/
                echo "<h2> crypt</h2>";
			    $pass = 'mypassword';
                echo crypt($pass,"pass");

/*---------------------------------------------*/				
				
                echo "<h2>Explode </h2>";
				$str = "Hello world. It's a beautiful day.";
				print_r (explode(" ",$str));		
				
/*---------------------------------------------*/                
				echo "<h2>Implode</h2>";
				$arr = array('Hello','World!','Beautiful','Day!');
				echo implode($arr);
/*---------------------------------------------*/  
				
				echo "<h2>String Parsing</h2>";
				parse_str("name=Peter&age=43&mob=9878"); // query string into variables
				echo $name."<br>";
				echo $age."<br>";
				echo $mob;
/*---------------------------------------------*/  
                echo "<h2>Compare</h2>";
				$string1='xyz';  
				$string2='xym';  
				$result=strcmp($string1,$string2);  
				if($result==0) //1  
				{
					echo "verified";
				}
				else
				{
					 echo "Not-Verified";
				}

/*---------------------------------------------*/
                echo "<h2> String case compare </h2>";
				echo strcasecmp("Hello","HEllO");//0
				echo "<br>";
				echo strcasecmp("HEllo","hELLo");//0
				echo "<br>";
				echo strcasecmp("HEll","hELLo");//-1
				
/*---------------------------------------------*/
                echo "<h2> md5()</h2>";
				echo md5("1234");
				echo "<br>";
                echo strlen("81dc9bdb52d04dc20036dbd8313ed055");//32
				echo "<br>";
				echo sha1("1234");
				echo "<br>";
                echo strlen("7110eda4d09e062aa5e4a390b0a572ac0d2c0220");//40
/*---------------------------------------------*/




?>
