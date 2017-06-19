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


			table,th,td{
				border-collapse: collapse;
				border:1px solid;
				background-color:;
				
			}
		</style>
	</head>
<body>
	<div id="dv">
		<form action="insert_oophp.php" method="post" name="form">
			<center><h3>Student details</h3></center>
		<table>
			<tr>
			<td><label>Name:</td><td><input type="text" name="name" id="nm"/></td>
			</tr>

			<tr>
			<td><label>Roll No:</td><td><input type="text" name="roll" id="nm"/></td>
			</tr>

			<tr>
			<td><label>Address:</td><td><input type="text" name="address" id="nm"/></td>
			</tr>

			<tr>
			<td><label>Marks:</td><td><input type="text" name="marks" id="nm"/></td>
			</tr>

			<tr>
			<td><label>College:</td><td><input type="text" name="college" id="nm"/></td>
			</tr>

			<tr>
			<td><label>Email id:</td><td><input type="text" name="email" id="nm"/></td>
			</tr>


			<tr>
				<td><input type="submit" name="sub" id="nm"/></td>
			</tr>

		</table>

		</form>
	</div>
</body>
</html>
