<?php
session_start();
$userprofile=$_SESSION['username'];
if($userprofile==true){
}
else{
    header("location:login.php");
}
include "connection.php";
$sql=mysqli_query($connection,"DELETE  FROM `ioer` WHERE `identity`='IOE'");
if($sql == true){
    
    $_SESSION['error']="Result deleted";
header("location:userindex.php");

}
?>