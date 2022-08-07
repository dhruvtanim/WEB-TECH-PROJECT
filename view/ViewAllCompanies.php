<?php include('../model/Admin/db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>View All Companies</title>
</head>
<body>
   
   <section>
     <div class="container">
      <div class="viewCompanyClass">
        <h1>All Companies List</h1>
        <div class="companyList">
          <?php
            $connection = new db();
            $conobj=$connection->OpenCon();
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
              $connection = new db();
              $conobj=$connection->OpenCon();
              $searchCompany=$connection->SearchCompanyById($conobj,"company",$_REQUEST["companyId"]); 
              echo "<h3>Searched Result</h3><br>";
              if($searchCompany->num_rows > 0){
                echo "<table><tr><th>Id</th><th>Name</th><th>Email</th>";
                // output data of each row
                while($row = $searchCompany->fetch_assoc()) {
                   echo "<tr><td>".$row["companyId"]."</td><td>".$row["companyName"]."</td><td>".$row["companyEmail"]."</td></tr>";
                }
                echo "</table><br><br>";
              }     
            }
            $userQuery=$connection->ShowAll($conobj,"company");
              echo "<h3>Company List</h3><br>";
            if ($userQuery->num_rows > 0) {
                  echo "<table><tr><th>Id</th><th>Name</th><th>Email</th>";
                  // output data of each row
                  while($row = $userQuery->fetch_assoc()) {
                     echo "<tr><td>".$row["companyId"]."</td><td>".$row["companyName"]."</td><td>".
                     $row["companyEmail"] ."</td></tr>";
                  }
                  echo "</table>";
            } 
            else {
              echo "0 results";
            }


          ?>


          <div class="backButton addViewCompanyBack">
              <h3>Do You want to go back?</h3>
              <a href="Admin.php" class="btn "><?php echo" "?>Go Back</a>            
         </div>
        </div>
        
      </div>
       
     </div>
   </section>

</body>
</html>
