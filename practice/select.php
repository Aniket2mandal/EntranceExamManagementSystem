<?php
// Establish connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "class";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve selected value from the form
$selected_value = $_POST['selected_value'];

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO loginn (`identification`) VALUES ('$selected_value')";

if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
