<?php 
// session_start();
// if (isset($_POST['submit']) && isset($_FILES['my_image']) && isset($_POST['identity']) ) {
	include "connection.php";
// echo("hello guys");
// 	echo "<pre>";
// 	print_r($_FILES['my_image']);
// 	echo "</pre>";
    $identity=$_POST['Identity'];
    $oldimage=$_POST['oldimg'];
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

if($oldimage == true && $identity == true){
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				
                $sql="UPDATE ioer SET `result`='$new_img_name' WHERE `identity`='$identity'";
				mysqli_query($connection, $sql);
                if($img_name !==''){
                    move_uploaded_file($tmp_name,'uploads/'.$new_img_name);
                    unlink('uploads/'.$oldimage);
                }
				session_start();
                $_SESSION['error']="Result Updated Sucessfully";
				header("location:userindex.php");
			}
		}
		else{
			session_start();
			$_SESSION['error']="Select the file";
			header("location:uroutine.php");
		}
			// else {
			// 	$em = "You can't upload files of this type";
		    //     header("Location: userindex.php?error=$em");
			// }
		// }
	 //}
	// else {
	// 	$em = "unknown error occurred!";
	// 	header("Location: userindex.php?error=$em");
	// }

//}
// else {
// 	header("Location: userindex.php");
// }
?>