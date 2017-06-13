<?php
include('connection.php');
$id=$_POST['sat'];

$sql="select * from admin_add_product where product_id='$id'";

$result=mysqli_query($con,$sql);
 $count=mysqli_num_rows($result);

if($count>0)
{		
		echo '<table>';
	while($row=mysqli_fetch_assoc($result))
	{	

		
			echo '<div id="ned" class="desc" style="border:"><a href="index.php" target="_blank"><img src="'.$row['product_image'].'"style="width:200px;height:200px"></img>';
			echo '</div>';

		echo '<tr>';
			echo '<td>';
			echo '<b style="margin-left:5px">Product Name:</b>'.$row['product_name'];
			echo '</td>';
		echo '</tr>';


		echo '<tr>';
			echo '<td>';
			echo '<b style="margin-left:5px">Product size:</b>'.$row['product_size'];
			echo '</td>';
		echo "</tr>";

		echo '<tr>';
			echo '<td>';
			echo '<b style="margin-left:5px">Product Color:</b>'.$row['product_color'];
			echo '</td>';
		echo "</tr>";

		echo '<tr>';
			echo '<td>';
			echo '<b style="margin-left:5px">Product Specification:</b>'.$row['product_specification'];
			echo '</td>';
		echo "</tr>";

		echo '<tr>';
			echo '<td>';
			echo '<b style="margin-left:5px">Product Cost:</b>'.$row['product_cost'];
			echo '</td>';
		echo "</tr>";

		echo '<tr>';
			echo '<td>';
			echo '<b style="margin-left:5px">Product Brand:</b>'.$row['product_brand'];
			echo '</td>';
		echo "</tr>";

		echo '<tr>';
			echo '<td>';
			echo '<b style="margin-left:5px;">Review:</b><textarea name="comment" rows="4" cols="40" style="margin-left:5px" placeholder="write here...!"></textarea>';
			echo '</td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td>';
			echo '<input type="submit" value="submit"  target="_blank" style="margin-left:50px;margin-top:10px">';
			echo '</td>';
			echo '<td>';
			echo '<a href="index.php" style="text-decoration:none;color:black;"><button type="button" style="width:150px;height:50;color:blue;text-align:center"><h1>Buy Now</h1></button></a>';
			echo '</td>';
		echo "</tr>";


	}
		echo '</table>';
}
else
{
	echo 'fail to fire query';
}


?>