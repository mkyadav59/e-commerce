<!doctype html>
<html>
	<head>

		<link rel="stylesheet" type="text/css" href="design1.css">
		<title> admin login</title>

	

	</head>
<body>
	<div id="login">
			<form action="admin_add_login1.php" method="post" name="form" id="fm">
				<fieldset>
					<legend> Admin_Login</legend>
				<table>
					<tr>
						<td><label>Admin_Id*:</label></td><td><input type="text" name="admin_id" id="aid" required placeholder="enter id">
					</tr>
					<tr>
						<td><label>Password*:</label></td><td><input type="password" name="admin_pass" id="apass" required placeholder="enter password">
					</tr>

					<tr>
						<td><input type="submit" value="login" name="sb" id="sb"> 
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
				      		admin_id:"required",

				      		admin_pass:{
        
       						 	minlength:5,
        						required:true

        								}
      							
      							},


				    messages:
				     {
				    	
				    	admin_id:"Please enter the Admi_id First.!",
				    	admin_pass:{
				    			
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