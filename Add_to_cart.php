<?php
include('connection.php');
$quantity=$_POST['qid'];
$product=$_POST['pid'];
$email=$_POST['eid'];

$sql7="select * from Add_to_cart where email_id='$email'";
$fire=mysqli_query($con,$sql7);
$count1=mysqli_fetch_assoc($fire);
if($count1<=0)
{
	$sql8="insert into Add_to_cart(email_id) values ('$email')";
	$query1=mysqli_query($con,$sql8);
	//echo "inserted into cart1 table";
}
else
{
	$sql1="select Add_id_key from Add_to_cart where email_id='$email'";

		$query2=mysqli_query($con,$sql1);
		$value=mysqli_fetch_assoc($query2);
		$value_new = $value['Add_id_key'];


		$sql8="insert into Add_to_cart_quantity(product_id,Add_id_key) values ('$product','$value_new')";
		$query12=mysqli_query($con,$sql8);
		//echo "icart2 table";

}
?>