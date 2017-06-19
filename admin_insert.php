<?php

include('connection.php');
echo $ptype= $_REQUEST['p_type'];
echo "<br>";

echo $pcat = $_REQUEST['p_cat'];
echo "<br>";

echo $pname = $_REQUEST['p_name'];
echo "<br>";

echo $psize= $_REQUEST['p_size'];
echo "<br>";


echo $pcolor = $_REQUEST['p_color'];
echo "<br>";


echo $pdesc= $_REQUEST['p_desc'];
echo "<br>";

echo $image = $_FILES['file']['name'];
echo "<br>";

echo $pfeature = $_REQUEST['p_feature'];
echo "<br>";


echo $pspec= $_REQUEST['p_spec'];
echo '<br>';

echo $pcost= $_REQUEST['p_cost'];
echo "<br>";




echo $sql="insert into admin_add_product(product_type,product_category,product_name,product_size,product_color,product_desc,product_image,product_feature,product_specification,product_cost) values ('$ptype','$pcat','$pname','$psize','$pcolor','$pdesc','$image','$pfeature','$pspec','$pcost')";
			echo '<br>';
echo $fire=mysqli_query($con,$sql);
	
if(!$fire)
		{
			echo " insertion fail";
			
		}
		else
		{
			echo "inserted successfully";
			header('Location:admin_add_product.php');
		}
mysqli_close($con);

	
?>