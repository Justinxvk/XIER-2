<html>
<head>
    <title>Input Data Mahasiswa</title>
</head>
<body bgcolor="grey">
<form action="Formtampilanmahasiswa.php" method="post">
<b>Pengelolaan Data Mahasiswa</b>
<br>
<pre>
Nama: <input type="text" name="nama" size="25" maxlength="50">
Alamat: <input type="text" name="alamat" size="25" maxlength="50">
</pre>
Jenis Kelamin:
<input type="radio" name="jeniskel" value="Laki-Laki">Laki-Laki
<input type="radio" name="jeniskel" value="Perempuan">Perempuan
<p>
Pekerjaan:
<select name="pekerjaan">
<option value ="-pilih-">
<option value="Pelajar">Pelajar
<option value="Karyawan">Karyawan
<option value="Wiraswasta">Wiraswasta
<option value="Lain-lain">Lain-lain
</select>
<p>
Hobi:
<input type="checkbox" name="hobi1" value="Olahraga">Olahraga
<input type="checkbox" name="hobi2" value="Musik">Musiks
<input type="checkbox" name="hobi3" value="Jalan-jalan">Jalan-jalan
<p>
<input type="submit" value="Kirim">
<input type="reset" value="Batal">
</form>
</body>
</html>