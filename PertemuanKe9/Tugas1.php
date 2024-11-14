<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Umur</title>
</head>
<body>
    <h1>Masukkan Umur Anda</h1>
    <form method="post" action="">
        <label for="age">Umur:</label>
        <input type="number" name="age" id="age" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    // Memeriksa apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input umur dari form
        $age = (int)$_POST['age'];

        // Menggunakan if untuk menentukan kategori umur
        if ($age < 0) {
            echo "<p>Umur tidak valid.</p>";
        } elseif ($age >= 0 && $age <= 12) {
            echo "<p>Anda adalah anak-anak.</p>";
        } elseif ($age >= 13 && $age <= 17) {
            echo "<p>Anda adalah remaja.</p>";
        } elseif ($age >= 18 && $age <= 64) {
            echo "<p>Anda adalah dewasa.</p>";
        } else {
            echo "<p>Anda adalah lansia.</p>";
        }
    }
    ?>
</body>
</html>