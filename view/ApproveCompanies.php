<?php
include('../model/Admin/db.php');
$validateCompanyId = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
  $connection = new db();
  $conobj=$connection->OpenCon();
     $searchCompany=$connection->SearchCompanyById($conobj,"company",$_REQUEST["companyId"]); 


     if ($searchCompany->num_rows > 0) {
        while($row = $searchCompany->fetch_assoc()) {
            $companyStatus = $row["companyStatus"];
            }
     }
      if($companyStatus=="invalid")
      {
            $updateCompany=$connection->updateCompanyStatus($conobj,"company",
              $_REQUEST["companyId"],"valid");
            if($updateCompany)
            {
              echo "Assigned Successfully";
            }
            else
            {
              echo "Assigned failed";
            }
      }   
     
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Company Approval</title>
</head>
<body>
     
   </header>
   <section>
     <div class="container">
      <div class="approveCompanyClass">
        <h1>Companies approval Request</h1>
        <div class="companyApproval">
          <?php
            $connection = new db();
            $conobj=$connection->OpenCon();

            $userQuery=$connection->companyValidation($conobj,"company","invalid");

            if ($userQuery->num_rows > 0) {
                echo "<table><tr><th>Id</th><th>Name</th><th>Email</th>";
                // output data of each row
                while($row = $userQuery->fetch_assoc()) {
                 echo "<tr><td>".$row["companyId"]."</td><td>".$row["companyName"]."</td><td>".$row["companyEmail"]."</td></tr>";
                }
               echo "</table>";
            } 
            else {
              echo "0 results";
            }
          ?>
        </div>
          <form action="" method="POST" class="companyApprovalForm">
            <input type="text" name="companyId" placeholder="Enter Company Id"> 
            <input type="submit" class="btn submitButton" value="Approve Company">
          </form>
          <div class="backButton addInvalidBack">
              <h3>Do You want to go back?</h3>
              <a href="Admin.php" class="btn "><?php echo" "?>Go Back</a>            
         </div>
      </div>       
     </div>
   </section>
</body>
</html>
