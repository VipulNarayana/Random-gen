<?php

//Created a function to add the random number
//Random number generation with assumption of including 6 and 15
function fun($x)
{
	$a=rand(6,15);
	$x=$x.$a;
	return $x;
}
//Accessing php file without filling form not possible
if (empty($_POST['submit']) && empty($_GET['user']))
{
  header('Location: main.php');
  exit; 
} 

$a=mysql_escape_string($_GET['user']);
echo fun($a);


?>
<h3>Want to try again</h3>
<a href="main.php">Main page</a>
