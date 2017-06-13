<?php

$con=mysqli_connect('localhost','root','root','e-commerce_db');

if(!$con)
{
	die("Error in connection").mysqli_connect_error($con);
}
else
{
	//echo "connected successfuly";
}


?>
