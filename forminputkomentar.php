<?php
// File untuk menyimpan komentar
$filename = 'guestbook.txt';

// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $komentar = htmlspecialchars($_POST['komentar']);
    
    // Format entri: Tanggal | Nama | Email | Komentar
    $entry = date('Y-m-d H:i:s') . " | $nama | $email | $komentar\n";
    
    // Simpan ke file
    file_put_contents($filename, $entry, FILE_APPEND);
    
    // Redirect untuk menghindari resubmit
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Baca komentar dari file
$komentarList = [];
if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $parts = explode(' | ', $line);
        if (count($parts) === 4) {
            $komentarList[] = [
                'tanggal' => $parts[0],
                'nama' => $parts[1],
                'email' => $parts[2],
                'komentar' => $parts[3]
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('gradient.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            background: rgba(255, 255, 255, 0.9); /* Semi-transparan untuk kontras dengan background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            margin-bottom: 30px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .komentar {
            background: rgba(249, 249, 249, 0.9); /* Semi-transparan untuk kontras */
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
            border-left: 4px solid #4CAF50;
        }
        .komentar strong {
            color: #333;
        }
        .komentar small {
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Buku Tamu</h1>
        <form method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="komentar">Komentar:</label>
            <textarea id="komentar" name="komentar" rows="4" required></textarea>
            
            <input type="submit" value="Kirim">
        </form>
        
        <h2>Komentar Sebelumnya</h2>
        <?php if (empty($komentarList)): ?>
            <p>Belum ada komentar.</p>
        <?php else: ?>
            <?php foreach ($komentarList as $entry): ?>
                <div class="komentar">
                    <strong><?php echo $entry['nama']; ?> (<?php echo $entry['email']; ?>)</strong><br>
                    <small><?php echo $entry['tanggal']; ?></small><br>
                    <p><?php echo nl2br($entry['komentar']); ?></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>
