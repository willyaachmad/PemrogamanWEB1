<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Kelulusan</title>
</head>
<body>
    <h1>Masukkan Nilai Ujian Anda</h1>
    <form method="post" action="">
        <label for="score">Nilai:</label>
        <input type="number" name="score" id="score" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    // Memeriksa apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input nilai dari form
        $score = (int)$_POST['score'];

        // Menggunakan if/else untuk menentukan status kelulusan
        if ($score >= 60) {
            echo "<p>Selamat! Anda Lulus.</p>";
        } else {
            echo "<p>Maaf, Anda Tidak Lulus.</p>";
        }
    }
    ?>
</body>
</html>