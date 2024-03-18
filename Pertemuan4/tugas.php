<?php
$daftarData = [
    1 => [
        ['Chandra', 'Jl Tosaren','081334613705','Teknologi Informasi'],
    ],
    2 => [
        ['Sulaksono', 'Jl Tinalan','085158172880','akutansi'],
    ]
    ];
    $kategori = 1;
    echo "CHANDRA BAGUS SULAKSONO <br><br>";
    while ($kategori <= 2) {
        foreach ($daftarData[$kategori] as $data) {
            echo "<img src='bunga.jpg'><br> Nama: {$data[0]},<br> Alamat: {$data [1]},<br> No Telepon: {$data[2]},<br> Jurusan: {$data[3]} <br><br>";
        }
        $kategori += 1;   
    }
?>