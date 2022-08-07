<?php
class db{
function OpenCon() {
$servername="localhost";
$username="root";
$password="";
$dbname="eoep";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	return $conn;
}
}


function updateAdminInfo($conn,$table,$Name,$Occupasion,$Nationality,$Religion,$Email)
 {
     $sql = "UPDATE $table SET Name='$Name',Occupasion='$Occupasion',Nationality='$Nationality',Email='$Email',Religion='$Religion' WHERE ID='1'";

    if ($conn->query($sql) === TRUE) 
    {
        $result= TRUE;
    } else 
    {
        $result= FALSE ;
    }
    return  $result;
 } 
}
