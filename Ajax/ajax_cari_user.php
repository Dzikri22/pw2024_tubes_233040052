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
                    <p><?= $wgy["potongan"]; ?></p>
                    <a href="detail.php?id=<?= $wgy["harga"]; ?>" class="btn btn-dark mb-3">Lihat Detail</a> <br>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>