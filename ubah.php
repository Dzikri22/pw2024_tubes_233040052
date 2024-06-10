<?php
  session_start();

  if (!isset($_SESSION['login'])) {
      header("Location: login.php");
      exit;
 }

require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data produk berdasarkan id
$wagyu = query("SELECT * FROM healthy WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo " <script>
        alert ('Data anda berhasil Diubah !');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo " <script>
        alert ('Data Anda gagal di ubah !');
        document.location.href = 'index.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Daging</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body style="background-color: #191970;">
    


<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="card" style="width: 35rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Ubah data</h5>
                    <form action="" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?= $wagyu["id"]; ?>">
                        <div class="mb-3">
                            <label class="form-label">nama</label>
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga Produk" value="<?= $wagyu["nama"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="kategori_id" class="form-label">Daging Wagyu</label>
                            <select name="kategori_id" id="kategori_id" class="form-control" required>
                                <option value="1">Medium Rare</option>
                                <option value="2">Well Done</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga Produk" value="<?= $wagyu["harga"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">potongan</label>
                            <input type="text" class="form-control" id="harga" name="potongan" placeholder="Masukkan potongan" value="<?= $wagyu["potongan"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Detail Daging</label>
                            <textarea name="detail" id="" cols="65" rows="5" placeholder="Masukkan Detail"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="gambar_lama" value="<?= $wagyu["harga"]; ?>">
                            <label class="form-label">Gambar
                                <input type="file" class="gambar" onchange="previewImage()" name="gambar" placeholder="Masukkan Gambar Produk">
                            </label>
                            <img src="img/<?= $wagyu["gambar"]; ?>" width="120" class="img-preview">
                        </div>
                        <button type=" submit" class="btn btn-dark justify-content-end" name="submit">Ubah Data !</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html> 