<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="edit.php" method="post">
        <label for="id">User ID:</label>
        <input type="text" id="id" name="id" required><br><br>
        
        <label for="username">New Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">New Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Edit">
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
    $newUsername = $_POST['username'];
    $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    $sql = "UPDATE users SET username=?, password=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $newUsername, $newPassword, $id);

    if ($stmt->execute()) {
        echo "Edit successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
