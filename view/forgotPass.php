<?php
include('../model/Admin/db.php');
$validatepass = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
  $connection = new db();
  $conobj=$connection->OpenCon();
     $searchPass=$connection->SearchUserPass($conobj,"user",$_REQUEST["id"]); 


     if ($searchPass->num_rows > 0) {
        while($row = $searchPass->fetch_assoc()) {
            $validatepass = "Your password is ".$row["password"];
            }
     }
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Forgot Password</h2>

Hii, 
<form action="" method="POST">
User Id   : <input type="text" name="id" placeholder="Enter Your Id">
<?php echo $validatepass; ?><br><br>  
<input type="submit" value="Submit">
</form>

<br><br>Want to go back? <a href="Admin.php">Go Back</a>

</body>
</html>
