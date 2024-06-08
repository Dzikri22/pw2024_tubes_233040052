 <?php

require 'functions.php';
$conn =mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040052') or die ('koneksi ke DB gagal');
$wagyu = mysqli_query ($conn, "SELECT * FROM healthy");


 // tombol cari ditekan
if (isset($_POST['cari'])) {
  $wagyu = cari($_POST['keywoard']);
}


?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Healthy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body style="background-color: rgb(64, 224, 208);">  

  <body>
      <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #2a2a2a" style="margin-top:5px;">
          <div class="container-fluid justify-content-end">
              <a href="tambah.php" class="btn btn-light" style="margin-right: 10px;">Tambah</a>
              <a href="loguot.php" class="btn btn-light" >loguot  </a>

              <h3 class="navbar-brand" style="margin-right: 165px;">HEALTHY WAGYU</h3>

              <form action="" method="POST">
                <input type="text" name="keywoard" placeholder="Masukkan pencarian..." autocomplete="off" class="keyword">
                <button type="submit" name="cari" class="btn btn-dark" class="tombol-cari">Search</button>
              </form>                        
    </div>
    </nav>  

    <h3 class="text-center mb-4 fw-bold" style="padding-top:100px;">PRODUCT</h3>
<div class="container">

            <div class="row">
            <?php foreach ($wagyu as $wgy) : ?>
                <div class="col-lg-4 col-md-6 my-2  d-flex justify-content-around ">
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?= $wgy["gambar"]; ?>" class="card-img-top" alt="..." width="250px">
                        <div class=" card-body text-center">
                            <h5 class="card-title"><?= $wgy["nama"]; ?></h5>
                            <p><?= $wgy["potongan"]; ?></p>
                            <p><?= $wgy["harga"]; ?></p>
                            <a href="detail.php?id=<?= $wgy["id"]; ?>" class="btn btn-dark mb-3">detail daging</a> <br>
                            <a href="ubah.php?id=<?= $wgy["id"]; ?>" class="btn btn-primary">Ubah</a> <a href="delete.php" onclick="return confirm('Serius Mau Dihapus ?')" class="btn btn-danger">delete</a>
                            <br>
                            <p class="btn btn-dark mt-2"><?= $wgy["kategori_id"]; ?></p>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>