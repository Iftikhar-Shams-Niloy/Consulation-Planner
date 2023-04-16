<?php 
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="signupstyles.css">
	<title>Faculty Signup</title>
	<link href='signup_styles.css' rel='stylesheet'/>
</head>
<body>

	<div class=signupHeader>
		<h1 class= centerWhite>Faculty </h1>
		<h2 class= white>Signup</h2>
	</div>
	<br> <br> <br> <br>


    <div class="signupbox">
    	<h1 class="siguptext"></h1>
    	<form class="username_password" action="faculty_signup.php" method="POST">
			<img src="images/login avatar2.jpg" class="avatar">
    				<p>Username</p>
    		<input type="text" id="Name" name="Name" placeholder="Enter Username">
      		   		<p>Initial</p>
    		<input type="text" id="Initial" name="Initial" placeholder="Enter Initial">
    				<p>Department</p>
    		<input type="text" id="Department"  name="Department" placeholder="Enter Department">
					<p>Phone Number</p>
    		<input type="text" id="Phone"  name="Phone" placeholder="Enter Phone no.">
    				<p>Email</p>
    		<input type="text" id="Email" name="Email" placeholder="Enter Email">
    		    	<p>Password</p>
    		<input type="password" id="Password" name="Password" placeholder="Enter Password">
    		<br><br>
    		<input type="submit" id = "Create" name="Create" value="Create account" >
    	</form>	
    </div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#Create').click(function(e){
			var valid = this.form.checkValidity();
			if(valid){
			var Name 			= $('#Name').val();
			var Initial			= $('#Initial').val();
			var Department 		= $('#Department').val();
			var Phone			= $('#Phone').val();
			var Email 			= $('#Email').val();
			var Password 		= $('#Password').val();
				e.preventDefault();	
				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {Name: Name,Initial: Initial,Department: Department, Phone:Phone, Email: Email,Password: Password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});
			}else{
				
			}
		});		
	});
</script>
</body>
</html>