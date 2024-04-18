
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
    <style>
        /* .html,
body {
    height: 100%;
    width: 100%;
    background-color: rgb(246, 229, 209);
    ;
}

.main {
    height: 100%;
    width: 100%;
    background-color: rgb(246, 229, 209);
    ;
}

.nav h {
    margin-left: 20px;
    margin-top: 15px;
    font-weight: bold;
    color: white;
} */

/* .nav img{
    margin-top:5px;
    margin-left:20px;
    height:50px;
    width:50px;
    aspect-ratio: 1/1;
} */
/* .nav {
    margin-top: -10px;
    margin-left: -20px;
    margin-right:20px;
    background-color: black;
    opacity: 50%;
    height: 60px;
    width: 100%;
    display: flex;
    justify-content: space-between;
}

li {
    margin-top: 5px;
    list-style: none;
    font-weight: bold;
    display: inline-block
} */

/* NAVIGATION BAR ANIMATION STYLING */

/*   
li a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -5px;
    width: 0%;
    height: 2px;
    background-color: yellowgreen;
    transition: 0.5s linear;
  }
  li a:hover {
    color: #fff;
  }
  li a:hover:after {
    width: 100%;
  } */

/* STYLING FOR PROFILE */
/* li img {
    height: 19px;
    width: 19px;
    aspect-ratio: 1/1;
} */

/* BODY PART CSS */
/* .hero {
    background-color: rgb(246, 229, 209);
    height: calc(100% - 60px);
    width: 100%;
    display: flex;
    justify-content: space-between;
} */

/* .hero img {
    margin-bottom: 10px;
    height: 400px;
    width: 400px;
    aspect-ratio: 1/1;
    object-fit: contain;
    mix-blend-mode: multiply;
    margin-right: 40px;
    margin-top: 35px
}

.hero pre {
    font-weight: bold;
    font-family: 'Times New Roman';
    font-size: 35px;
    color: black;
    margin-left: -20px;
    margin-top: 50px;
} */

/* BUTTON STYLING */
/* button {
    background-color: rgb(241, 187, 88);
    border-radius: 6px;
    padding: 8px 22px;
    filter: drop-shadow(0 0 10px black);
} */

/* button a {
    color: white;
    text-decoration: none;
    font-weight: bold;

} */

/* FOOTER STYLING */
/* footer {
    padding: 50px;
    background-color: black;
    opacity: 40%;
} */

/* IMAGE ANIMATION */
/* .mainimage img {
    filter: drop-shadow(0 0 10px orange);
    animation: glow 2s alternate infinite;
}

@keyframes glow {
    0% {
        filter: drop-shadow(0 0 10px orange);
    }

    100% {
        filter: drop-shadow(0 0 10px orange);
    }
} */

/* STYLING FOR LOGIN */
/* .log a{
    text-decoration: none;
   
} */

/* .log button {
    background-color:rgb(241, 187, 88);
    border-radius: 6px;
    padding: 8px 65px;
    margin-top: 20px; */


    /* filter:drop-shadow(0 0 10px black); */
    /* padding-right: 100px; */
/* } */

/* .log button a {
    margin-left: 80%;
    
} */

/* 
.log {
    margin-top: 80px;
    margin-left: 35%;
    align-items: center;
    border-radius: 20px;
    box-sizing: border-box;
    background-color: white;
    width: 300px;
    height: fit-content;
    padding: 20px;
    box-shadow: 0 0 10px black;
}

.log form {
    align-items: center;
    margin-left: 15%;
    
} */

/* .submit{
    background-color:rgb(243, 184, 73);
} */

/* 
.alert a {
    color: green;
    text-decoration: none;
    font-weight: bold;
    margin-top:50px;
    margin-left: 33%;
    margin-top: 60px;
    font-size: 70px;
}
.alert p{
    color:green;
    margin-left:45%;
    font-weight:bold;
} */

/* about.php */
/* .box {
    margin-left:39%;
    box-sizing: border-box;
    background-color: white;
    border-radius: 20px;
    border-color:rgb(241, 187, 88);
    width: 300px;
    height: fit-content;
    padding: 20px;
    box-shadow: 0 0 10px black;
} */
/* .nav li:hover, .dropdown:hover .dropbtn {
    background-color: red;
  } */
  /* STYLING OF LOGO */
  /* .ig{
    height:85px;
    aspect-ratio: 1,1;/* .nav li a:hover{
    background-color: red;
  display: block;
}
li a:hover{
    height:30px;
    transform:scale(1.2);
} */
.html,
body {
    height:100%;
    width: 100%;
    /* background-color: rgb(246, 229, 209); */
    /* background-color: white; */
    font-family: sans-serif;
}
/* LOGO STYLING */
/* .ig{
    height:85px;
    aspect-ratio: 1,1;
    margin-left:25px;
    margin-top:-10px;
} */


