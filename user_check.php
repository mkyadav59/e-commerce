<?php


	include('connection.php');
	$x=$_POST['u_id'];
	$y=$_POST['u_pass'];

	if(!$con)
	{
		die("error in connection ".mysqli_connect_error($con));
	}	
	
	$sql="select * from user_login_table where user_name='$x' and user_pass='$y'";
	$result=mysqli_query($con,$sql);
	echo $count=mysqli_num_rows($result);
	if($count>0)
	{
		while($row=mysqli_fetch_array($result))
		{	session_start();
			print_r($row);
	
			 $_SESSION['id']=$row['id'];
			 $_SESSION['user_name']=$row['name'];
			 print_r($_SESSION);

			echo "<span>Welcome".$row['user_name']."</span>";
			include('index.php');
		}
				
			
	}
	else
	{
		include('user_login_table.php');	
	}

?>