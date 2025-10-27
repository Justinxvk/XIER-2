<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <p>Isi Data Dibawah ini:</p>
    <form action="FormOutputRegistrasi.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" rows="4" cols="50"></textarea><br><br>

        <label for="tempat_lahir">Tempat Lahir:</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir"><br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="text" id="tanggal_lahir" name="tanggal_lahir"><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" id="laki" name="jenis_kelamin" value="Laki-Laki">
        <label for="laki">Laki-Laki</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
        <label for="perempuan">Perempuan</label><br><br>

        <label for="pendidikan">Pendidikan:</label><br>
        <select id="pendidikan" name="pendidikan">
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA/SMK">SMA/SMK</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
            <!-- Add more options as needed -->
        </select><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Cancel">
    </form>
</body>
</html>