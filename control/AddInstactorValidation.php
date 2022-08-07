<?php
include('../model/Admin/db.php'); 
$validateInstactorTitle="";
$validateAssignedCourse="";
$validateInstactorPassword="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $instactorTitle=$assignedCourse=$instactorPassword=$instactorEmail=$teachingExprience=$certification="";

if(strlen($_REQUEST["instactorTitle"])<3)
{
    $validateInstactorTitle= "Instactor name cannot be less than 3 charecters";

}
else
{
    $instactorTitle=$_REQUEST["instactorTitle"];
}

if(empty($_REQUEST["assignedCourse"]))
{
    $validateAssignedCourse= "Please select a course.";

}
else
{
    $assignedCourse=$_REQUEST["assignedCourse"];
}

if(strlen($_REQUEST["instactorPassword"])<8 || strlen($_REQUEST["instactorPassword"])>14)
{
    $validateInstactorPassword = "Password can not be less than 8 or grater than 14 charecters";
}
else
{
    $instactorPassword= $_REQUEST["instactorPassword"];
}

if($instactorTitle=="" || $assignedCourse=="" || $instactorPassword=="")
{
    echo "Sorry, Course adding failed.";
}
else
{

    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->InsertInstactor($conobj,"instactor",$instactorTitle,$assignedCourse,$instactorPassword );

    if($userQuery)
    {
        $userQuery=$connection->SearchInstactorByName($conobj,"instactor",$instactorTitle,$instactorPassword);


        if ($userQuery->num_rows > 0) {

             // output data of each row
            while($row = $userQuery->fetch_assoc()) {
                $instactorId=$row["instactorId"];
                $instactorPassword=$row["instactorPassword"];
                 $instactorData = array(             
                'instactorId'=> $row["instactorId"],  
                'instactorName'=> $row["instactorName"],
                'assignedCourse'=> $row["assignCourse"],
                'instactorPassword'=>$row["instactorPassword"],
                );
            }
            $existingdata = file_get_contents('../sources/instactorData.json');
            $tempJSONdata = json_decode($existingdata);
            $tempJSONdata[] =$instactorData;
            //Convert updated array to JSON
            $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
       
            //write json data into data.json file
                if(file_put_contents("../sources/instactorData.json", $jsondata)) {
                    echo "Data successfully saved <br>";
                }
                else 
                    echo "no data saved";

        }
        else
        {
            echo "Failed. Please try again ";
        }
        $userInsert=$connection->InsertUser($conobj,"user",$instactorId,$instactorPassword,"instactor");
        
     echo " Instactor assign Successfully. Want to add more? If not then Go back";   
    } 
   
    //Get form data

}

}
?>