<?php
include('../model/Admin/db.php');
session_start(); 

$error="";
$validateUserid="";
$validatepass="";
if (isset($_POST['logIn'])) {

    $userId=$password="";

    if(empty($_POST['userId']))
    {
       $validateUserid = "Please enter your userId";
    }
    else
    {
       $userId=$_POST['userId'];
    }
    if(empty($_POST['password']))
    {
       $validatepass = "Please enter your password"; 
    }
    else
    {
        $password=$_POST['password']; 
    }

    if($userId=="" || $password=="")
    {
        echo "Error occur please try again";
    }
    else
    {
            $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->CheckUser($conobj,"user",$userId,$password);
    $category=$connection->CheckCategory($conobj,"user",$userId,$password);

        if ($userQuery->num_rows > 0) {
        $_SESSION["userId"] = $userId;
        $_SESSION["password"] = $password;
        $_SESSION["category"] = $category;
        $cookie_name=$_SESSION["userId"];
        $cookies_value=$_SESSION["category"];
        setcookie($cookie_name,$cookies_value, time() + (86400), "/");
        }
        else {
        $error = "UserId or Password is invalid";
        }

    $connection->CloseCon($conobj);
    }



}


?>
