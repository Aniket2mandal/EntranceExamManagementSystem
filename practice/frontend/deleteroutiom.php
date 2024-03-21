<?php
session_start();
$userprofile=$_SESSION['username'];
if($userprofile==true){
}
else{
    header("location:login.php");
}
include "connection.php";
$sql=mysqli_query($connection,"DELETE  FROM `ioe` WHERE `identity`='IOM'");
if($sql == true){
    
    $_SESSION['error']="Routine deleted";
header("location:userindex.php");

}
?>