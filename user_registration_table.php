<!doctype html>
<html>
	<head>

		<link rel="stylesheet" type="text/css" href="design2.css">
		<title> admin_add_product</title>

	</head>

<body>
	<div id="add1">
		<form action="user_new_registration.php" name="fm2" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend> User Registration Page </legend>
		<table>

			<tr>
				<td><label>First Name*:</label></td><td><input type="text" name="f_name"></td>
			</tr>
			
			<tr>
				<td><label>Last Name*:</label></td><td><input type="text" name="l_name"></td>
			</tr>

			<tr>
				<td><label>Address*:</label></td><td><input type="text" name="add_name"></td>
			</tr>

			<tr>
				<td><label>Email Id*:</label></td><td><input type="email" name="email_name"></td>
			</tr>

			<tr>
				<td><label>Mobile Number*:</label></td><td><input type="text" name="mobile_name"></td>
			</tr>

			<tr>
				<td><label>Land Mark*:</label></td><td><input type="text" name="land_mark"></td>
			</tr>

			<tr>
				<td><label>Country*:</label></td><td><input type="text" name="country"></td>
			</tr>

			<tr>
				<td><label>State*:</label></td>
				<td>
						<select id="state_type" name="state_name">
						  <option value="Maharashtra">Maharashtra</option>
						  <option value="Utter Pradesh">Utter Pradesh</option>
						  <option value="Kerla">Kerla</option>
						  <option value="Madhyapradesh">Madhyapradesh</option>
						  <option value="Pujab">Punjab</option>
						  <option value="Hariyana">Hariyana</option>
					</select> 
				</td>
				
			</tr>

			<tr>
				<td><label>City*:</label></td>
				<td>
					<select id="city_type" name="city_name">
						  <option value="Mumbai">Mumbai</option>
						  <option value="Pune">Pune</option>
						  <option value="New_Mumbai">New Mumbai</option>
						  <option value="Thane">Thane</option>
						  <option value="Goregaon">Goregaon</option>
						  <option value="Nasik">Nasik</option>
						  <option value="kolhapur">kolhapur</option>
					</select> 
				</td>
				
			</tr>


			<tr>
				<td><label>DOB*:</label></td><td><input type="text" name="date"></td>
			</tr>

			<tr>
				<td><input type="submit" value="submit"></td>
			</tr>
		</fieldset>
		</table>
	</div>

</body>
</html>
