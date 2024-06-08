<?php

function koneksi()
{
 $db =  mysqli_connect('localhost','root','','pw2024_tubes_233040052') or die ('koneksi ke DB gagal');
    return $db;

}

function query($sql) {

    // koneksi ke Database
    $db= koneksi ();
    // lakukan query ke tabel mahasiswa
$result = mysqli_query($db,$sql) or die (mysqli_error($db));
    // menyiapkan data mahasiswa (fetch)
$rows = [];

while($row = mysqli_fetch_row($result)) {
 $rows[] =$row;
}


return $rows;

}


function tambah($data)
{
    $conn = koneksi();
    // $gambar = htmlspecialchars ($data['gambar']);
    $nama = htmlspecialchars ($data['nama']);
    $potongan = htmlspecialchars ($data['potongan']);
    $harga = htmlspecialchars ($data['harga']);
    $detail = htmlspecialchars ($data['detail']);
    $kategori_id = htmlspecialchars  ($data['kategori_id']);

    //  upload gambar 
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $sql = "INSERT INTO healthy VALUES
    (null, '$gambar', '$nama', '$potongan', '$harga', '$detail', '$kategori_id');
    ";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function hapus($id)
{
    $conn = koneksi();

    // menghapus gambar di folder img
    $wgy = query("SELECT * FROM healthy WHERE id = $id")[0];


    mysqli_query($conn, "DELETE FROM healthy WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
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


function cari($keywoard)
{
    $conn = koneksi();

    $query = "SELECT * FROM healthy
        WHERE nama LIKE '%$keywoard%'";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function upload()
{
    $nama_file = $_FILES['tgambar']['name'];
    $tipe_file = $_FILES['tgambar']['type'];
    $ukuran_file = $_FILES['tgambar']['size'];
    $error = $_FILES['tgambar']['error'];
    $tmp_file = $_FILES['tgambar']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        // echo "<script>
        // alert('pilih dulu dong gambarnya !');
        // </script>";
        return 'nopoto.png';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
        alert('itu bukan gambar woi !');
        </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
        alert('itu bukan gambar woi !');
        </script>";
        return false;
    }

    // ukuran file
    // max 5mb ==== 5jt bite
    if ($ukuran_file > 5000000) {
        echo "<script>
        alert('ukurannya kegedean bro !');
        </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

    return $nama_file_baru;
}


function ubah($data)
{
    $conn = koneksi();

    $id = $data["id"];
    $gambar_lama = htmlspecialchars($data["gambar_lama"]);
    $nama = htmlspecialchars ($data["nama"]);
    $potongan = htmlspecialchars ($data["potongan"]);
    $harga = htmlspecialchars ($data["harga"]);
    $detail = htmlspecialchars ($data["detail"]);
    $kategori_id = htmlspecialchars($data["kategori_id"]);

    


    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'nopoto.png') {
        $gambar = $gambar_lama;
    }


    $query = "UPDATE healthy SET
    gambar = '$gambar',
    nama = '$nama',
    harga = '$harga',
    potongan = '$potongan',
    detail = '$detail',
    kategori_id = '$kategori_id'
    WHERE id = '$id'
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function register($data)
{
    $conn = koneksi();

    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);





    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert('password tidak sesuai');
        </script>";
        return false;
    }


    // cek user sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah terpakai !')
        </script>";
        return false;
    }

    // jika username atau pass salah
    if (empty($username) || empty($password) || empty($password2)) {
        echo "<script>
        alert('username / password tidak boleh kosong !');
        document.location.href = 'register.php';
        </script>";

        return false;
    }

    // jika password tidak sesuai
    if ($password !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sesuai !');
        document.location.href = 'register.php';
        </script>";

        return false;
    }

    // jika pw tidak < 5
    if (strlen($password) < 5) {
        echo "<script>
        alert('password terlalu pendek !');
        document.location.href = 'register.php';
        </script>";
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    // tambahkan user ke db
    $sql = "INSERT INTO user VALUES(null, '$username', '$password')";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


