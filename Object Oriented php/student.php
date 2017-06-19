
<html>
<style>
table,th,td
{
	border-collapse: collapse;
	border:1px solid;
	text-align: center;
}
</style>

<center><h3 style="color:brown">CRUD USING OBJECT ORIENTED</h3></center>
</html>
<?php
		
			$con=mysqli_connect('localhost','root','root','object_oriented');

			if($con)
			{
				//echo "conneted successfully";
			}
			else
			{
				echo 'fail to connect';


			}

			$query="select * from Student8";

			$result=mysqli_query($con,$query);
			$count=mysqli_num_rows($result);
						
					if($count>0);
					{	
echo '<center><a href="studentform.php?id='.$id.'"style="text-decoration:none;color:red"><button type="button" id="up" style="color:Blue;width:100px;height:50px"><h2>Insert</h2></button></a></td></center>';
				echo '<center>';
					echo '<div id="dv1">';
						echo '<table>';
						echo '<th>ID</th>';
						echo '<th>Name</th>';
						echo '<th>Roll No.</th>';
						echo '<th>Address</th>';
						echo '<th>Marks</th>';
						echo '<th>College</th>';
						echo '<th>Email</th>';
						echo '<th>Operation</th>';



						while($row=mysqli_fetch_assoc($result))
						{
							echo '<tr>';
								echo '<td>';
									echo $id=$row['id'];
								echo '</td>';

								echo '<td>';
										echo $row['name'];
								echo '</td>';

						
								echo '<td>';
										echo $row['roll'];
								echo '</td>';
					

							
								echo '<td>';
										echo $row['address'];
								echo '</td>';
							

						
								echo '<td>';
										echo $row['marks'];
								echo '</td>';
						

						
								echo '<td>';
										echo $row['college'];
								echo '</td>';
							

							
								echo '<td>';
										echo $row['email'];
								echo '</td>';

		echo '<td><a href="delete_oophp.php?id='.$id.'"style="text-decoration:none;color:red"><button type="button" id="up" style="color:red">Delete</button></a>';
		echo '<a href="update_oophp.php?id='.$id.'"style="text-decoration:none;color:green"><button type="button" id="up" style="color:green">Update</button></a>';
		
						}

						echo '</table>';

						echo '</div>';
						echo '</center>';
					}


?>