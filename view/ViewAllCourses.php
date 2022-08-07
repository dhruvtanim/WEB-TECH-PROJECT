<?php
include('../model/Admin/db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>View All Course</title>
</head>
<body>
     
   <section>
     <div class="container">
      <div class="viewCourseClass">
        <h1>All Courses</h1>
        <div class="courseList">
          <?php
            $connection = new db();
            $conobj=$connection->OpenCon();

            $userQuery=$connection->ShowAll($conobj,"course");
              echo "<h3>Courses List</h3><br>";
            if ($userQuery->num_rows > 0) {
                  echo "<table><tr><th>Id</th><th>Title</th><th>Category</th>";
                  // output data of each row
                  while($row = $userQuery->fetch_assoc()) {
                     echo "<tr><td>".$row["courseId"]."</td><td>".$row["courseTitle"]."</td><td>".$row["courseCategory"]."</td></tr>";
                  }
                  echo "</table>";
            }            
            else {
              echo "0 results";
            }
          ?>


          <div class="backButton addViewCourseBack">
              <h3>Do You want to go back?</h3>
              <a href="Admin.php" class="btn "><?php echo" "?>Go Back</a>            
         </div>
        </div>
        
      </div>
       
     </div>
   </section>

</body>
</html>
