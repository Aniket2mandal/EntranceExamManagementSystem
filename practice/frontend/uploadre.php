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
	$img_name1=$_FILES['resu']['name'];
	// $img_size = $_FILES['my_image']['size'];
	$img_size1 = $_FILES['resu']['size'];
	// $tmp_name = $_FILES['my_image']['tmp_name'];
	$tmp_name1 = $_FILES['resu']['tmp_name'];
	$error = $_FILES['resu']['error'];

	// if ($error === 0) {
	// 	if ($img_size > 12500000) {
	// 		$em = "Sorry, your file is too large.";
	// 	    header("Location: userindex.php?error=$em");
	// 	}else {
		
			// $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			// $img_ex_lc = strtolower($img_ex);

			if($img_name1 == true){
			$img_exx = pathinfo($img_name1, PATHINFO_EXTENSION);
			$img_ex_lcc = strtolower($img_exx);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lcc, $allowed_exs)) {
				// $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$new_img_namee = uniqid("IMG-", true).'.'.$img_ex_lcc;
				// $img_upload_path = 'uploads/'.$new_img_name;
				$img_upload_path1 = 'uploads/'.$new_img_namee;
				// move_uploaded_file($tmp_name, $img_upload_path);
				move_uploaded_file($tmp_name1, $img_upload_path1);

				// Insert into Database
				// $sql = "INSERT INTO `ioe`(`identity`,`routine`) 
				//         VALUES('$identity','$new_img_name')";
				// mysqli_query($connection, $sql);
				// FOR RESULT
				$sqll = "INSERT INTO `ioer`(`identity`,`result`) 
				        VALUES('$identity','$new_img_namee')";
				mysqli_query($connection, $sqll);
				
				session_start();
                $_SESSION['error']="Result stored sucessfully";
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