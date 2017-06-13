<!doctype html>
<html>
	<head>

		<link rel="stylesheet" type="text/css" href="design.css">
		<title> admin login</title>

	

	</head>
<body>
	<div id="login">
			<form action="user_check.php" method="post" name="form" id="fm">
				<fieldset>
					<legend> Login Please </legend>
				<table>
					<tr>
						<td><label>User Name*:</label></td><td><input type="text" name="u_id" id="aid" required placeholder="enter name">
					</tr>
					<tr>
						<td><label>Password*:</label></td><td><input type="password" name="u_pass" id="apass" required placeholder="enter password">
					</tr>

					<tr>
						<td><input type="submit" value="login" name="sb" id="sb"></td><td><a href="user_registration_table.php" style="text-decoration:none;color:red"><button type="button" id="up" style="color:">New User..?</button></a></td>
					</tr>
				</table>
				</fieldset>
			</form>
	</div>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script>

	$(function() {
   $("form[name='form']").validate({
    
				    rules: {
				      		u_id:"required",

				      		u_pass:{
        
       						 	minlength:5,
        						required:true

        								}
      							
      							},


				    messages:
				     {
				    	
				    	u_id:"Please enter the name First.!",
				    	u_pass:{
				    			
				    			number:" Please enter number.!",
				    			required:"Please enter password.!"

				    				},	
								
				    },
				    
				    submitHandler: function(form) {
				      form.submit();
				    }
  				});
});

	</script>
</body>
</html>