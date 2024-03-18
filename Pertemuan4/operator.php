<?php

$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: {$hasilTambah} <br>";
echo "Hasil Kurang: {$hasilKurang} <br>";
echo "Hasil Kali: {$hasilKali} <br>";
echo "Hasil Bagi: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "$hasilSama <br>";
echo "$hasilTidakSama <br>";
echo "$hasilLebihKecil <br>";
echo "$hasilLebihBesar <br>";
echo "$hasilLebihKecilSama <br>";
echo "$hasilLebihBesarSama <br><br>";
echo "============== <br>";


$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "$hasilAnd <br>";
echo "$hasilOr <br>";
echo "$hasilNotA <br>";
echo "$hasilNotB <br>";
echo "============== <br>";


$p1 = $a += $b;
$p2 = $a -= $b;
$p3 = $a *= $b;
$p4 = $a /= $b;
$p5 = $a %= $b;

echo "$p1 <br>";
echo "$p2 <br>";
echo "$p3 <br>";
echo "$p4 <br>";
echo "$p5 <br><br>";
echo "============== <br>";


$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "a === b : $hasilIdentik <br>";
echo "a !== b : $hasilTidakIdentik <br>";
echo "============== <br>";


$kursi = 45;
$terisi = 28;
$persen = ($kursi - $terisi) / $kursi * 100;

echo "Kursi yang kosong sebesar : $persen%";    