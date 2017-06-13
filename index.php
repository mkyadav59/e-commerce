<?php
	
	include('connection.php');



  	$sql= "select product_image,product_name ,product_id from admin_add_product";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);


  	echo '<header>';
  		echo '<div id="header1">';
		//adding menubar

		echo '<div style="float:left">';
				echo '<span style="color:white;text-align: center;margin-top:20px;font-size:30px" id="home";>HOME';

				echo '</span>';
				echo '<div class="dropdown">
  						<button class="dropbtn">SHOOZE</button>
  							<div class="dropdown-content">
    							<a href="">Nike</a>
    							<a href="">Addidas</a>
   								<a href="">Puma</a>
   								<a href="">Nike</a>
    							<a href="">Addidas</a>
   								<a href="">Woodland</a>
  							</div>
					</div>';	
				echo '</span>';

				echo '<span>';
				echo '<div class="dropdown">
  						<button class="dropbtn">T.V</button>
  							<div class="dropdown-content">
    							<a href="">Sony</a>
    							<a href="">L.G</a>
   								<a href="">Samsumg</a>
   								<a href="">Micromax</a>
    							<a href="">Onida</a>
   								<a href="">Panasonic</a>
  							</div>
					</div>';	
				echo '</span>';



				echo '<span>';
				echo '<div class="dropdown">
  						<button class="dropbtn">CAMERA</button>
  							<div class="dropdown-content">
    							<a href="">Canon</a>
    							<a href="">Nikon </a>
   								<a href="">Olympus </a>
   								<a href="">Leica </a>
    							<a href="">Pentax </a>
   								<a href="">Minolta </a>
  							</div>
					</div>';	
				echo '</span>';



				echo '<span>';
				echo '<div class="dropdown">
  						<button class="dropbtn">MOBILE</button>
  							<div class="dropdown-content">
    							<a href="">Samsung</a>
    							<a href="">Apple</a>
   								<a href="">Nokia</a>
   								<a href="">Motorola</a>
    							<a href="">Blackbery</a>
   								<a href="">L.G</a>
  							</div>
					</div>';	
				echo '</span>';



				echo '<span>';
				echo '<div class="dropdown">
  						<button class="dropbtn">PRINTER</button>
  							<div class="dropdown-content">
    							<a href="">HP
    								<ul class="dropdown">
    									<li>HP Color LaserJet Pro MFP M277dw</li>
    									<li>HP OfficeJet Pro 6978 All-in-One Printer</li>
    									<li>HP LaserJet Pro MFP M426fdn</li>
    									<li>HP HP Sprocket Photo Printer</li>
    									<li>HP LaserJet Enterprise M608dn</li>
    								</ul>
    							 </a>
    							<a href="">Samsung
                 					 <ul>
    									<li>Samsung - SCX 3401</li>
    									<li>Samsung ML 2161</li>
    									<li>Samsung - SCX 4321NS</li>
    									<li>Samsung M2021 Laser</li>
    									<li>HP LaserJet Enterprise M608dn</li>
    								</ul>
    							</a>
   								<a href="">Epson </a>
   								<a href="">Panasonic </a>
    							<a href="">Brother</a>
   								<a href="">Canon </a>
  							</div>
					</div>';	
				echo '</span>';


				echo '<span>';
				echo '<div class="dropdown">
  						<button class="dropbtn">LAPTOP</button>
  							<div class="dropdown-content">
    							<a href="">Dell</a>
    							<a href="">Lenove</a>
   								<a href="">Apple</a>
   								<a href="">Samsung</a>
    							<a href="">Micromax</a>
   								<a href="">Acer</a>
  							</div>
					</div>';	
				echo '</span>';



				echo '<span>';
				echo '<div class="dropdown">
  						<button class="dropbtn">CAR</button>
  							<div class="dropdown-content">
    							<a href="">Hyundai</a>
    							<a href="">Toyota</a>
   								<a href="">Suzuki</a>
   								<a href="">Ford</a>
    							<a href="">Honda</a>
   								<a href="">Tata</a>
  							</div>
					</div>';	
				echo '</span>';




				echo '<span>';
				echo '<div class="dropdown">
  						<button class="dropbtn">BIKE</button>
  							<div class="dropdown-content">
    							<a href="">Yamaha</a>
    							<a href="">Ducati</a>
   								<a href="">Kawasaki</a>
   								<a href="">Suzuki</a>
    							<a href="">Bajaj</a>
   								<a href="">Royal Enfield</a>
  							</div>
					</div>';
	
				echo '</span>';

				echo '<a href="user_login_table.php" style="text-decoration:none;color:green;id="up"><button type="button" id="up" style="color:green;width:100px;height:-20px;margin-left:10px"><h2>Sign-Up</h2></button></a>';

				echo '<center><input type="search" id="search" name="search_bar"style="width:600px;height:50px;margin-left:300px;float:left" placeholder="Enter Product"/>';
				echo '<input type="button" name="search_button" value="Search" style="width:100px;height:50px;margin-left:-250px"></button>';

			echo '</div>'; 
  		echo '</div>';
  	echo '</header>';


  echo '<nav id="nav">';
  echo '</nav>';
	if($count>0)
	{  
			echo '<center>';
			echo '<section id="section">';
			echo '<header id="sec_header">';
			echo '<div id="value">';


		while($row = mysqli_fetch_assoc($result))
		{
			//var_dump($row);

			echo '<div style="float:left" class="desc" data-id="'.$row["product_id"].'">';
			echo '<img style="width:165px;float:left;height:175px" src="'.$row['product_image'].'" ></img>';
			echo '<br>';
			echo $row["product_name"];
			echo '<br>';
			echo "<input type='button' class='button' value='Product Description'/>";
			echo '<br>';
			echo '</div>';
			
		}
			

			echo '</div>';
			echo '</header>';
			
			echo '</section>';
			echo '</center>';


			

	}
			echo '<aside id="aside">';	
			echo '</aside>';
	?>

