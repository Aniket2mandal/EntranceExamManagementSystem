 <!-- SESSION USING -->

<html>
<head>
    <title>
        profile
</title>
</head>
<link rel="stylesheet" href="profile.css">
<body>
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
                        <!-- <a href="ioe.html">IOE</a>
                        <a href="iom.html">IOM</a> -->
                    </div> 
                </li>
                <li class="drop2">
                    <button class="dropbutton">RESULT</button>
                    <div class="result">
                        <a href="loksewa.html">LOKSEWA</a>
                        <!-- <a href="ioe.html">IOE</a>
                        <a href="iom.html">IOM</a> -->
                    </div> 
                </li>

                  <!-- <li><a href="about.php"><img src="profile.png"></a> </li> -->
                <li><a href="profile.php"><img src="profile.png"></a></li>
                
               
            </ul>
            
        </div>
         <div class="tabledata">
            <div class="image">
         <?php
     session_start();
         include "connection.php";
        //  $userprofile=$_SESSION['username'];
        //    $con=mysqli_query($connection,"SELECT `image` from `login` WHERE `email`= '$userprofile'");
        //    $rows=mysqli_num_rows($con);
        //    if($rows>0){
        //     $rata=(mysqli_fetch_assoc($con));
          
        //     echo "<img src='data:image;base64,".base64_encode($rata["image"])."' style='height:100px;width:100px;margin-left:80px;'>";
        //    }
           echo "<img src='profile.jpg'"."' style='height:95px;width:100px;margin-left:80px;margin-top:5px;'>"."<br>";
           ?>
           </div>
           <!-- TABLE DATA -->
        <table class=center>
            <tr>
           <td>Name:-</td>
           <td><?php
        //    include "connection.php";
           $userprofile=$_SESSION['username'];
if($userprofile==true){

}
else{
    header("location:login.php");
} 
           $userprofile=$_SESSION['username'];
           $con=mysqli_query($connection,"SELECT `firstname`,`lastname` from `login` WHERE `email`= '$userprofile'");
           $rows=mysqli_num_rows($con);
           if($rows>0){
           
            $rata=implode(mysqli_fetch_assoc($con));
            echo $rata;
           }
           ?>
           </td>    
          
</tr><br>
<tr>
    <td>Email:-</td>
    <td>
    <?php
           $con=mysqli_query($connection,"SELECT `email` from `login` WHERE `email`= '$userprofile'");
           $rows=mysqli_num_rows($con);
           if($rows>0){
            $rata=implode(mysqli_fetch_assoc($con));
            echo $rata;
           }
           ?>
    </td>
</tr>


</table><br>
<div>
<button class="logout"><a href="logout.php">LOGOUT</button><br>
<button class="logout"><a href="updatemain.php">UPDATE</button><br>
<button class="logout"><a href="deleteacc.php">DELETE!</button><br>
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
