<html>
<head>
    <title>Data Registrasi</title>
</head>
<body>
    <h2>Data Registrasi</h2>

    <table border="1">
        <tr>
            <th>Nama</th>
            <td><?php echo $_POST["nama"]; ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?php echo $_POST["alamat"]; ?></td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td><?php echo $_POST["tempat_lahir"]; ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?php echo $_POST["tanggal_lahir"]; ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $_POST["jenis_kelamin"]; ?></td>
        </tr>
        <tr>
            <th>Pendidikan</th>
            <td><?php echo $_POST["pendidikan"]; ?></td>
        </tr>
    </table>

    <a href="FormInputRegistrasi.php">Back To Home</a>
</body>
</html>