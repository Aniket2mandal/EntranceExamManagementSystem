<?php
if(isset($_POST["submit"])) {
    // Check if file was uploaded without errors
    if(isset($_FILES["fileToConvert"]) && $_FILES["fileToConvert"]["error"] == 0) {
        $target_file = "uploads/" . basename($_FILES["fileToConvert"]["name"]);
        
        // Move uploaded file to specified location
        // if(move_uploaded_file($_FILES["fileToConvert"]["tmp_name"], $target_file)) {
            // Convert the uploaded file to an image (you'll need the appropriate libraries installed on your server)
            $image = imagecreatefromstring(file_get_contents($target_file));
            
            // Save the image to a specified location
            $output_file = "output.jpg";
            imagejpeg($image, $output_file);
            
            // Display a message to the user
            echo "File converted successfully. <a href='$output_file'>Download Image</a>";
            
            // Free up memory
            imagedestroy($image);
    //      else {
    //         echo "Error uploading file.";
    //     }
    // } else {
    //     echo "Invalid file upload.";
    // }
}
}
?>
