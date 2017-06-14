<!doctype>
<html>
	
	<head>
		<style>
		#data
		{
			border:1px solid;
			width: 800px;
			height: 500px;
		}
		</style>
	</head>
<body>
	<div>
		<table>
	<tr>
		<td>
			<tr>
				<td><a href="admin_add_product.php" style="text-decoration:none;color:red" id="add_product"><button type="button" id="up" style="color:green;width:150px">Add New Product</button></a></td>
			</tr>
			<tr>
				<td><a href="admin_delete_product.php" style="text-decoration:none;color:red"><button type="button" id="up" style="color:red;width:150px">Delete Product</button></a></td>
			</tr>


			<tr>
				<td><a href="product_order_delete.php" style="text-decoration:none;color:red"><button type="button" id="up" style="color:red;width:150px">Product Order Delete</button></a></td>
			</tr>

			<tr>
				<td><a href="admin_update.php" style="text-decoration:none;color:red"><button type="button" id="up" style="color:blue;width:150px">Update Product</button></a></td>
			</tr>

			<tr>
				<td><a href="admin_view.php" style="text-decoration:none;color:red"><button type="button" id="up" style="color:black;width:150px">Admin View </button></a></td>
			</tr>
		</td>

		<td>
			<div id="data"></div>
		</td>
		</tr>

		</table>
	</div>


<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script>
	$(document).ready(function()
	{		
		alert('hii');
		$('#add_product').click(function()
		{
			 alert('working');

			 var a=$('#add_product');
				alert(a);
			

			$.ajax({ 				
				type:"POST",
				url: "Add_add_product.php", 
				//data:{'val':data},			
				success:function(out)
				{
		
					$("#dv").html(out); 
				}
			});
	
		});
	});
</script>
-->
</body>
</html>