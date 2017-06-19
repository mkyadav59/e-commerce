<?php

        $name= $_POST['name'];
		$roll= $_POST['roll'];
		$address=$_POST['address'];
		$marks=$_POST['marks'];
		$college=$_POST['college'];
		$email=$_POST['email'];

class oophp
{


	public $con,$insert,$update,$delete,$select,$create;
	function __construct($db)
	{
	
	
			$this->con = mysqli_connect('localhost','root','root',$db);

	 }

	function check_con()
	{
		if($this->con)
		{
			echo 'connected to the database';
		}
		else
		{
			echo 'fail to connect';
		}
	}

	function create_table($sql)
	{

		if($this->con->query($this->sql)) 
		{
			echo "table created Succucessfuly";
		}	
		else
		{
			echo "fail to create";
		}

	}
	function insert_table($sql)
	{

		if($this->con->query($this->sql)) 
		{
			echo "inserted successfully";
			header('Location:student.php');
		}	
		else
		{
			echo "fail to insert";
		}

	}
	function update_value($sql)
	{

		if($this->con->query($this->sql)) 
		{
			echo "updated successfully";

		}	
		else
		{
			echo "fail to update";
		}

	}
	function delete_value($sql)
	{

		if($this->con->query($this->sql)) 
		{
			echo "Deleted successfully";
		}	
		else
		{
			echo "fail to Delete";
		}

	}

}

$obj = new oophp('object_oriented');
$obj->check_con();

/*$create= "CREATE TABLE Student8 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30),
roll VARCHAR(30),
address VARCHAR(50),
marks 	VARCHAR(30),
college VARCHAR(20),
email VARCHAR(20))";
*/
//$obj->sql = $create;
//$obj->create_table();

echo $insert="insert into Student8 (name,roll,address,marks,college,email) values ('$name','$roll','$address','$marks','$college','$email')";
$obj->sql=$insert;
$obj->insert_table();

//$update ="update Student8 SET name='manoj' where id=1";
//$obj->sql=$update;
//$obj->update_value();

//$delete ="delete from Student8 where id=1";
//$obj->sql=$delete;
//$obj->delete_value();
?>


