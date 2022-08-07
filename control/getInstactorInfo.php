<?php
session_start(); 
include('../model/Instactor/db.php');
    $connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->SearchInstactorById($conobj,"instactor",$_SESSION["userId"]);

        if ($userQuery->num_rows > 0) {
            while($row = $userQuery->fetch_assoc()) {
              $instactorId=$row["instactorId"];
              $instactorName=$row["instactorName"];
              $instactorEmail=$row["instactorEmail"];
              $teachingExprience=$row["teachingExprience"];
              $certification=$row["certification"];
              $assignCourse=$row["assignCourse"];              
              $instactorPassword=$row["instactorPassword"];
            }
        }     

?>
