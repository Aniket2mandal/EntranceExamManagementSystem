<?php
$fname=$_POST['nam'];
$lname=$_POST['lnam'];
$email=$_POST['emii'];
// $passw=$_POST['psw'];
echo $fname,$lname,$email;
if($fname !=""){
include "connection.php";
session_start();
$userprofile=$_SESSION['username'];
echo $userprofile;
$sql=mysqli_query($connection,"UPDATE  `login` set `firstname`='$fname',`lastname`='$lname',`email`='$email' WHERE `email`='$userprofile'");

header("location:login.php");
}
?>