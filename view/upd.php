<h1><p style="color:blue">SKILL-SHARE</p></h1>
<h2>update-profile</h2> 
<?php
include('updateprofile.php');
$isPost=false;
$username="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	
}
?>
<form action="#" method="post">
Name:<input type="text" id="name" name="name">
<?php
if($isPost==true && $Name=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br>
<form action="#" method="post">
Occupasion:<input type="text" id="Occupasion" name="Occupasion">
<?php
if($isPost==true && $Occupasion=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br>

<form action="#" method="post">
Nationality:<input type="text" id="Nationality" name="Nationality">
<?php
if($isPost==true && $Nationality=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br>

<form action="#" method="post">
Email:<input type="text" id="Email" name="Email">
<?php
if($isPost==true && $Email=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br>

<form action="#" method="post">
Religion:<input type="text" id="Religion" name="Religion">
<?php
if($isPost==true && $Religion=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br>
<input type="submit" value="submit" name="submit">
<?php
if (isset($_POST['submit']))
{
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->updateAdminInfo($conobj,"adminprf",$_REQUEST["name"],$_REQUEST["Occupasion"],$_REQUEST["Nationality"],$_REQUEST["Religion"],$_REQUEST["Email"]);

    if($userQuery)
    {
        echo "update Successful.";
    }
    else
    {
        echo "Failed. Please try again ";
    }
}
 
?>
</form>
<form method="get" action="Adminprofile.php">
    <button type="submit">Go Back</button>
</form>