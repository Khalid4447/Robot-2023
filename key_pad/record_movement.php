<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movement_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $direction = $_POST["direction"];
    $length = intval($_POST["length"]);

    // Insert the movement into the database
    $sql = "INSERT INTO movement_records (direction, length) VALUES ('$direction', $length)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Movement recorded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

