<?php
session_start();
$userprofile=$_SESSION['username'];
if($userprofile==true){
}
else{
    header("location:login.php");
}
include "connection.php";
$sql=mysqli_query($connection,"DELETE  FROM `login` WHERE `email`='$userprofile'");
header("location:index.html");
?>