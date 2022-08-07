<?php
class db{
 
function OpenCon() {
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "eoep";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
return $conn;
}

function CheckUser($conn,$table,$userId,$password) {
$result = $conn->query("SELECT * FROM ". $table." WHERE userId='". $userId."' AND password='". $password."'");
 return $result;
 }



 function SearchInstactorByName($conn,$table,$instactorName,$instactorPassword)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE instactorName='". $instactorName."' AND instactorPassword='". $instactorPassword."'");
return $result;
}

function InsertInstactor($conn,$table,$instactorName,$assignCourse,$instactorPassword ) {

     $sql = "INSERT INTO $table (instactorName,assignCourse,instactorPassword ) VALUES ('$instactorName','$assignCourse','$instactorPassword')";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}


function updateCompanyStatus($conn,$table,$companyId,$companyStatus)
 {
     $sql = "UPDATE $table SET companyStatus='$companyStatus' WHERE companyId='$companyId'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

function CheckCategory($conn,$table,$userId,$password) {
$result = $conn->query("SELECT category FROM ". $table." WHERE userId='". $userId."' AND password='". $password."'");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           return $row["category"];
        }
    }
}

function InsertUser($conn,$table,$id,$password,$category)
{
$sql = $conn->query("INSERT INTO $table (userId,password,category) VALUES ('$id','$password','$category')");
    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}
function SearchLernerById($conn,$table,$lernerId)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE lernerId='". $lernerId."'");
return $result;
}

function SearchInstactorById($conn,$table,$instactorId)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE instactorId='". $instactorId."'");
return $result;
}

function SearchCompanyById($conn,$table,$companyId)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE companyId='". $companyId."'");
return $result;
}

function SearchUserPass($conn,$table,$userId)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE userId='". $userId."'");
return $result;
}




function companyValidation($conn,$table,$companyStatus)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE companyStatus='". $companyStatus."'");
return $result;
}


function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM $table");
return $result;
}



 function InsertCourse($conn,$table,$courseTitle,$courseDescription,$courseCategory)
 {
     $sql = "INSERT INTO $table (courseTitle,courseDescription,courseCategory ) VALUES ('$courseTitle','$courseDescription','$courseCategory')";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

 

 function InsertLerner($conn,$table,$username,$password,$email)
 {
$result = $conn->query("INSERT INTO learner( username, password, email) Values ('$username','$password',' $email')");
return $result;
 
 }
 
function CheckUserLernero($conn,$table,$username,$password,$email)
 {
$result = $conn->query("SELECT * FROM  $table WHERE username='$username' AND password='$password' AND email=' $email'");
 return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>