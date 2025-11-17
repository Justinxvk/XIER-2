<!DOCTYPE html>
<html>
<head>
    <title>Hasil Rumus</title>
</head>
<body>

<h2><u>HASIL HITUNG RUMUS</u></h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai1 = isset($_POST['nilai1']) ? (float)$_POST['nilai1'] : 0;
    $nilai2 = isset($_POST['nilai2']) ? (float)$_POST['nilai2'] : 0;
    $rumus = isset($_POST['rumus']) ? $_POST['rumus'] : '';

    if ($nilai1 == 0 && $nilai2 == 0) {
        echo "<p>Tidak ada hasil perhitungan karena Nilai 1 dan Nilai 2 sama dengan 0.</p>";
    } else {
        echo "<p>Nilai a adalah = " . htmlspecialchars($nilai1) . "</p>";
        echo "<p>Nilai b adalah = " . htmlspecialchars($nilai2) . "</p>";
        
        $hasil = 0;
        $nama_rumus = "";

        if ($rumus == "segitiga") {
            $hasil = 0.5 * $nilai1 * $nilai2;
            $nama_rumus = "Segitiga";
        } elseif ($rumus == "persegi_panjang") {
            $hasil = $nilai1 * $nilai2;
            $nama_rumus = "Persegi Panjang";
        } else {
            echo "<p>Rumus belum dipilih.</p>";
            exit;
        }

        echo "<p>Rumus Yang Dipilih adalah = " . $nama_rumus . "</p>";
        echo "<p>Hasil Perhitungan Rumus = " . $hasil . "</p>";
    }
} else {
    echo "<p>Data tidak dikirim melalui metode POST.</p>";
}
?>

</body>
</html>
