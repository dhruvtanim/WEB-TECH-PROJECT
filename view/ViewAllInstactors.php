<?php
include('../model/Admin/db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>View All Instactor</title>
</head>
<body>
      
   <section>
     <div class="container">
      <div class="viewInstactorClass">
        <h1>All Instactor</h1>
        <div class="instactorList">
          <?php
            $connection = new db();
            $conobj=$connection->OpenCon();
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
              $connection = new db();
              $conobj=$connection->OpenCon();
              $searchInstactor=$connection->SearchInstactorById($conobj,"instactor",$_REQUEST["instactorId"]); 
              echo "<h3>Searched Result</h3><br>";
              if($searchInstactor->num_rows > 0){
                echo "<table><tr><th>Id</th><th>Name</th><th>Email</th>";
                // output data of each row
                while($row = $searchInstactor->fetch_assoc()) {
                  echo "<tr><td>".$row["instactorId"]."</td><td>".$row["instactorName"]."</td><td>".$row["instactorEmail"]."</td></tr>";
                }
                echo "</table>";
              } else {
                echo "0 results";
              }
                echo "</table><br><br>";     
            }

            $userQuery=$connection->ShowAll($conobj,"instactor");
              echo "<h3>Instructor List</h3><br>";
            if ($userQuery->num_rows > 0) {
                echo "<table><tr><th>Id</th><th>Name</th><th>Email</th>";
                // output data of each row
                while($row = $userQuery->fetch_assoc()) {
                  echo "<tr><td>".$row["instactorId"]."</td><td>".$row["instactorName"]."</td><td>".$row["instactorEmail"]."</td></tr>";
                }
                echo "</table>";
              } else {
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
