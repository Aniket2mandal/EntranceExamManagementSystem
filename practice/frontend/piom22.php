
 <!-- SESSION USING -->
 <?php
session_start();
$userprofile=$_SESSION['username'];
if($userprofile==true){

}
else{
    header("location:login.php");
}
?>


<html>
    <head>
        <title>
            newind
        </title>
    </head>
    <style>
         .content2 {
        display: flex;
        justify-content: space-between;
        font-weight: lighter;
        font-size: large;
        font-family: sans-serif;
        margin-top: 80px;
    }

    .content2 p {
        box-sizing: border-box;
        background-color: lightgray;
        width: fit-content;
        height: fit-content;
        margin-right: 10px;
        margin-left:6px;
        /* padding-left: 5px;
            padding-right: 5px; */
        padding: 6px;
        text-align: justify;
        
    }
     /* h1{
    font-family: sans-serif;
    font-size: large;
    margin-top:100px;
   } */
    .content2 img {
        border-radius: 10px;
        margin-left:-10px;
    }
    .content h2{
        text-align: center;
    }
    </style>

    <link rel="stylesheet" href="newind.css">
    <body>
        <div class="nav">
            <!-- <img src="LOGO.png"> -->
           <img class="ig"src="logo.png">
            <ul>
                <li><a href="newindex.php">HOME</a> </li>
                <li><a href="newabout.php">ABOUT</a> </li>
                 <li class="drop">
                    <button class="exambtn"style="color:#ffb202;">ROUTINE</button>
                    <div class="exam">
                        <!-- <a href="loksewa.html">LOKSEWA</a> -->
                        <a href="IOE.php">IOE</a>
                        <a href="IOM.php">IOM</a>
                    </div> 
                </li>
                <li class="drop2">
                    <button class="dropbutton"style="color:#ffb202;">RESULT</button>
                    <div class="result">
                     <!-- <a href="loksewa.html">LOKSEWA</a> -->
                     <a href="IOERE.php">IOE</a>
                        <a href="IOMRE.php">IOM</a>
                    </div> 
                </li>

                  <!-- <li><a href="about.php"><img src="profile.png"></a> </li> -->
                <li><a href="profile.php"><img src="profile.png"></a></li>
                
            </ul>
        </div>
        <div class="fullbody">
       
        <marquee behavior="scroll" direction="left" scrollamount="10">
            <h1>Welcome to the Entrance Exam Management System! Prepare to excel and unlock your potential. Good luck to all candidates!<h1>
</marquee><br><br>

<div class="content">
<h2>Try Our Features</h2>

<div class="content2">
<img src="aboutpage2.jpg"style="height:215px;width:350px;margin-left:30px;">
<p>
Welcome to our Entrance Exam Results and Past Questions Portal! 
Instantly access your IOE and IOM entrance exam results with 
ease and delve into detailed performance analysis to identify
strengths and areas for improvement. Explore our extensive 
archive of past exam results spanning multiple years, and prepare
for upcoming exams with our interactive repository of past 
questions. Customize your search experience with tailored exam 
filters and navigate seamlessly through our user-friendly 
interface. Rest assured, your data is safe and confidential with
our robust security measures. Whether you're a student tracking
progress or an educator analyzing trends, our platform is your 
ultimate companion for exam preparation and performance evaluation.
Start exploring today and unlock a world of possibilities!
</p>
</div>
</div>

<?php 
include "connection.php";
          $sql = "SELECT `question` FROM `question` where `identity`='IOM' AND `year`=2022";
          $res = mysqli_query($connection,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
              <div class="alb">
           	<img src="uploads/<?php echo $images['question']?>"> 
           </div>  		
    <?php } }?>


<div class="content">


<div class="content2">

<p>
Welcome to our Entrance Exam Results and Past Questions Portal! 
Instantly access your IOE and IOM entrance exam results with 
ease and delve into detailed performance analysis to identify
strengths and areas for improvement. Explore our extensive 
archive of past exam results spanning multiple years, and prepare
for upcoming exams with our interactive repository of past 
questions. Customize your search experience with tailored exam 
filters and navigate seamlessly through our user-friendly 
interface. Rest assured, your data is safe and confidential with
our robust security measures. Whether you're a student tracking
progress or an educator analyzing trends, our platform is your 
ultimate companion for exam preparation and performance evaluation.
Start exploring today and unlock a world of possibilities!
</p>
<img src="newaboutus1.jpg"style="height:215px;width:350px;margin-left:30px;">
</div>
</div>






<!-- CODE FOR MOCK TEST BUTTON -->
<!-- <div class="button">
<a href="mockioe.php"><button type="submit">MOCK TEST IOE</button></a>
<a href="mockiom.php"><button type="submit">MOCK TEST IOM</button></a>
</div>
<div class="data">

<h1>CONTENT HERE</h1>
<div> -->
<footer class="fdata">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>CONTACT</h4>
                    <ul>
                        <li>Phone  :9824790012</li>
                        <li><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox">Email  :aniketmandal778@gmail.com</a></li>
                        <li>Webiste:www.EEMS.com</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>FOLLOW US</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/aniket.mandal.9235199">Facebook  :EEMS page</a></li>
                        <li>Instagram :EEMS page</li>
                        <li><a href="https://www.linkedin.com/in/aniket-mandal-09227a238/">LinkedIn  :EEMS</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>GET HELP</h4>
                    <ul>
                        <li>www.EEMS.com</li>
                        <li>message</li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
        </footer>
</div>
    </body>
    
</html>