<?php
include('../model/Admin/db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>View All Lerner</title>
</head>
<body>
     
    <section>
     <div class="container">
      <div class="viewLernerClass">
        <h1>All Lerners</h1>
        <div class="lernerList">
          <?php
            $connection = new db();
            $conobj=$connection->OpenCon();
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
              $connection = new db();
              $conobj=$connection->OpenCon();
              $searchLerner=$connection->SearchLernerById($conobj,"learner",$_REQUEST["lernerId"]); 
              echo "<h3>Searched Result</h3><br>";
              if ($searchLerner->num_rows > 0) {
                echo "<table><tr><th>Id</th><th>Name</th><th>Email</th>";
                // output data of each row
              while($row = $searchLerner->fetch_assoc()) {
                 echo "<tr><td>".$row["lernerId"]."</td><td>".$row["username"]."</td><td>".$row["email"].
                 "</td></tr>";
              }
              echo "</table>";
              } 
              else {
               echo "0 results";
              }     
            }
            $userQuery=$connection->ShowAll($conobj,"learner");
              echo "<h3>learner List</h3><br>";
            if ($userQuery->num_rows > 0) {
              echo "<table><tr><th>Id</th><th>Name</th><th>Email</th>";
              // output data of each row
             while($row = $userQuery->fetch_assoc()) {
               echo "<tr><td>".$row["lernerId"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td></tr>";
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
