<?php
require '../functions.php';
$wagyu = cari($_GET['keyword']);
?>

<div class="row">
    <?php foreach ($wagyu as $wgy) : ?>
        <div class="col-lg-4 col-md-6 my-2  d-flex justify-content-around ">
            <div class="card" style="width: 18rem;">
                <img src="img/<?= $wgy["gambar"]; ?>" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= $wgy["nama"]; ?></h5>
                    <p><?= $hp["harga"]; ?></p>
                    <a href="detail.php?id=<?= $wgy["id"]; ?>" class="btn btn-dark mb-3">Lihat Detail</a> <br>
                    <a href="ubah.php?id=<?= $wgy["id"]; ?>" class="btn btn-primary">Ubah</a> <a href="hapus.php?id=<?= $wgy["id"]; ?>" onclick="return confirm('hapus apa jangan yah?')" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>