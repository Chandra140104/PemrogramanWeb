<?php

echo "============================<br>";
echo "      Nilai<br>";
echo "============================<br>";
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
echo "Nilai huruf: D";
}
echo "<br><br>";

echo "============================<br>";
echo "         Target Lari<br>";
echo "============================<br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
while ($jarakSaatIni < $jarakTarget) {
$jarakSaatIni += $peningkatanHarian;
$hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br><br>";


echo "============================<br>";
echo "     Jumlah Buah saat Panen<br>";
echo "============================<br>";
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah<br><br>";


echo "============================<br>";
echo "     Total Skor Ujian<br>";
echo "============================<br>";
$skorUjian = [85, 92, 78, 96, 88]; 
$totalSkor = 0;
foreach ($skorUjian as $skor) { 
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor<br><br>";


echo "============================<br>";
echo "        Kelulusan<br>";
echo "============================<br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
    foreach ($nilaiSiswa as $nilai) {
        if ($nilai < 60) {
            echo "Nilai: $nilai (Tidak lulus) <br>";
            continue;
        }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br>";
echo "============================<br>";
echo "        Rata-Rata Nilai<br>";
echo "============================<br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

    sort($nilaiSiswa);

    array_shift($nilaiSiswa);
    array_shift($nilaiSiswa);
    array_pop($nilaiSiswa);
    array_pop($nilaiSiswa);


$totalNilai = array_sum($nilaiSiswa);


$jumlahSiswa = count($nilaiSiswa);
$rataRata = $totalNilai / $jumlahSiswa;

echo "Total nilai siswa setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai<br>";
echo "Rata-rata nilai siswa: $rataRata";
echo "<br><br>";


echo "============================<br>";
echo "     Pembelian di Toko<br>";
echo "============================<br>";
$beli = 120000;
if ($beli > 100000){
    $diskon = $beli * 0.2;
    $bayar = $beli - $diskon;
} 
echo "Total yang harus dibayar adalah: $bayar<br><br>";
 

echo "============================<br>";
echo "       Skor Pemain<br>";
echo "============================<br>";
$skorPemain = 700; 
echo "Total skor pemain adalah: $skorPemain<br>";
$hadiahTambahan = ($skorPemain > 500) ? "YA" : "TIDAK";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan <br><br>";

?>