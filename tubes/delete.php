<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
</head>
<body>
    <h2>Delete User</h2>
    <form action="delete.php" method="post">
        <label for="id">User ID:</label>
        <input type="text" id="id" name="id" required><br><br>
        
        <input type="submit" value="Delete">
    </form>
</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pw2024_tubes_233040052";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Delete successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
