<?php
		class display()
		{
			public $con;
			function __construct($db)
			{
				$this->con=mysqli_connect('localhost','root','root',$db);
			}
		function check_con()
		{
			if($this->con)
			{
				echo 'connected successfully';
			}
			else
			{
				echo 'fail to connect';
			}
		}

		function disp($sql)
			{	
				$result=$this->con->query($sql);
				$count=mysqli_num_rows($result);
					if($count>0);
					{	
						echo '<table border="1">';
						while($row=$result->fetch_assoc($result))
						{
							echo '<tr>';
								echo '<td>';
										echo $row['name'];
								echo '</td>';
							echo '</tr>';

							echo '<tr>';
								echo '<td>';
										echo $row['roll'];
								echo '</td>';
							echo '</tr>';

							echo '<tr>';
								echo '<td>';
										echo $row['address'];
								echo '</td>';
							echo '</tr>';

							echo '<tr>';
								echo '<td>';
										echo $row['marks'];
								echo '</td>';
							echo '</tr>';

							echo '<tr>';
								echo '<td>';
										echo $row['college'];
								echo '</td>';
							echo '</tr>';

							echo '<tr>';
								echo '<td>';
										echo $row['email'];
								echo '</td>';
							echo '</tr>';

						}
						echo '</table>';
					}

			}
			
	}

$obj=new display('object_oriented');
$obj->check_con();

/*$query="select * from Student8";
$this->sql=$query('object_oriented');
$obj->disp();*/