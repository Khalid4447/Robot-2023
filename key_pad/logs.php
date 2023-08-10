<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Press Logs</title>
</head>
<body>
    <h1>Button Press Logs</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Button</th>
            <th>Timestamp</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "new_password_here";
        $dbname = "keypad";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM button_logs ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["button"] . "</td>";
                echo "<td>" . $row["timestamp"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No logs available.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>

