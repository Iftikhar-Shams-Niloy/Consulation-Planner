
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
<?php
    $servername     = "localhost";
    $username       = "root";
    $password       = "";
    $database       = "consultation";
    $connection     = new mysqli($servername, $username, $password, $database);
?>
<?php 
if(isset($_POST)){
    $Name 		= $_POST['Name'];
    $Initial 	= $_POST['Initial'];
    $Department = $_POST['Department'];
    $Phone      = $_POST['Phone'];
    $Email 		= $_POST['Email'];
    $Password 	= $_POST['Password'];
    
    $sql 		= "INSERT INTO faculty_data VALUES('$Name', '$Initial', '$Department','$Phone', '$Email', '$Password')";
    
    $result 	= mysqli_query($connection, $sql);
    if(mysqli_affected_rows($connection)){
    	    header("location:login.php");
    }
    else{
    	header("location:faculty_signup.php");
    }
}
?>
</body>
</html>