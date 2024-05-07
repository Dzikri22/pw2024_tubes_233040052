<?php 
// $mahasiswa=[["Dzikrie Izzy Kurniawan", "233040052", "dzikriizzy111@gmail.com", "Teknik Informatika"],
// ["kurniawan", "233040052", "dzikriizzy111@gmail.com", "Teknik Informatika"]];

//  array associative
//  definisinya sama seperti array numerik kecuali, 
//  keynya(indexnya) adalah string yang kita buat sendiri
$mahasiswa=[
    [
        "nama"=>"Dzikri",
        "nrp"=> "233040052",
        "email"=>"dzikriizzy111@gmail.com",
        "jurusan"=>"Teknik Informatika",
        "tugas"=>[90,80,100],
        "gambar"=>"dzikri.jpg"
    ], 
    [
        "nama"=>"Zaki",
        "nrp"=> "233040053",
        "email"=>"zakiwijaya63@gmail.com",
        "tugas"=>[90,80,100],
        "jurusan"=>"Teknik Informatika",
        "gambar"=>"zaki.jpg"
    ],
    [
        "nama"=>"Ghani",
        "nrp"=> "233040049",
        "email"=>"ghani@gmail.com",
        "jurusan"=>"Teknik Informatika ",
        "tugas"=>[90,80,100],
        "gambar"=>"ghani.jpg"
    ], 
    [
        "nama"=>"Ikhwan",
        "nrp"=> "233040066",
        "email"=>"ikhwan@gmail.com",
        "tugas"=>[90,80,100],
        "jurusan"=>"Teknik Informatika",
        "gambar"=>"ikhwan.jpg"
    ],
    [
        "nama"=>"Murtadho",
        "nrp"=> "233040063",
        "email"=>"murtadho@gmail.com",
        "jurusan"=>"Teknik Informatika",
        "tugas"=>[90,80,100],
        "gambar"=>"murtahdo.jpg"
    ], 
    [
        "nama"=>"Sufi",
        "nrp"=> "233040044",
        "email"=>"Sufi@gmail.com",
        "tugas"=>[90,80,100],
        "jurusan"=>"Teknik Informatika",
        "gambar"=>"sufi.jpg"
    ],
    [
        "nama"=>"wilmar",
        "nrp"=> "233040050",
        "email"=>"wilmar@gmail.com",
        "jurusan"=>"Teknik Informatika",
        "tugas"=>[90,80,100],
        "gambar"=>"wilmar.jpg"
    ], 
    [
        
    ]
    ];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<?php foreach($mahasiswa as $mhs):;?>
    <ul>
            <li>Nama    :<?= $mhs["nama"]; ?></li>
            <li>NRP     : <?= $mhs["nrp"]; ?></li>
            <li>Email   :<?= $mhs["email"]; ?></li>
            <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
            <?php foreach($mhs["tugas"] as $tgs):?>
                <li>Tugas   :<?= $tgs; ?></li>
            <?php endforeach; ?>
            <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
            <br>
    </ul>
<?php endforeach; ?>
</body>
</html>