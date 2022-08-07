<?php
include('../model/Instactor/db.php');
$validatepass="";
$validateCertification="";
$validateInsatactorName="";
$validateExp="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$updateInstactorEmail=$_REQUEST["updateInstactorEmail"];

$updateTeachingExperience=$_REQUEST["updateTeachingExperience"];

if(strlen($_REQUEST["updateInstactorTitle"])<3)
{
    $validateInsatactorName= "Instactor name cannot be less than 3 charecters";

}
else
{
    $updateInstactorTitle=$_REQUEST["updateInstactorTitle"];
}

if(strlen($_REQUEST["updateInstactorPassword"])<8 )
{
    $validatepass= "Password must be greater than 8 charecters";
}
else
{
    $updateInstactorPassword=$_REQUEST["updateInstactorPassword"];
}

if(empty($_REQUEST["updateTeachingExperience"]))
{
    $validateExp="Enter your teaching Experience";
}


$target_dir = "../sources/";
$target_file = $target_dir . $_FILES["filetoupload"]["name"];



    if (!move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
              echo "Sorry, there was an error uploading your file.";
    } 

if($updateInstactorTitle="" || $updateInstactorEmail=="" || $updateTeachingExperience=="" || $updateInstactorPassword=="")
{
    echo "Sorry, Course adding failed.";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->UpdateValidInstactor($conobj,"instactor",$_SESSION["userId"],$updateInstactorTitle,$updateInstactorEmail,$updateTeachingExperience,$target_file,$updateInstactorPassword);

    if($userQuery)
    {
        echo "Instactor Registration Successful.";
        header("location: CourseInstructorPanel.php");
    }
    else
    {
        echo "Failed. Please try again ";
    }
}


}
?>