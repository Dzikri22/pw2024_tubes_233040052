<?php

function koneksi ()
{
 $db =  mysqli_connect('localhost','root','','pw2024_tubes_233040052') or die ('koneksi ke DB gagal');
    return $db;

}

function query($sql) {

    // koneksi ke Database
    $conn = koneksi ();
    // lakukan query ke tabel mahasiswa
$result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
    // menyiapkan data mahasiswa (fetch)
$rows = [];

while($row = mysqli_fetch_row($result)) {
 $rows[] =$row;
}


return $rows;

}





function tambah($data)
{
    $db = mysqli_connect('localhost','root','','pw2024_tubes_233040052');
    
}


function login($data) {
    global $conn;

    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    
    // cek dulu username nya
    if ($user = query("SELECT * FROM healthy WHERE username = '$username'")[0]) {
        if(password_verify($password, $user['password'])) {

            $_SESSION['login'] = true;
            header("Location: index.php");
            exit; 
        }
    }
}