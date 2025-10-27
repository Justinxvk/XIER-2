<h2>Input Data Mahasiswa</h2>
<form method="post" action="Formtampilanmahasiswa.php">
  Nama: <input type="text" name="nama"><br>
  Alamat: <input type="text" name="alamat"><br>
  Jenis Kelamin:
  <input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki
  <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan<br>
  Pekerjaan:
  <select name="pekerjaan">
    <option value="Pelajar">Pelajar</option>
    <option value="Karyawan">Karyawan</option>
    <option value="Wiraswasta">Wiraswasta</option>
    <option value="Lain-lain">Lain-lain</option>
  </select><br>
  Hobi:
  <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga
  <input type="checkbox" name="hobi[]" value="Musik">Musik
  <input type="checkbox" name="hobi[]" value="Jalan-jalan">Jalan-jalan<br>
  <input type="submit" value="Kirim">
  <input type="reset" value="Batal">
</form>
</body>
</html>