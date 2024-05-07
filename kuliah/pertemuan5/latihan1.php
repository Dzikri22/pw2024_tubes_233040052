<?php
//1.Membuat Array
$hari = array("senin", "selasa", "rabu");
$bulan = ["januari", "februari", "maret"];
$mhs = ["Dzikri", 3.5, false];
//2.Mencetak Array
//cetak 1 nilai menggunakan index
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mhs [1];
echo "<hr>";
//cetak seluruh isi array
//Var_dump() atau print_r()
//digunakan untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";


//3.Manipulasi Array
//menambah isi Array
// Di akhir array: [] atau array_push()
$hari[] = "kamis";
print_r($hari);
echo "<br>";
array_push($bulan, "april", "mei");
print_r($bulan);
echo "<br>";
// Diawal array: array_unshift()
array_unshift($mhs, "233040052");
print_r($mhs);
echo "<hr>";
//menghapus isi array
//di belakang :array_pop()
//di depan :array_shift()
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);




































