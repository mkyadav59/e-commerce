<?php

       $a= $_GET['id'];
       //echo 'hii';


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
	function delete_value($sql)
	{
		if($this->con->query($this->sql))
		{
			echo 'deleted successfully';
		}
		else
		{
			echo 'fail to delete';
		}
	}
}
$obj = new oophp('object_oriented');
$obj->check_con();

$query="delete from Student8 where id='$a'";
$obj->sql=$query;
$obj->delete_value();
?>