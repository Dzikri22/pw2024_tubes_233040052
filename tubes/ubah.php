<!DOCTYPE html>
<html>
<head>
    <title>ubah user</title>
</head>
<body>
    <h2>ubah gambar</h2>
    <form action="update.php" method="post">
        <label for="id">nama:</label>
        <input type="text" id="id" name="id" required><br><br>
        
        <label for="username">potongan</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">harga:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Update">
    </form>
</body>
</html>




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pw2023_tubes_233040052";

// Membuat koneksi
$conn = new mysqli($username, $username, $password, $pw2024_tubes_233040052);

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
        echo "Update successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

