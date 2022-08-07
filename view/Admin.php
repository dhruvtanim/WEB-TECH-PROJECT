<?php
session_start(); 
if(empty($_SESSION["userId"])) 
{
	
header("Location: ../view/Login.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
	<title>Admin</title>
</head>
<body>
<h3>hii,<?php
 echo $_SESSION['category'];
 ?></h3>
	<section>
		<div class="container"> 
			<div  class="addSection">
				<h1>Add</h1>
				<button class="btn"><a href="AddCourse.php">Add Course</a></button>
				<button class="btn"><a href="AddInstactor.php">Add Instactor</a></button>
				<button class="btn"><a href="ApproveCompanies.php">Approve Companies</a></button>
				<button class="btn"><a href="Adminprofile.php">Admin profile</a></button>
			</div>
			<div class="viewSection">
				<h1>View</h1>
				<button class="btn"><a href="ViewAllCompanies.php">View All Companies</a></button>
				<button class="btn"><a href="ViewAllLerners.php">View All Learners</a></button>
				<button class="btn"><a href="ViewAllInstactors.php">View All Instactors</a></button>	
				<button class="btn"><a href="ViewAllCourses.php">View All Courses</a></button>
			</div>
		</div>
	</section>

	<br><br>
	<div class="logoutButton">
		<h3>Do You want to logout?</h3>
		<div >
			<a href="../control/Logout.php" class="logoutBtn"><?php echo" "?>LogOut</a>			
		</div>

	</div>

</body>

</html>		
