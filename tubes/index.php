 <?php

require 'functions.php';
$conn =mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040052') or die ('koneksi ke DB gagal');
$wagyu = mysqli_query ($conn, "SELECT * FROM healthy");
?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Healthy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>
      <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #2a2a2a">
          <div class="container-fluid justify-content-end" style="margin: 10px;">
              <a href="tambah.php" class="btn btn-light" style="margin-right: 10px;">Tambah</a>
              <a href="loguot.php" class="btn btn-light" >loguot</a>

              <h3 class="navbar-brand" style="margin-right: 165px;">HEALTHY WAGYU</h3>

              <form action="" method="POST">
                <input type="text" name="keywoard" placeholder="Masukkan pencarian..." autocomplete="off" class="keyword">
                <button type="submit" name="cari" class="btn btn-dark" class="tombol-cari">Search</button>
            </form>


              
    </div>
</div>
</nav>





<h3 class="text-center mb-4 fw-bold" style="padding-top: 100px;">Product</h3>
<div class="row">
    <?php foreach($wagyu as $wgy): ?>
        <div class="col-lg-4 col-md-6 my-2 d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
            <img src="sapi1.jpg" alt="">
            <div class="card-body text-center">
              <img src="img/<?= $wgy["gambar"]; ?>" style="width: 200px;">
                <!-- <p><?=$wgy[""]; ?></p> 
                <a href="" ?id>


              




            </div>
        
        <?php endforeach; ?>
        
        
        </div>





        </div>




</div> 


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">nama</th>
      <th scope="col">potongan</th>
      <th scope="col">harga</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($wagyu as $wgy) : ?>
    
    <tr>
      <th scope="row">1</th>
      <td><img src="img/<? = $wgy['gambar']; ?>" width="200"></td>
      <td></td>
      <td></td>
    </tr>
    <?php endforeach; ?> 
  </tbody>
</table>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>