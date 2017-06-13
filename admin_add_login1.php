<?php
	
	include('connection.php');

	echo $name=$_POST['admin_id'];
	echo $pass=$_POST['admin_pass'];


  $sql= "select * from admin_login_table where admin_name='$name' and  admin_pass='$pass'";

	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);

	
if($count>0)
{ 


	header('Location:addmin_manage.php');
}
else
{
	header('Location:admin_add_login.php');
	
}


?>