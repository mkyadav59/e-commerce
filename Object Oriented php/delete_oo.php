<?php
		
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
		
$obj=new display('object_oriented');
$obj->check_con();

/*$query="select * from Student8";
$this->sql=$query('object_oriented');
$obj->disp();*/
?>