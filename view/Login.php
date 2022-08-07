<?php
include('../control/LoginValidation.php');

if(isset($_SESSION['userId'])){
	
	if($_SESSION['category'] == "admin" ){
		
        header("location: Admin.php");
   
    }
    

}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
<title>Login</title>

</head>

<body>
	

	<section>
		<div class="container">

			<div class="loginClass">
				<h1>Login to continue</h1> 
	
				<form action="" class="loginForm" method="POST">
						<br><label>User ID : </label><br><input type="text" class="userId" name="userId" 
						placeholder="Enter your user ID"><?php echo $validateUserid ?>
						<br><label>Password : </label><br><input type="password" name="password" placeholder="Enter your password">
						<?php echo $validatepass ?>
				<br><br>
				<input type="submit" class="btn submitButton" name="logIn" value="Login"><?php echo " " ?>	
				<br><?php echo $error; ?>	
				</form>
				<div class="loginFooter">
					<button class="btn forgotPass"><a href="forgotPass.php">ForgotPass</a></button>
					<button class="btn back"><a href="Homepage.php">HomePage</a></button>				
				</div>
			</div >
			<div class="loginContent">
				<div class="loginRow1">
					<h2>✔SKILLSHARE</h2>
					<p>All the courses are based on the demand of the students</p>
				</div>
			</div>
		</div>
	</section>



</body>

</html>		
