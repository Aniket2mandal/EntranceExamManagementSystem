<?php
session_start();
$userprofile=$_SESSION['username'];
if($userprofile == true){
}
else{
    header("location:login.php");
}
?>
<html>

<head>
    <title>
        project
    </title>
</head>

<link rel="stylesheet" href="about.css">

<body>
    <div class="main">
        <div class="nav">
            <!-- <img src="LOGO.png"> -->
            <img class="ig" src="logo.png">
            <ul>
                <li><a href="newindex.php">HOME</a> </li>
                <li><a href="newabout.php">ABOUT</a> </li>
                <li class="drop">
                    <button class="exambtn">EXAM</button>
                    <div class="exam">
                        <a href="loksewa.html">LOKSEWA</a>
                        <a href="ioe.html">IOE</a>
                        <a href="iom.html">IOM</a>
                    </div> 
                </li>
                <li class="drop2">
                    <button class="dropbutton">RESULT</button>
                    <div class="result">
                        <a href="loksewa.html">LOKSEWA</a>
                        <a href="ioe.html">IOE</a>
                        <a href="iom.html">IOM</a>
                    </div> 
                </li>
                <li><a href="profile.php"><img src="profile.png"></a></li>
            </ul>
        </div>
        <hr>
        <div class="hero">
      <img src="exam.jpg">
      <pre class="p1"><i>
        Welcome to the Entrance Exam Management System! We are here to make your exam 
        journey smoother. Our platform allows you to easily access your exam results and 
        upcoming routines. With just a few clicks, you can stay updated on your academic
        progress and plan your study schedule effectively. As Helen Keller once said, "The only 
        thing worse than being blind is having sight but no vision." We believe in providing 
        clear vision to your academic goals. Developed by Aniket Mandal and Sachin Khadka,
        our system is designed to be user-friendly and efficient, ensuring a seamless
        experience for all users. Join us on this journey towards academic success!</i></pre>
        </div>

    </div>
    <footer class="fdata">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>CONTACT</h4>
                    <ul>
                        <li>Phone  :9824790012</li>
                        <li>Email  :aniketmandal778@gmail.com</li>
                        <li>Webiste:www.EEMS.com</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>FOLLOW US</h4>
                    <ul>
                        <li>Facebook  :EEMS page</li>
                        <li>Instagram :EEMS page</li>
                        <li>LinkedIn  :EEMS</li>
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

</body>


</html>