.main {
    height: 100%;
    width: 100%;
    /* background-color: rgb(246, 229, 209); */
    /* background-color:white; */
    ;
}

/* .nav h {
    margin-left: 20px;
    margin-top: 15px;
    font-weight: bold;
    color: white;
} */

/* .nav img{
    margin-top:5px;
    margin-left:20px;
    height:50px;
    width:50px;
    aspect-ratio: 1/1;
} */
li img{
    height:23px;
    aspect-ratio: 1,1;
    /* margin-left:25px;
    margin-top:-10px; */
    margin-left:5px;
}
.nav {
    margin-top: -10px;
    margin-left: -20px;
    margin-right:0px;
    background-color: black;
    opacity: 80%;
    height: 70px;
    width: auto;
    display: flex;
    justify-content: space-between;
    gap:8px 30px;
    align-items: center;
}

li {
    margin-top: 5px;
    list-style: none;
    font-weight: bold;
    display: inline-block
}

.nav li a{
        
    margin-right:20px;
    text-decoration: none;
    color:#ffb20b;
    transition: 0.2s;
    font-size: 17px;;
}
/* li a:after{
content:"";
position:absolute;
background-color: rgb(241, 187, 88);
left:0;
width:0%;
height:3px;
transition: 0.2s;
} */
li a:hover{
    color:white;
}
li a:hover:after{
    width:100%;
}


/* BODY PART CSS */
.hero {
    background-color: rgb(246, 229, 209);
    height: calc(100% - 60px);
    width: 100%;
    display: flex;
    justify-content: space-between;
}



/* BUTTON STYLING */
/* button {
    background-color: rgb(241, 187, 88);
    border-radius: 6px;
    padding: 8px 22px;
    filter: drop-shadow(0 0 10px black);
}

button a {
    color: white;
    text-decoration: none;
    font-weight: bold;

} */





/* STYLING FOR LOGIN
.log a{
    text-decoration: none;
   
}

.log button {
    background-color:rgb(241, 187, 88);
    border-radius: 6px;
    padding: 8px 65px;
    margin-top: 20px;


    filter:drop-shadow(0 0 10px black); */
    /* padding-right: 100px;
} */



/* .log {
    margin-top: 80px;
    margin-left: 35%;
    align-items: center;
    border-radius: 20px;
    box-sizing: border-box;
    background-color: white;
    width: 300px;
    height: fit-content;
    padding: 20px;
    box-shadow: 0 0 10px black;
}

.log form {
    align-items: center;
    margin-left: 15%;
    
} */


/* about.php */
/* .box {
    margin-left:39%;
    box-sizing: border-box;
    background-color: white;
    border-radius: 20px;
    border-color:rgb(241, 187, 88);
    width: 300px;
    height: fit-content;
    padding: 20px;
    box-shadow: 0 0 10px black;
} */
/* LOGO STYLING */
.ig{
    height:85px;
    aspect-ratio: 1,1;
    margin-left:25px;
    margin-top:-10px;
}
/* SELECT DROP DOWN STYLING */
/* select{
    margin-right:20px;
    background-color: rgb(241, 187, 88);
    border:0;
} */


/* STYLING OF DROP DOWN */

.drop{
    position: relative;
}
.exam{
    display:none;
    position: absolute;
    min-width: 50px;
    z-index: 1;
}
.exam a{
    background-color: white;
    display:block;
 color:black;
 font-style: bold;
padding-left:15px;
padding-right:15px;
font-family:sans-serif;
}
.drop:hover .exam{
display:block;
     
}
.exam a:hover{
    background-color:black;
}
.drop2{
    position: relative;
}
.result{
    display:none;
    position: absolute;
    min-width: 50px;
    z-index: 1;
}
.result a{
    background-color: white;
    display:block;
 color:black;
 font-style: bold;
padding-left:15px;
padding-right:15px;
font-family:sans-serif;
}
.drop2:hover .result{
display:block;

}
.result a:hover{
    background-color:black;
}
.exambtn{
    border:none;
    background-color: transparent;
    color:white;
    font-weight:bold;
    font-family:sans-serif;
    font-size:medium;
    
}
.dropbutton{
    border:none;
    background-color: transparent;
    color:white;
    font-weight:bold;
    font-family:sans-serif;
    font-size:medium;
    margin-left: 15px;
}
/* STYLING OF FOOTER */
*{
    margin:0;
    box-sizing: border-box;
}
.container{
    max-width: 1170px;
  
    color:white;
    margin:auto;
}
.row{
    display:flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 0px 150px 0px 150px;
}
ul{
    list-style: none;
}
ul li{
    font-size: 12px ;
}
.fdata{
    background-color: black;
    padding:10px 0;
    opacity:90%;
    margin-top:0px;
}
.footer-col{
    width:20%;
    padding:10px 15px;

}
.footer-col h4{
    font-size: 13px;
    color:#ffffff;
    margin-bottom: 20px;
    
}

