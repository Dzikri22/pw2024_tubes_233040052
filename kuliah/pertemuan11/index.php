<?php
//koneksi ke database
$conn = mysqli_connect('localhost','root','','pw2024_233040052');
//lakukan query ke table mahasiswa
$result = mysqli_query($conn,"SELECT * FROM Mahasiswa");
// menyiapkan data mahasiswa  (fetch)
$row = [];
while($row = mysqli_fetch_row($result)) {
 $rows[] =$row;
}

$mahasiswa =$rows;

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemrograman web | Data mahasiswa </title>
  </head>
  <body>
    <div class="container">
        <h1>Daftar mahasiswa</h1>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Dzikrie Izzy Kurniawan</td>
      <td>233040052</td>
      <td>dzikriizzy111@gmail.com</td>
      <td>Teknik Informatika</td>
      <td></td>
    </tr>
  </tbody>
</table>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <tr>
      <th scope="row">1</th>
      <td>Dzikrie Izzy Kurniawan</td>
      <td>233040052</td>
      <td>dzikriizzy111@gmail.com</td>
      <td>Informatika</td>
      <td>
        <a href="#" class="">ubah</a> <a href="#">hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
    <h1>Hello, world!</h1>
  </body>
</html>
