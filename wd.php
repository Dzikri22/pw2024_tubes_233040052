<?php
require 'functions.php';


$wagyu = query("SELECT * FROM healthy WHERE kategori_id=2");

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
    <title>Well Done</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- link google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- boxicon link -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #6495ED;">


<body>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color:#2a2a2a">
        <div class="container-fluid">
            <h3 class="navbar-brand">Daging Wagyu</h3>
            <li class="nav-item navbar-nav me-auto mb-2 mb-lg-0">
                <a class="nav-link active text-white" aria-current="page" href="login.php">Home</a>
            </li>
            <li class="nav-item dropdown navbar-nav me-auto mb-2 mb-lg-0">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tingkat Kematangan Daging
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="mr.php">Medium Rare</a></li>
                    <li><a class="dropdown-item" href="wd.php">Well Done</a></li>
                </ul>
            </li>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            <form action="" method="POST" class="d-flex">
                <input type="text" name="keywoard" placeholder="Search..." autocomplete="off" class="keyword form-control me-2">
                <button type="submit" name="cari" class="btn btn-dark" class="tombol-cari-user" style="border: 1px solid white;"><i class='bx bx-search'></i></button>
            </form>


        </div>
        </div>
    </nav>

    <h3 class="text-center mb-4 fw-bold" style="padding-top:100px;">Product</h3>
    <div class="container ">

        <div class="row">
            <?php foreach ($wagyu as $wgy) : ?>
                <div class="col-lg-4 col-md-6 my-2  d-flex justify-content-around ">
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?= $wgy["gambar"]; ?>" class="card-img-top" alt="...">
                        <div class=" card-body text-center">
                            <h5 class="card-title"><?= $wgy["nama"]; ?></h5>
                            <p><?= $wgy["harga"]; ?></p>
                            <a href="detail.php?id=<?= $wgy['id']; ?>" class="btn btn-dark mb-3">Lihat Detail</a> <br>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="js/script.user.js"></script>

</body>

</html>