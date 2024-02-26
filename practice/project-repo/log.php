<?php
$sucess="";
$use=($_POST['num']);
$pas=($_POST['pss']);
// SESSION USE
session_start();

include "connection.php";
echo "<br>";
 $val="^\w+@[az-zA-Z_]+?\.[az-zA-Z]{2,3}$";
//$con=mysqli_query("SELECT passwo from `login`");
// if($use == $val){
$con=mysqli_query($connection,"SELECT `passwo` from `login` where `email` ='$use'");
$row=mysqli_num_rows($con);
if($row>0){
    $rata=implode(mysqli_fetch_assoc($con));

   if($rata == $pas){
    // SESSION USING
    // $sucess="Incorrect";
    // $_SESSION['e_name']=$sucess;
  $_SESSION['username']=$use;
    header("location:newindex.php");
   
   }
   else{

    header("location:login.php");
   }
    
}
$conn=mysqli_query($connection,"SELECT `email` from `login` where `email` ='$use'");
$rows=mysqli_num_rows($conn);
if($row>0){
  
}
else{

  header("location:login.php");

}

?>