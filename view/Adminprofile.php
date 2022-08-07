<h1><p style="color:blue">SKILL-SHARE</p></h1>
<h2>Admin-profile</h2> 
<!-- <!DOCTYPE html>
<html>
<body>
<img src='../sources/pp.jpg' width="200" height="200">
<h3>Personal info</h3>
<h5 >Name:MD.Abdul Hamid </h5> 
<h5 >Occupasion: Student</h5>
<h5 >Nationality: Bangladeshi</h5>
<h5 >Religion : Islam</h5>
<h5 >Email:dhruvtanim@gmail.com</h5>
</body>
</html>
?> -->
 
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="eoep";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	//echo "Successful connection";
	//$q="CREATE TABLE Teacher(ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,Name VARCHAR(30),Email VARCHAR(30), Salary INT(11))";
	//$q="INSERT INTO Student(Name,Email) VALUES('".$name."','".$email."')";
	//$q="DELETE FROM Student where ID=1003";
	
	$q="SELECT * FROM adminprf";
	$result=$conn->query($q);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			
			echo "Name:".$row["Name"]."<br>"."Occupasion:".$row["Occupasion"]."<br>"."Nationality:".$row["Nationality"]."<br>"."Religion:".$row["Religion"]."<br>"."Email:".$row["Email"]."<br>";
		}
	}
	else
	{
	 echo "no data to display";	
	}
}
?>
<form method="get" action="Login.php">
    <button type="submit">Go Back</button>
</form>
<form method="get" action="upd.php">
    <button type="submit">update</button>
</form>