/* .footer-col h4:before{
    content:"";
    position:absolute;
    background-color: rgb(241, 187, 88);
    left:0;
    bottom:-85px;
    height:2px;
    box-sizing: border-box;
    width: 50px;
} */
.footer-col h4:hover{
    color:#ffb20b;
}

/* STYLLING OF MARQUEE */
marquee{
    margin-top:25px;
    box-sizing: border-box;
    background-color:#ffb20b;
    opacity:55%;
    height:90px;
    
}
marquee h1{
    margin-top:22px;
    color:white;
    font-family: sans-serif;
    
    /* font-weight: bold; */
}
.admin{
    margin-top: 10px;
   font-size: medium; 
   text-align: center;
   font-weight: lighter;
   background-color: white;
}
/* FORM STYLING */

form{
    /* margin-top: 80px;
    /* margin-left: 29%; */
    /* align-items: center; */
    border-radius: 20px;
    /* box-sizing: border-box;
    background-color: white; */
    
    /* width: fit-content;
    height: fit-content;
    padding-top: 20px;
    padding-bottom:20px;
    padding-left:90px;
    padding-right:30px;
    box-shadow: 0 0 10px black; */ 
}
.form{
    align-items: center;
    /* margin-left: 15%;; */
    margin-top: 80px;
    margin-left: 0%;
    /* align-items: center; */
    border-radius: 20px;
    box-sizing: border-box;
    background-color: white;
    
    width: fit-content;
    height: fit-content;
    padding-top: 20px;
    padding-bottom:20px;
    padding-left:90px;
    padding-right:85px;
    box-shadow: 0 0 10px black;
}
.btn1{
  
        /* background-color:rgb(243, 184, 73); */
        background-color:#ffb20b;
       border-radius:6px;
       padding:8px 220px;
       /* filter:drop-shadow(0 0 10px black);  */
       color:white;
       font-weight: bolder;
       border-style: none;
    
}
.btn1:hover{
background-color: lightgray;
color:black;
}
.deup button{
    background-color: red;
    /* background-color:rgb(243, 184, 73); */
    border-radius:6px;
    padding:8px 72px;
    /* filter:drop-shadow(0 0 10px black);  */
    color:white;
    font-weight: bolder;
    border-style: none;
}
.deup a{
    text-decoration:none;
    color:white;
    font-size:14px;
}
.deup button:hover{
    background-color: lightgray;

}
.deup a:hover{
    /* background-color: lightgray; */
color:red;
}
.deup p{
    
    font-weight:bolder
}

.up button{
    background-color: green;
    /* background-color:rgb(243, 184, 73); */
    border-radius:6px;
    padding:8px 72px;
    /* filter:drop-shadow(0 0 10px black);  */
    color:white;
    font-weight: bolder;
    border-style: none;
}
.up a{
    text-decoration:none;
    color:white;
    font-size:14px;
}
.up button:hover{
    background-color: lightgray;

}
.up a:hover{
    /* background-color: lightgray; */
color:green;
}
.deup p{
    
    font-weight:bolder
}

.up p{
    
    font-weight:bolder
}
/* FOR SCROLLING */
.fullbody{
    height:calc(100vh - 70px);
    overflow: scroll;
}
.fullbody::-webkit-scrollbar{
    width:0;
}

/* SIDE NAVIGATION BAR */
body {
    margin: 0;
    font-family: Arial, sans-serif;
  }
