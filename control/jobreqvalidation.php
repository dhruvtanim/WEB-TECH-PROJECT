<?php
include('../model/JobRecuiter/db.php');
$validateName="";
$validateInstitutionName="";
$validateProgram="";
$validateCourseCompleted="";
$message="";
$Name="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $Name=$Institutionname=$program=$CourseCompleted=$jobcategory="";

if(strlen($_REQUEST["Name"])<3)
{
    $validateName= "Name cannot be less than 3 charecters";

}
else
{
    $Name=$_REQUEST["Name"];
}

if(strlen($_REQUEST["Institutionname"])<3)
{
    $validateInstitutionname= "Institutionname cannot be less than 10 charecters";

}
else
{
    $Institutionname=$_REQUEST["Institutionname"];
}

if(!is_numeric($_REQUEST["Coursecompleted"]))
{
    $validateCourseCompleted = "Coursecompleted must be integer.";

}
else
{
   $CourseCompleted=$_REQUEST["Coursecompleted"];
}


if(!isset($_REQUEST["Program"]))
{
    $validateProgram = "Please select a Program";
}
else
{
    $Program= $_REQUEST["Program"];
}


if(!isset($_REQUEST["jobcategory"]))
{
    $validateProgram = "Please select a jobcategory";
}
else
{
    $jobcategory= $_REQUEST["jobcategory"];
}

$target_dir = "../sources/";
$target_file = $target_dir . $_FILES["filetoupload"]["name"];

if (!move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
       echo "Sorry, there was an error uploading your file.";
       
} 

if($Name=="" || $Institutionname=="" || $Program=="" || $CourseCompleted=="" || $jobcategory=="")
{
    echo "Sorry, Course adding failed.";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->InsertUser($conobj,"job recruit",$Name,$Institutionname, $Program, $CourseCompleted);

    if($userQuery)
    {
        echo "Course Createrd Successfully. Want to add more? If not then Go back";
    }
    else
    {
        echo "Failed. Please try again ";
    }
}
    



}
?>
