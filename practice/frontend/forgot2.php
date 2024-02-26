<?php

$user=($_POST['mai']);
$passwo=md5($_POST['pass']);
$cpasswo=md5($_POST['pword']);

// echo $user,$passwo,$cpasswo;
if ($passwo == $cpasswo){
include "connection.php";
$sql=mysqli_query($connection,"SELECT `email` from `login` where `email`='$user'");
$row=mysqli_num_rows($sql);
if($row>0){
    $rata=implode(mysqli_fetch_assoc($sql));
    // echo $rata;
    if($rata == $user){
  
        $upd=mysqli_query($connection,"UPDATE `login` set passwo='$passwo' where email='$user'");
       header("location:login.php");
    }
        else{
            // echo '<script>alert("")</script>';
            header("location:forgot.php");
        } 
    }
}
    else{
        header("location:forgot.php");
        }
    
    
?>