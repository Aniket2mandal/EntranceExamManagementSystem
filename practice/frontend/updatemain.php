<?php
session_start();
$userprofile=$_SESSION['username'];
$firstname=$_SESSION['firstname'];
$lastname=$_SESSION['lastname'];
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
<link rel="stylesheet" href="update.css">

<body>
    <div class="main">
        <div class="nav">
            <!-- <img src="LOGO.png"> -->
            <img class="ig"src="logo.png">
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
                <li><a href="profile.php"><img src="profile.png"></a> </li>
            </ul>
        </div>
        <hr>
        <div class="log">
           <form action="update.php" method="post">
           <div class="reg"><p>UPDATE</p></div><br>
            <!-- Firstname: -->
            <input type="text"required id="fnam" required name="nam" value="<?php echo $firstname ?>"><br><br>
            <!-- Lastname: -->
            <input type="text" required id="lname" required name="lnam" value="<?php echo $lastname ?>"><br><br>
            <!-- Email:<br> -->
            <input type="email" required id="emai" required name="emii" value="<?php echo $userprofile ?>" ><br><br>
            <!-- Password:<br>
            <input type="password" required id="pasw" required name="psw" placeholder="password"><br><br>

     -->
            <!-- <input type="radio"><a href="forgot.html">Forgot password?</a><br><br> -->
            <button type="submit" name="submit"><a href="update.php">UPDATE</a></button>
            
           </form> 

        </div>
        

        
    </div>
    
</body>
<footer class="fdata">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>CONTACT</h4>
                <ul>
                    <li>Phone   :9824790012</li>
                    <li>Email   :aniketmandal778@gmail.com</li>
                    <li>Webiste :www.EEMS.com</li>
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
</html>