<?php
include('connection.php');
$sql="select * from admin_add_product";
$result=mysqli_query($con,$sql);
?>
<html>
<body style="background-image:url('001-wood-melamine-subttle-pattern-background-pat.jpg')";>

<style>
table, td, th {
    border: 1px solid brown;
				}

table,hr{
    border-collapse: collapse;
    width: 80%;
}

</style>
			
	
	<center><h2 style="color:brown"><u>Product Record</u></h2></center>
	<center>
	
<hr>
	<table  border: 1px solid black;>
  	<tr>
     <th>ID</th>
     <th>NAME</th>
    <th>ROLL NUMBER</th>
      <th>ADDRESS</th>
     <th>PHONE NUMBER</th>
     <th>EMAIL</th>
     <th>DELETE</th>
     <th>UPDATE</th>

    </tr>

</body>
</html>





<?php
	while($row=mysqli_fetch_assoc($result))
	{
	?>
		<tr>
			<td>
				<?php echo $id= $row['product_id']; ?>
			</td>
	
			<td>
				<?php echo $type = $row['product_type']; ?>
			</td>

			<td>
				<?php echo $cat = $row['product_category']; ?>
			</td>

			<td>
				<?php echo $name= $row['product_name']; ?>
			</td>

			<td>
				<?php  echo $size = $row['product_size']; ?>
			</td>

			<td>
				<?php echo $color = $row['product_color']; ?>
			</td>

			<td>
				<?php echo $desc= $row['product_desc']; ?>
			</td>

			<td>
				<?php echo $image = $row['product_image']; ?>
			</td>

			<td>
				<?php echo $feature = $row['product_feature']; ?>
			</td>

			<td>
				<?php echo $specification = $row['product_specification']; ?>
			</td>
			<td>
				<?php echo $cost = $row['product_cost']; ?>
			</td>

		<td><a href="delete.php?id=<?php echo  $row['id'] ?>" style="text-decoration:none;color:red"><button type="button" id="up" style="color:red">Delete</button></a></td>
		<td><a href="update.php?id=<?php echo  $row['id'] ?>" style="text-decoration:none;color:blue"><button type="button" id="up" style="color:green">Update</button></a></td>
	</tr>
<?php		
} 
?>

</table>

</center>