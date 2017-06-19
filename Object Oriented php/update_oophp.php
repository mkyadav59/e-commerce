<?php
	$id=$_GET['id'];


	$con2 = mysqli_connect('localhost','root','root','object_oriented');
	$sql="select * from Student8 where id='$id'";
	$res=mysqli_query($con2,$sql);
	$count=mysqli_num_rows($res);

	$row=mysqli_fetch_assoc($res);
	//$row['id'];
	$name=$row['name'];
	$roll=$row['roll'];
	$address=$row['address'];
	$marks=$row['marks'];
	$college=$row['college'];
	$email=$row['email'];


	
?>
	<!doctype html>
<html>
	<head>
		<title></title>
		<style>
		#dv{
				color:blue;
				background-color: powderblue;
				width:335px;
				height:250px;
			}
		</style>
	</head>
<body>
	<div id="dv">
		<form action="update_oophp.php" method="post">
			<center><h3>Student details</h3></center>
		<table>
			<tr>
			<td><label>Name:</td><td><input type="text" name="name" value="<?php echo $row['name']; ?>" /></td>
			</tr>

			<tr>
			<td><label>Roll No:</td><td><input type="text" name="roll" value="<?php echo $row['roll']; ?>"/></td>
			</tr>

			<tr>
			<td><label>Address:</td><td><input type="text" name="address" value="<?php echo $row['address']; ?>"/></td>
			</tr>

			<tr>
			<td><label>Marks:</td><td><input type="text" name="marks" value="<?php echo $row['marks']; ?>"/></td>
			</tr>

			<input type="hidden" name="id" value="<?php echo $id;?>"/>
			<td><label>College:</td><td><input type="text" name="college" value="<?php echo $row['college']; ?>"/></td>
			</tr>

			<tr>
			<td><label>Email id:</td><td><input type="text" name="email" value="<?php echo $row['email']; ?>"/></td>
			</tr>
			<tr>
				<td><input type="submit" name="sub" value="Submit"/></td>
			</tr>

		</table>

		</form>
	</div>

</body>
</html>

<?php
if(isset($_POST['sub']))
		{	echo $id=$_POST['id'];
			echo $name=$_POST['name'];
			echo $roll=$_POST['roll'];
			echo $address=$_POST['address'];
			echo $marks=$_POST['marks'];
			echo $college=$_POST['college'];
			echo $email=$_POST['email'];


			class oophp
	{
	public $con;
	function __construct($db)
	{
		$this->con = mysqli_connect('localhost','root','root',$db);
	}

	function check_con()
	{
		if($this->con)
		{
			//echo 'connected to the database';
		}
		else
		{
			echo 'fail to connect';
		}
	}

	
	function update_value($sql)
	{

		if($this->con->query($this->sql)) 
		{
			echo "updated successfully";
			header('Location:student.php');
		}	
		else
		{
			echo "fail to update";
		}

	}


}

$obj = new oophp('object_oriented');
$obj->check_con();


echo $update="UPDATE Student8 SET name='$name',roll='$roll',address='$address',college='$college',email='$email',marks='$marks' WHERE id='$id'";
$obj->sql=$update;
$obj->update_value();
	
		}
?>











