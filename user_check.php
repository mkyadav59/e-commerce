<?php

session_start();
	include('connection.php');
	$x=$_POST['u_id'];
	$y=$_POST['u_pass'];
	if(!$con)
	{
		die("error in connection ".mysqli_connect_error($con));
	}	
	
	$sql="select *from user_login_table where user_name='$x' and user_pass='$y'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);

	$sql1="select email_id from user_login_table";
	$result=mysqli_query($con,$sql);
	$count=mysqli_fetch_array($sql1);


	$_session=$_SESSION['email_id'];

	if($count>0)
	{
		while($row=mysqli_fetch_array($result))
		{	

			print_r($row);
			 
		
			 $_SESSION['id']=$row['id'];
			 $_SESSION['user_name']=$row['name'];

			echo "<span>Welcome".$row['user_name']."</span>";
			include('index.php');
		}
				
			
	}
	else
	{
		include('user_login_table.php');	
	}

	print_r($_SESSION)

?>