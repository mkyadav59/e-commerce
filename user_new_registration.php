<?php

include('connection.php');

echo $name= $_REQUEST['f_name'];
echo "<br>";

echo $last = $_REQUEST['l_name'];
echo "<br>";

echo $address = $_REQUEST['add_name'];
echo "<br>";

echo $email= $_REQUEST['email_name'];
echo "<br>";


echo $mobile = $_REQUEST['mobile_name'];
echo "<br>";

echo $land = $_REQUEST['land_mark'];
echo "<br>";

echo $country = $_REQUEST['country'];
echo "<br>";

echo $DOB = $_REQUEST['date'];
echo "<br>";

echo $state= $_REQUEST['state_name'];
echo "<br>";



echo $city = $_REQUEST['city_name'];
echo "<br>";


echo $sql="insert into user_registration_table(first_name,Last_name,Address,email_id,Mobile_no,Landmark,City,State,DOB,country) values ('$name','$last','$address','$email','$mobile','$land','$city','$state','$DOB','$country')";
			echo '<br>';
echo $fire=mysqli_query($con,$sql);
	
if(!$fire)
		{
			echo " insertion fail";
			
		}
		else
		{
			echo "inserted successfully";
			header('Location:user_registration_table.php');
		}
mysqli_close($con);

	
?>