<?php

       echo $_GET['id'];

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

	function fetch($sql)
	{

	}


$obj = new oophp('object_oriented');
$obj->check_con();
$delete ="delete from Student8 where id=1";
$obj->sql=$delete;
$obj->delete_value();
?>