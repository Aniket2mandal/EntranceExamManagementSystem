<?php 
// session_start();
// if (isset($_POST['submit']) && isset($_FILES['my_image']) && isset($_POST['identity']) ) {
	include "connection.php";
// echo("hello guys");
// 	echo "<pre>";
// 	print_r($_FILES['my_image']);
// 	echo "</pre>";
   $year=$_POST['year'];
    $identity=$_POST['Identity'];
	


				$sqll = "DELETE FROM `question` WHERE `year`='$year' AND `identity`='$identity'";
				mysqli_query($connection, $sqll);
				if($sqll==true){
				session_start();
                $_SESSION['error']="Question Deleted Sucessfully";
				
				header("location:userindex.php");
                }
		else{
			session_start();
			$_SESSION['error']="Select the file";
			header("location:addquestion.php");
		}
			
?>