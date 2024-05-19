<?php
// Establish the database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myhome_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the ID parameter is set in the URL
if(isset($_GET['id'])) {
    $userID = $_GET['id'];

    // Update the record in the database to mark it as accepted
    $sql = "UPDATE contractors SET accepted = 1 WHERE id = $userID";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin_area.php");
    } else {
        echo "Error accepting record: " . $conn->error;
    }
} else {
    echo "No user ID provided";
}

// Close the database connection
$conn->close();
?>