.sidenav h1{
    color:white;
    font-size:20px;
    margin-left:30px;
}
  .sidenav {
    height: 1500px;
    width: 180px;;
    position: relative;
    top: 0;
    left: 0;
    background-color: #333;
    padding-top: 20px;
    
      /* margin-top:60px; */
  }
  
  .sidenav ul {
    list-style-type: none;
    padding: 0;
    margin-left: 30px;
  font-size: 30px;
  }
  
  .sidenav ul li {
    padding: 10px;
      margin-top:20px;
      font-weight: bolder;
      font-size: 15px;
  }
  
  .sidenav ul li a {
    color: #fff;
    text-decoration: none;
  }
  
  .sidenav ul li a:hover {
    color: #ffb20b;
  }
  
  /* TABLE STYLING */
  table,th,td{
    border:2px solid black;
    margin-left:35%;
}
th{
    background-color:#ffb90069;
}
tr{
    background-color:#ffb90069
}
.btn{
    background-color:red;
    padding-left:20px;
    padding-right:20px;
    border-radius:3px;
}
.btn2{
    background-color:green;
    padding-left:20px;
    padding-right:20px;
    border-radius:3px;
}
 a{
    text-decoration:none;
     font-family:sans-serif;
     color:white;
}
.btn:hover{
    background-color:lightgray;
    color:black;
}
.btn2:hover{
    background-color:lightgray;
    color:black;
}
.mainbody{
display: flex;
}
.maincontent{
    /* margin-left:-300px; */

    margin-left:100px;
    margin-top:-10px;
} 
    </style>
    <link rel="stylesheet" href="style.css">
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
<div class="mainbody">
            <!-- SIDE NAVIGATION BAR -->
            <div class="sidenav">
            <h1> ADMIN </h1>
    <ul>
      <li><a href="userindex.php">Dashboard</a></li>
      <li><a href="addroutine.php">Add Routine</a></li>
      <li><a href="addresult.php">Add Result</a></li>
      <li class="drop">
                    <button class="exambtn">Delete</button>
                    <div class="exam">
                         <!-- <a href="loksewa.html">LOKSEWA</a> --> 
                         <a href="deleteioe.php" style="background-color:black;">IOE</a>
                        <a href="deleteiom.php" style="background-color:black;">IOM</a> 
                    </div> 
                </li>
                <li><a href="updatepage.php">Update</a></li>  
                <li><a href="addquestion.php">Add Question</a></li>
    </ul>
  </div>

<div class="maincontent">
        <div class="admin">
        <h1 style="color:orange">Admin Page</h1></div>

        <!-- <marquee behavior="scroll" direction="left" scrollamount="8" >
            <h1>Welcome to the Entrance Exam Management System! Prepare to excel and unlock your potential.<h1>
</marquee> -->
<!-- FORM -->
<div class="form">
 <!-- <form action="upload.php" method="post"  enctype="multipart/form-data"> -->
 <!-- to show output info -->

 <p style="color:green;margin-top:5px;text-align:center;font-weight:bolder;"><?php 
            echo $_SESSION['error']; 
            if($_SESSION['error'] == true){
                $_SESSION['error']="";
            }
            ?></p><br><br>

<!-- <select name="Identity" id="identify">
                    <option value="IOM">IOM</option>
                    <option value="IOE">IOE</option>
                </select><br><br>
    Enter the file of routine:<br>

    <input type="file"   name="my_image"><br><br>
   
    <button type="submit" class=btn1>ADD ROUTINE</button><br><br>
</form> -->

<!-- <form action="uploadre.php" method="post"  enctype="multipart/form-data">
<select name="Identity" id="identify">
                    <option value="IOM">IOM</option>
                    <option value="IOE">IOE</option>
                </select><br><br>
    Enter the file of result:<br>
    <input type="file"   name="resu"><br><br>
    
    
    <button type="submit" class=btn1>ADD RESULT</button><br><br>
</form> -->

<!-- <form action="uploadque.php" method="post"  enctype="multipart/form-data">
<select name="Identity" id="identify">
                    <option value="IOM">IOM</option>
                    <option value="IOE">IOE</option>
                </select><br><br>
    Enter the file of Question:<br>
    <input type="file"   name="ques"><br><br>
   
    <button type="submit" class=btn1>ADD QUESTION</button><br><br>
</form> -->
        <!-- TO DELETE IMAGES -->
       <!-- <div class="deup">
        <p>Delete Routine And Result Of IOE Branch</p><br>
    <a href="deleteroutioe.php"><button >DELETE ROUTINE</button></a>
    <a href="deleteresuioe.php"><button >DELETE RESULT</button></a><br><br>
</div>  -->
<!-- <div class="up">
<button ><a href="uroutine.php">UPDATE ROUTINE</a></button>    
<button  ><a href="uresult.php">UPDATE RESULT</a></button>
</div><br><br> -->
<div class="deup">
        <p>Delete Routine And Result Of IOM Branch</p><br>
    <a href="deleteroutiom.php"><button >DELETE ROUTINE</button></a>
   <a href="deleteresuiom.php"> <button >DELETE RESULT</button></a><br><br>
</div> 

</div>
</div>
<!-- <div class="up">
<p>Update Routine And Result Of IOE/IOM Branch</p><br>
<a href="uroutine.php"><button >UPDATE ROUTINE</button></a>    
<a href="uresult.php"><button  >UPDATE RESULT</button></a>
</div> -->
<!-- </form>  -->

 </div> 
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