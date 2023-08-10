<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $button = $_POST["button"];
    
    $servername = "localhost";
    $username = "root";
    $password = "new_password_here";
    $dbname = "keypad";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO button_logs (button) VALUES ('$button')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Button press logged successfully.";
    } else {
        echo "Error logging button press: " . $conn->error;
    }
    
    $conn->close();
} else {
    echo "Invalid request.";
}
?>

