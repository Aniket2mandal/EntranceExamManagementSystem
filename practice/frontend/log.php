<?php
$use=($_POST['num']);
$pas=md5($_POST['pss']);
// SESSION USE
session_start();

include "connection.php";
echo "<br>";
 $val="^\w+@[az-zA-Z_]+?\.[az-zA-Z]{2,3}$";
$con=mysqli_query($connection,"SELECT `passwo` from `login` where `email` ='$use'");
$iden=mysqli_query($connection,"SELECT `identification` from `login` where `email` ='$use'");
$rataa=implode(mysqli_fetch_assoc($iden));
$row=mysqli_num_rows($con);
if($row>0 && $rataa == "Admin"){
    $_SESSION['username']=$use;
    header("location:userindex.php");

}
else if($row>0){
    $rata=implode(mysqli_fetch_assoc($con));
   if($rata == $pas){
  $_SESSION['username']=$use;
     header("location:newindex.php");

    // FETCHING FIRSTNAME FROM DATABASE
$fet=mysqli_query($connection,"SELECT `firstname` from `login` where `email`='$use'");
$clmm=mysqli_num_rows($fet);
if($clmm>0){
    $firnam=implode(mysqli_fetch_assoc($fet));
    $firstname=$_SESSION['firstname']=$firnam;
}

// FETCHING LASTNAME FROM DATABASE
$fetl=mysqli_query($connection,"SELECT `lastname` from `login` where `email`='$use'");
$clm=mysqli_num_rows($fetl);
if($clm>0){
    $lanam=implode(mysqli_fetch_assoc($fetl));
   $lastname= $_SESSION['lastname']=$lanam;
}
   }
   
   else{
    header("location:login.php");
   }
    
 }
?>