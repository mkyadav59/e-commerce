<?php
include('connection.php');
session_start();

$email=$_SESSION['email'];
//print_r($_SESSION['email']);
echo $sql="select Add_id_key, product_id from Add_to_cart_quantity where email ='$email'";
$query=mysqli_query($con,$sql);
echo $count=mysqli_num_rows($query);
$row=mysqli_fetch_assoc($query);
echo $Add_id_key=$row['Add_id_key'];
echo 'hii';
echo '<br>';

	echo $sql="select * from admin_add_product INNER JOIN Add_to_cart_quantity ON admin_add_product.product_id=Add_to_cart_quantity.product_id where Add_to_cart_quantity.Add_id_key='$Add_id_key'";
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

		echo '<tr>';
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

 	$sum="select SUM(product_cost) from admin_add_product where product_id='$product_id'";
	$res=mysqli_query($con,$sum);
	$row=mysqli_fetch_assoc($res);

	//print_r($row); 
	echo "<b>Total Cost Of Product=</b>".$row['SUM(product_cost)'];

	

	$fire="select * from payment_method";
	$result=mysqli_query($con,$fire);
	$count=mysqli_num_rows($result);
	if($count>0)
	{			echo '<table>';
				echo "<h3>Choose Payment Method:</h3>";
				echo '<select id="list" style="width:150px;height:40px;color:black">';
				echo '<option value="" selected="selected"> Select Something';
		while($row=mysqli_fetch_assoc($result))
		{					
								
								echo '<option value="data">';
										echo $row['payment_method'];
								echo '</option>';
								
			
		}
		echo '</option>';
		echo '</select>';
		echo '</table>';
	}



	$fire="select * from shipping";
	$result=mysqli_query($con,$fire);
	$count=mysqli_num_rows($result);
	if($count>0)
	{			echo '<table>';
				echo "<h3>Choose Shipping Type:</h3>";
				echo '<select id="list" style="width:150px;height:40px;color:black">';
				echo '<option value="" selected="selected"> Select Something';
		while($row=mysqli_fetch_assoc($result))
		{					
								
								echo '<option value="data1">';
										echo $row['shipping_type'];
								echo '</option>';
								
			
		}
		echo '</option>';
		echo '</select>';
		echo '</table>';
	}






echo '<br>';
echo '<br>';


?>
<html>
<head>
	<style>
	th,td,table{
					border-collapse: collapse;
					border:1px solid;
					background-color: powderblue;
					text-align: center;
			}
	</style>
</head>

	<body>
		

	</body>
</html>
<?php
	echo '<a href="Product_Order_table.php" style="text-decoration:none"><input type="button" value="Place Order" style="width:150px;font-size:20px;height:50px;color:black;background-color:green;border-radius:10px;text-align:center" order_id></a>';
?>