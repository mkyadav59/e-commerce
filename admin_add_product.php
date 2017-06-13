<!doctype html>
<html>
	<head>
		<title> admin_add_product</title>
		<link rel="stylesheet" type="text/css" href="design.css">
	</head>

<body>
	<div id="add">
		<form action="admin_insert.php" name="fm2" method="post" enctype="multipart/form-data">
			<fieldset>

				<legend> Adding Product </legend>
		<table>

			<tr>
				<td><label>Product Type*:</label>

					<td><select id="product_type" name="p_type" onclick="a(this.value)">
					      <option value="" selected="selected">Select Something..</option>
						  <option value="Shooze">Shooze</option>
						  <option value="T.V">T.V</option>
						  <option value="Camera">Camera</option>
						  <option value="Mobile">Mobile</option>
						  <option value="Printer">Printer</option>
						  <option value="Laptop">Laptop</option>
						  <option value="Car">Car</option>
						  <option value="Bike">Bike</option>
					</select> 
				</td>
				</td>
			</tr>
			
			<tr>
				<td><label>Product Category*:</label></td><td><select id="product_category" name="p_cat"></select></td>
			</tr>

			<tr>
				<td><label>Product Name*:</label></td><td><input type="text" name="p_name"></td>
			</tr>

			<tr>
				<td><label>Product Size*:</label></td><td><input type="text" name="p_size"></td>
			</tr>

			<tr>
				<td><label>Product Color*:</label></td><td><input type="text" name="p_color"></td>
			</tr>

			<tr>
				<td><label>Product Description*:</label></td><td><input type="text" name="p_desc"></td></td>
			</tr>

			<tr>
				<td><label>Product Image*:</label></td><td><input type="file" name="file"></td>
			</tr>

			<tr>
				<td><label>Product Cost*:</label></td><td><input type="text" name="p_cost"></td>
			</tr>

			<tr>
				<td><label>Product Feaure*:</label></td><td><input type="text" name="p_feature"></td>
			</tr>

			<tr>
				<td><label>Product Specification*:</label></td><td><input type="text" name="p_spec"></td>
			</tr>


			<tr>
				<td><input type="submit" value="Submit" name="sub"></td>
			</tr>

		</fieldset>
		</table>
	
</div>



<script type="text/javascript">

function a(r)
{
	if(r=='Shooze')
	    {
				var a='<option value="">Select something</option><option value="Men">Men</option><option value="Children">Children</option>';
				document.getElementById("product_category").innerHTML=a;
		}

		else if(r=='T.V')
		{
			var b='<option value="">Select something</option><option value="Samsung">Samsung</option><option value="Micromax">Micromax</option><option value="Sony">Sony</option><option value="L.G">L.G</option>';
			document.getElementById("product_category").innerHTML=b;
		}

		else if(r=='Camera')
		{
			var c='<option value="">Select something</option><option value="Nikon">Nikon</option><option value="Canon">Canon</option><option value="Sony cyber">Sony cyber</option><option value="Pentax">Pentax</option>';
				document.getElementById("product_category").innerHTML=c;
		}
		else if(r=='Mobile')
		{
			var d='<option value="">Select something</option><option value="Samsung">Samsung</option><option value="Apple">Apple</option><option value="Nikon">Nikon</option><option value="HTC">HTC</option>';
				document.getElementById("product_category").innerHTML=d;
		}
		else if(r=='Printer')
		{
			var e='<option value="">Select something</option><option value="H.P">HP</option><option value="Panasonic">Panasonic</option><option value="Canon">Canon</option><option value="Epson">Epson</option>';
				document.getElementById("product_category").innerHTML=e;
		}

		else if(r=='Laptop')
		{
			var e='<option value="">Select something</option><option value="Lenove">Lenove</option><option value="Dell">Dell</option><option value="HP">HP</option><option value="Apple">Apple</option><option value="Toshiba">Toshiba</option>';
				document.getElementById("product_category").innerHTML=e;
		}
		else if(r=='Car')
		{
			var f='<option value="">Select something</option><option value="Acura">Acura</option><option value="Alfa Romeo">Alfa Romeo</option><option value="Audi">Audi</option><option value="BMW">BMW</option><option value="Bugatti">Bugatti</option>';
				document.getElementById("product_category").innerHTML=f;
		}
		else if(r=='Bike')
		{
			var g='<option value="">Select something</option><option value="Harley_Davidson_Vespa">Harley Davidson Vespa</option><option value="Ducati_Hyosung">Ducati Hyosung</option><option value="Royal_enfield">Royal enfield</option><option value="Pulsar">Pulsar</option><option value="Bajaj_Discover">Bajaj Discover</option>';
				document.getElementById("product_category").innerHTML=g;
		}
		

}

</script>
</body>
</html>
