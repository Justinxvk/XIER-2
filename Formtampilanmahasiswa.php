<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<?php
// Use ?? '' to provide an empty string as a default value
// This prevents the "Undefined array key" error if the form hasn't been submitted
$nama = $_POST['nama'] ?? '';
$alamat = $_POST['alamat'] ?? '';
$jeniskel = $_POST['jeniskel'] ?? '';
$pekerjaan = $_POST['pekerjaan'] ?? '';

// This method for hobbies is okay, but see the "Better Way" below
$hobi1 = $_POST['hobi1'] ?? '';
$hobi2 = $_POST['hobi2'] ?? '';
$hobi3 = $_POST['hobi3'] ?? '';
// 1. Get the 'hobi' array. If it's not set, use an empty array [].
$hobi_array = $_POST['hobi'] ?? [];
?>

<table border=1 bgcolor="Cyan">
    <tr>
        <td colspan=2 align="center"><b>Data Mahasiswa</b></td>
    </tr>
    <tr>
        <td>Nama</td><td><?php echo htmlspecialchars($nama); ?></td>
    </tr>
    <tr>
        <td>Alamat</td><td><?php echo htmlspecialchars($alamat); ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td><td><?php echo htmlspecialchars($jeniskel); ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td><td><?php echo htmlspecialchars($pekerjaan); ?></td>
    </tr>
    <tr>
        <td>Hobi</td><td><?php echo htmlspecialchars($hobi_string); ?></td>
    </tr>
</table>

<br>
<a href="Forminputmahasiswa.php">INPUT DATA LAGI</a>

</body>
</html>