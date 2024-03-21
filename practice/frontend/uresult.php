
 <!-- SESSION USING -->
 <?php
session_start();
$userprofile=$_SESSION['username'];
// $output=$_SESSION['output'];
if($userprofile==true){

}
else{
    header("location:login.php");
}
$error=$_SESSION['error'];
// $delete=$_SESSION['delete'];
if($error != true){
    // $_SESSION['routine']="";
    // $_SESSION['result']="";
    // $_SESSION['delete']="";
    $_SESSION['error']="";
}
?>


<html>
    <head>
        <title>
            newind
        </title>
    </head>
    <link rel="stylesheet" href="userindex.css">
    <body>
        <div class="nav"> 
            <!-- <img src="LOGO.png">  -->
            <img class="ig"src="logo.png">
            <ul>
                <li><a href="userindex.php">HOME</a> </li> 
                 <!-- <li><a href="newabout.php">ABOUT</a> </li>  -->
                  <li class="drop">
                    <button class="exambtn">EXAM</button>
                    <div class="exam">
                         <!-- <a href="loksewa.html">LOKSEWA</a> --> 
                         <a href="uIOE.php">IOE</a>
                        <a href="uIOM.php">IOM</a> 
                    </div> 
                </li>
                <li class="drop2">
                    <button class="dropbutton">RESULT</button>
                    <div class="result"> 
                     <!-- <a href="loksewa.html">LOKSEWA</a> -->
                      <a href="uIORE.php">IOE</a>
                        <a href="uIOMRE.php">IOM</a>
                    </div> 
                </li> 

                  <!-- <li><a href="about.php"><img src="profile.png"></a> </li> -->
                <li><a href="userprofile.php"><img src="profile.png"></a></li>
                
            </ul>
        </div>
        <div class="fullbody">
        <div class="admin">
        <h1 style="color:orange">Admin Page</h1></div>

        <marquee behavior="scroll" direction="left" scrollamount="8" >
            <h1>Welcome to the Entrance Exam Management System! Prepare to excel and unlock your potential.<h1>
</marquee>
<!-- FORM -->
<div class="form">
<form action="updateresult.php" method="post"  enctype="multipart/form-data">
<p style="color:green;margin-top:5px;text-align:center;font-weight:bolder;"><?php 
            echo $_SESSION['error']; 
            if($_SESSION['error'] == true){
                $_SESSION['error']="";
            }
            ?></p><br><br>
<select name="Identity" id="identify">
                    <option value="IOM">IOM</option>
                    <option value="IOE">IOE</option>
                </select><br><br>
    Enter the new file of result:<br>
    <input type="file"   name="my_image"><br><br>
    <input type="hidden" name="oldimg" value="<?php echo $images['result'] ?>">
        <!-- TO DELETE IMAGES -->

<div class="deup">
</div> 
<div class="up">
<button type="submit">UPDATE</button>
        </div>    
</form>

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
</div>
    </body>
    
</html>