<!DOCTYPE html>
<html>
<head>
    <title>Input Rumus</title>
</head>
<body>

<h2><u>Rumus - Rumus</u></h2>
<form method="POST" action="Tugas02output.php">
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>Nilai 1</td>
            <td><input type="number" name="nilai1" required></td>
        </tr>
        <tr>
            <td>Nilai 2</td>
            <td><input type="number" name="nilai2" required></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="radio" name="rumus" value="segitiga" id="segitiga" required>
                <label for="segitiga">Segitiga</label><br>
                <input type="radio" name="rumus" value="persegi_panjang" id="persegi_panjang">
                <label for="persegi_panjang">Persegi Panjang</label>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Hitung">
                <input type="reset" value="Batal">
            </td>
        </tr>
    </table>
</form>

</body>
</html>
