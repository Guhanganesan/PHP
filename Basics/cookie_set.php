<!--The main difference between sessions and cookies is 
that sessions are stored on the server, and cookies are stored
 on the user's computers in the text file format. Cookies can't hold
 multiple variable while session can hold multiple variables..
 We can set expiry for a cookie,The session only remains active 
 as long as the browser is open.Users do not have access to 
 the data you stored in Session,Since it is stored in the server.
 Session is mainly used for login/logout purpose while cookies using for user activity tracking
 
create session : session_start();
Set value into session : $_SESSION['USER_ID']=1;
Remove data from a session : unset($_SESSION['USER_ID']; 

session_id() function returns the session id for the current session.
-->

<?php
session_start();

$_SESSION['name']= "Guhan";

//session_destroy();

if(isset($_SESSION['name']))
{
	
	//echo "Thank you for visiting here&nbsp; Mr."; 
	//echo $_SESSION['name'];
	header("Location:session_view.php");
	//require_once('session_view.php');
	return false;
}
else
{
	echo "please check once again";
}  

echo "Guhan";
//session_destroy(); 
// session_unset() //---> it removes all variables
?>
<?php
// echo $time=time();

setcookie('username','kathir', time()+20);

//setcookie('username', '', time()- 12); for removing the cookie
?>

<?php
echo $_COOKIE['username'];

//echo "Cookie 'username' is removed";
?>




