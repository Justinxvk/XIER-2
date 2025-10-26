<?php
// Panjang sisi kubus
$sisi = 15;

// Menghitung volume kubus: sisi × sisi × sisi
$volume = $sisi * $sisi * $sisi;

// Variabel teks
$teks1 = "Belajar Menghitung";
$teks2 = "Volume Kubus";

// Menggabungkan teks menggunakan operator string
$gabungan = $teks1 . " " . $teks2;

// Menampilkan hasil
echo "$gabungan<br>";
echo "Volume kubus dengan sisi $sisi cm adalah $volume cm³";
?>