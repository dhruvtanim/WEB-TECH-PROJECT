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

$conn = new mysqli($servername, $name,$Occupasion,$Nationality,$Email,$Religion);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE $table SET Name=$Name,Occupasion=$Occupasion,Nationality=$Nationality,Email=$Email,Religion=$Religion WHERE id=1";

if ($conn->query($sql) === TRUE) {
    $result= TRUE;
} else {
    $result= FALSE ;
}
return  $result;
}

$conn->close();

?>
    

