<?php 
// session_start();
// if (isset($_POST['submit']) && isset($_FILES['my_image']) && isset($_POST['identity']) ) {
	include "connection.php";
// echo("hello guys");
// 	echo "<pre>";
// 	print_r($_FILES['my_image']);
// 	echo "</pre>";
    $identity=$_POST['Identity'];
	// $img_name = $_FILES['my_image']['name'];
	$img_name2=$_FILES['ques']['name'];
	// $img_size = $_FILES['my_image']['size'];
	$img_size2 = $_FILES['ques']['size'];
	// $tmp_name = $_FILES['my_image']['tmp_name'];
	$tmp_name2 = $_FILES['ques']['tmp_name'];
	$error = $_FILES['ques']['error'];

	// if ($error === 0) {
	// 	if ($img_size > 12500000) {
	// 		$em = "Sorry, your file is too large.";
	// 	    header("Location: userindex.php?error=$em");
	// 	}else {
		
			// $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			// $img_ex_lc = strtolower($img_ex);
if($img_name2 == true){
			$img_exxx = pathinfo($img_name2, PATHINFO_EXTENSION);
			$img_ex_lccc = strtolower($img_exxx);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lccc, $allowed_exs)) {
				// $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$new_img_nameee = uniqid("IMG-", true).'.'.$img_ex_lccc;
				// $img_upload_path = 'uploads/'.$new_img_name;
				$img_upload_path2 = 'uploads/'.$new_img_nameee;
				// move_uploaded_file($tmp_name, $img_upload_path);
				move_uploaded_file($tmp_name2, $img_upload_path2);

				// Insert into Database
				// $sql = "INSERT INTO `ioe`(`identity`,`routine`) 
				//         VALUES('$identity','$new_img_name')";
				// mysqli_query($connection, $sql);
				// FOR RESULT
				$sqll = "INSERT INTO `question`(`identity`,`question`) 
				        VALUES('$identity','$new_img_nameee')";
				mysqli_query($connection, $sqll);
				
				session_start();
                $_SESSION['error']="Question stored sucessfully";
				
				header("location:userindex.php");
			}
		
		}
		else{
			session_start();
			$_SESSION['error']="Select the file";
			header("location:userindex.php");
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