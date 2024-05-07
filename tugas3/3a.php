<?php

$r = 10;
$r2 = 20;

function luas_lingkaran($r)
{
    return 3.14 * $r * $r;
}

function keliling_lingkaran($r2)
{
    return 2 * 3.14 * $r2;
}


echo "<h4>Menghitung Luas lingkaran</h4>";
echo "<br>";
echo "jari jari = $r";
echo "<br>";
echo "Luas lingkaran = " . luas_lingkaran($r) . " cm<sup>2</sup>";
echo "<br>";
echo "<hr>";
echo "<h4>Menghitung Keliling lingkaran</h4>";
echo "<br>";
echo "jari jari = $r2";
echo "<br>";
echo "Keliling lingkaran = " . keliling_lingkaran($r2) . " cm";
echo "<hr>";