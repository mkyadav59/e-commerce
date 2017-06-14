<?php
include('connection.php');
$id=$_POST['sat'];

$sql="select * from admin_add_product where product_id='$id'";

 $result=mysqli_query($con,$sql);
 $count=mysqli_num_rows($result);



 $sql1="select email_id from user_login_table";
	$sql12=mysqli_query($con,$sql1);
    $count=mysqli_fetch_assoc($sql12);
	$email=$count['email_id'];

if($count>0)
{	
		session_start();
		//print_r($_SESSION);

		echo '<table>';
	while($row=mysqli_fetch_assoc($result))
	{	

		echo '<center>';
			echo '<div id="ned" class="desc" style="border:"><img src="'.$row['product_image'].'"style="width:200px;height:200px"></img>';
			echo '</div>';

		echo '<tr>';
			echo '<td>';
			echo '<b style="margin-left:20px">Product Name:</b>'.$row['product_name'];
			echo '</td>';
		echo '</tr>';


		echo '<tr>';
			echo '<td>';
			echo '<b style="margin-left:20px">Product size:</b>'.$row['product_size'];
			echo '</td>';
		echo "</tr>";

		echo '<tr>';
			echo '<td>';
			echo '<b style="margin-left:20px">Product Color:</b>'.$row['product_color'];
			echo '</td>';
		echo "</tr>";

		echo '<tr>';
			echo '<td>';
			echo '<b style="margin-left:20px">Product Specification:</b>'.$row['product_specification'];
			echo '</td>';
		echo "</tr>";

		echo '<tr>';
			echo '<td>';
			echo '<b style="margin-left:20px">Product Cost:</b>'.$row['product_cost'];
			echo '</td>';
		echo "</tr>";

		echo '<tr>';
			echo '<td>';
			echo '<b style="margin-left:20px">Product Brand:</b>'.$row['product_brand'];
			echo '</td>';
		echo "</tr>";

		echo '<tr>';
			echo '<tr>';
			echo '<td><label>Quantity:</label><input type="number" style="width:100px;height:30;color:;text-align:center" name="q_id" id="q_id"></input></td>';
		
			
			echo '<td>';
			echo '<button type="button" style="width:150px;height:50px;color:black;background-color:yellow;text-align:center;font-size:20px" id="a_id" name="add_id">Add TO Cart</button>';
			echo '</td>';

			echo '<td>';
			echo '<input type="submit" value="Buy Now" style="width:150px;font-size:20px;height:50px;color:black;background-color:orange;text-align:center" id="b_id" name="b_id">';
			echo '</td>';

			echo '<td>';
			echo '<div id="dv"></div>';
			echo '</td>';
			echo '</tr>';

		echo "</tr>";

		echo '</center>';
	}
		echo '</table>';



}
else
{
	echo 'fail to fire query';
}
?>

<doctype html>
	<html>
		<head>
			<title></title>
		</head>
	<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script>
	$(document).ready(function()
	{
		$('#b_id').click(function()
		{
			 alert('working');

			 var quantity=$('#q_id').val();
			 var email="<?php echo $email; ?>";
			 var product_id="<?php echo $id; ?>";
			 

			 alert(quantity);
			 alert(email);
			 alert(product_id);

			$.ajax({ 				
				type:"POST",
				url: "Add_to_cart.php",  
				data:{'qid':quantity,'eid':email,'pid':product_id},				
				success:function(out)
				{
		
					$("#dv").html(out); 
				}
			});
	
		});
	});
	</script>
	</body>
	</html>

