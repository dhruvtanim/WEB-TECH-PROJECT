<?php
include('../control/InstactorUpdateValidation.php');
session_start(); 
if(empty($_SESSION["userId"])) 
{
header("Location: ../view/Login.php"); 
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Update profile</title>
</head>
<center>
<body>
	<img src="../sources/logo.png"width="200" height="70" ><br>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
Update Name          : <input type="text" name="updateInstactorTitle" placeholder="Enter instactor Name"><?php echo $validateInsatactorName ?> <br><br>
Update Password          : <input type="password" name="updateInstactorPassword" placeholder="Enter new password"><?php echo $validateInsatactorName ?> <br><br>
Your Email         : <input type="email" name="updateInstactorEmail" placeholder="Enter instactor email" required>
<br><br>
Certification : <input type="file" name="filetoupload" required><?php echo 
$validateCertification; ?><br><br>

Teaching Exprience : <input type="number" name="updateTeachingExperience" placeholder="Enter Teaching Exprience"><?php echo $validateExp ?><br><br>
	

<input type="submit" value="Update"> <?php echo " " ?>
<input type="reset" value="Reset">
	
	<br><br>
	<p>Do You want to go to Portal page? ? <a href="CourseInstructorPanel.php">Go back</a></p>
</body>
</center>
</html>		