<!doctype html>
<html>
		<head>
			<link rel="stylesheet" type="text/css" href="design5.css">
		</head>
<body>
		<div id="header">
			<header>
			</header>

		</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script>
	$(document).ready(function()
	{
		$('.desc').click(function(){
			
			var data= $(this).data('id');
				//alert(data);
				//console.log(data)
			$.ajax({ 				
				type:"POST",
				url: "desc.php",  
				data:{'sat':data},				
				success:function(out){
					$("#section").html(out); 
				}
			});
		});
	});
	</script>

<script type="text/javascript">
function rand()
{
var a=Math.round(Math.random()*7)
{
	if(a==1)
	{
	document.getElementById('aside').innerHTML='<img src="images (11).jpg"style="width:280px;height:100px"></img>';
	}
	else if(a==2)
	{
		document.getElementById('aside').innerHTML='<img src="images (16).jpg"style="width:280px;height:170px"></img>';
	}
	else if(a==3)
	{
		document.getElementById('aside').innerHTML='<img src="Samsung-Galaxy-S7-edge-e1483083226598.jpg"style="width:280px;height:170px"></img>';
	}
	else if(a==4)
	{
		document.getElementById('aside').innerHTML='<img src="images (15).jpg" style="width:280px;height:170px"></img>';
	}
	else if(a==5)
	{
	document.getElementById('aside').innerHTML='<img src="inde.jpeg" style="width:280px;height:170px"></img>';
	}
	else if(a==6)
	{
		document.getElementById('aside').innerHTML='<img src="images (12).jpg" style="width:280px;height:170px"></img>';
	}
	else if(a==7)
	{
		document.getElementById('aside').innerHTML='<img src="images (17).jpg" style="width:280px;height:170px"></img>';
	}

}
}
setInterval(rand,1000);
</script>



</body>	
</html>
