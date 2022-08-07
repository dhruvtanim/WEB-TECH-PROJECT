<?php include "../control/AddInstactorValidation.php";?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Add Instactor</title>
</head>
<body>
   
   </header>
   <section>
       <div class="container">
        <div class="addInstactorClass">
            <h1>Add Instactor</h1>
            <form action="" method="POST" class="addInstactorForm" onsubmit="return addInstactorValidation()">
                <br><label>Instactor Name   :<label><br>
                <input type="text" name="instactorTitle" id="instactorTitle"  placeholder="Enter Instactor name" >
                <p id="instactorTitleError" class="errorMsg"></p>
                <?php echo $validateInstactorTitle; ?>

                <br><label>Assigned Course :  </label><br>
                <input type="text" name="assignedCourse" id="assignedCourse" placeholder="Enter assign course name" >
                <p id="assignedCourseError" class="errorMsg"></p>
                <?php echo $validateAssignedCourse; ?>

                <br><label>Password:</label><br>
                <input type="password" name="instactorPassword" id="instactorPassword" placeholder="Enter a new password" >
                <p id="instactorPasswordError" class="errorMsg"></p>
                <?php echo $validateInstactorPassword; ?><br><br>

                <input type="submit" class="btn submitButton" value="Assign Instactor"><?php echo " " ?>
                

            </form>
            <div class="backButton addInstactorBack">
                <h3>Do You want to go back?</h3>
                <a href="Admin.php" class="btn "><?php echo" "?>Go Back</a>            
            </div>
        </div>
           
       </div>
   </section>





</body>
</html>

