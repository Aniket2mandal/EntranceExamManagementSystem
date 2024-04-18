<!-- <html>

<head>
    <title>
        project
    </title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <div class="main">
        <div class="nav">
          
            <h>LOGO</h>
            <ul>
                <li><a href="index.html">HOME</a> </li>
                <li><a href="contact.html">CONTACT</a> </li>
                <li><a href="exam.html">EXAM</a> </li>
                <li><a href="result.html">RESULT</a> </li>
                <li><a href="about.php"><img src="profile.png"></a> </li>
            </ul>
            
        </div>
        <hr>
    
        <div class="box"> -->
        <?php
        session_start();
        // include "register.php";
        include "connection.php";
  
$fname=$_POST['fnam'];
$lname=$_POST['lnam'];
$user=$_POST['emai'];
$pass=md5($_POST['pass']);
$cpass=md5($_POST['pword']);
$identify=($_POST['Identity']);

include "connection.php";
$val="^\w+@[az-zA-Z_]+?\.[az-zA-Z]{2,3}$";
if($pass==$cpass ){
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $sql=mysqli_query($connection,"INSERT INTO `login`(`firstname`,`lastname`,`email`,`passwo`,`identification`) VALUES ('$fname','$lname','$user', '$pass','$identify')");
    $_SESSION['error']="User Created Sucessfully";
    header("location:userindex.php");

}
else{
    $_SESSION['error']="Unable to Create User";
   header("location:adduser.php");
}
   
  ?>
