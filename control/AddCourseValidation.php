<?php
include('../model/Admin/db.php');
$validateCategory="";
$validateCourseTitle="";
$validateCourseDescription="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $courseTitle=$courseDescription=$courseCategory="";

if(strlen($_REQUEST["courseTitle"])<3)
{
    $validateCourseTitle= "Course Title cannot be less than 3 charecters";

}
else
{
    $courseTitle=$_REQUEST["courseTitle"];
}

if(strlen($_REQUEST["courseDescription"])<10)
{
    $validateCourseDescription= "Course description cannot be less than 10 charecters";

}
else
{
    $courseDescription=$_REQUEST["courseDescription"];
}

if(!isset($_REQUEST["courseCategory"]))
{
    $validateCategory = "Please select a category";
}
else
{
    $courseCategory= $_REQUEST["courseCategory"];
}



if($courseTitle=="" || $courseDescription==""  || $courseCategory=="")
{
    echo "Sorry, Course adding failed.";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->InsertCourse($conobj,"course",$courseTitle,$courseDescription,$courseCategory);

    if($userQuery)
    {
        echo "Course added Successfully. Want to add more? If not then Go back";
    }
    else
    {
        echo "Failed. Please try again ";
    }
}
    



}
?>