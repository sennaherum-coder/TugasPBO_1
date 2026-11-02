<?php

require_once 'BangunDatar.php';

// Membuat objek
$bangun = new BangunDatar();

echo "<h2>HASIL PERHITUNGAN</h2>";

// PERSEGI
echo "<h3>1. Persegi</h3>";
echo "Luas: " . $bangun->luasPersegi(5) . "<br>";
echo "Keliling: " . $bangun->kelilingPersegi(5) . "<br>";
echo "Diagonal: " . $bangun->diagonalPersegi(5) . "<br>";

// PERSEGI PANJANG
echo "<h3>2. Persegi Panjang</h3>";
echo "Luas: " . $bangun->luasPersegiPanjang(10, 5) . "<br>";
echo "Keliling: " . $bangun->kelilingPersegiPanjang(10, 5) . "<br>";
echo "Diagonal: " . $bangun->diagonalPersegiPanjang(10, 5) . "<br>";


// LINGKARAN
echo "<h3>4. Lingkaran</h3>";
echo "Luas: " . $bangun->luasLingkaran(7) . "<br>";
echo "Keliling: " . $bangun->kelilingLingkaran(7) . "<br>";
echo "Diameter: " . $bangun->diameterLingkaran(7) . "<br>";

// JAJAR GENJANG
echo "<h3>5. Jajar Genjang</h3>";
echo "Luas: " . $bangun->luasJajarGenjang(10, 6) . "<br>";
echo "Keliling: " . $bangun->kelilingJajarGenjang(10, 8) . "<br>";

?>
