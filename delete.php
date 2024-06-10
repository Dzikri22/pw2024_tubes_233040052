<?php
ob_start(); 
session_start();

       if (!isset($_SESSION['login'])) {
          header("Location: login.php");
          exit;
      }

require 'functions.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo " <script>
    alert ('Akhirnya Data kehapus juga !');
    document.location.href = 'index.php';
    </script>";
} else {
    echo " <script>
    alert ('Aduh gagal dihapus !');
    document.location.href = 'index.php';
    </script>";
}