<?php
$pesan = "Saya arek malang";
$pesanPerKata = explode(" ", $pesan);
$pesanPerkata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata); 
$pesan = implode(" ", $pesanPerkata);
echo $pesan . "<br>";
?>