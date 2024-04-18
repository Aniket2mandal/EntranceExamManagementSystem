<?php
include "connection.php";
session_start();
/* $userprofile=$_SESSION['username'];
if($userprofile==true){
}
else{
    header("location:login.php");
} */
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($connection, "UPDATE  `login`set `status`='activate' WHERE `id`='$id'");
    $_SESSION['error']="User activated Sucessfully";
    header("location:userindex.php");
    exit;
}
