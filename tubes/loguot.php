<?php
session_start(); // Mulai sesi

// Hapus semua variabel sesi
$_SESSION = array();

// Jika Anda ingin menghancurkan sesi sama sekali, hapus juga cookie sesi
// Catatan: Ini akan menghancurkan sesi dan tidak hanya data sesi!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Akhir sesi
session_destroy();

// Arahkan pengguna ke halaman login atau halaman lainnya
header("Location: login.php");
exit;

?>
