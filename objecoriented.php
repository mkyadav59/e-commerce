<?php

class oophp 
{

	public $con;

	function__construct($db)
	{
		$this->con=new('localhost','root','root','$db');
	}
		function check_con()
		{
			if(!$this->con)
			{
				echo 'error';
			}
			else
			{
				echo 'connected successfully';
			}
		}
}
$obj=new oophp('object_oriented');
echo $obj->check_con();

?>