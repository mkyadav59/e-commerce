<?php
include('connection.php');

$sql="select Add_id_key, product_id from Add_to_cart_quantity";
$query=mysqli_query($con,$sql);
$count=mysqli_num_rows($query);
$row=mysqli_fetch_assoc($query);
$product_id=$row['product_id'];


	$sql="select product_name, product_type,product_category,product_name,product_size,product_color,product_feature,product_specification,product_cost,product_image from admin_add_product where product_id='$product_id'";
	$query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($query);

		echo '<center><h2 style="color:brown">Product Purchase Summary</h2><center>';
	if($count>0)
	{	

		echo '<table>';
		echo '<th>Product Nmae</th>';
		echo '<th>Product Size</th>';
		echo '<th>Produc Color</th>';
		echo '<th>Product Product Specificatio</th>';
		echo '<th>Product Category</th>';
		echo  '<th>Product Image</th>';
		echo '<th>Product Cost</th>';
		while($row=mysqli_fetch_assoc($query))
		{
		

		echo '<center>';

		echo '<tr border="1">';
			echo '<td>';
			   echo $row['product_name'];
			echo '</td>';

			echo '<td>';
				echo $row['product_size'];
			echo '</td>';
	
			echo '<td>';
				echo $row['product_color'];
			echo '</td>';

	
			echo '<td>';
				echo $row['product_specification'];
			echo '</td>';

			echo '<td>';
				echo $row['product_category'];
			echo '</td>';

		
			echo '<td>';
					echo '<img style="width:100px;float:left;height:80px" src="'.$row['product_image'].'" ></img>';
			echo '</td>';

			echo '<td>';
				echo $row['product_cost'];
			echo '</td>';

			echo '</tr>';
		echo '</center>';
	}
		echo '</table>';


}

echo '<br>';
echo '<br>';

 $sum="select sum(product_cost) from admin_add_product where product_id='$product_id'";
$res=mysqli_query($con,$sum);
 $count=mysqli_num_rows($res);
$row1=mysqli_fetch_assoc($res);

//print_r($row1);

if($count>0)
{
	while($row1=mysqli_fetch_assoc($res));
	{
		echo $row1['sum(product_cost)'];

	}
}


?>
<html>

	<style>
	th,td,table{
					border-collapse: collapse;
					border:1px solid;
					background-color: powderblue;
					text-align: center;
			}
	</style>
	<body>

	</body>
</html>