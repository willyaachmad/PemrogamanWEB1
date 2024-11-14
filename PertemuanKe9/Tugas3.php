<?php
// Inisialisasi variabel
$monthName = "";

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil input angka dari form
    $month = (int)$_POST['month'];

    // Menggunakan switch case untuk menentukan nama bulan
    switch ($month) {
        case 1:
            $monthName = "Januari";
            break;
        case 2:
            $monthName = "Februari";
            break;
        case 3:
            $monthName = "Maret";
            break;
        case 4:
            $monthName = "April";
            break;
        case 5:
            $monthName = "Mei";
            break;
        case 6:
            $monthName = "Juni";
            break;
        case 7:
            $monthName = "Juli";
            break;
        case 8:
            $monthName = "Agustus";
            break;
        case 9:
            $monthName = "September";
            break;
        case 10:
            $monthName = "Oktober";
            break;
        case 11:
            $monthName = "November";
            break;
        case 12:
            $monthName = "Desember";
            break;
        default:
            $monthName = "Input tidak valid. Silakan masukkan angka antara 1 dan 12.";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Bulan</title>
</head>
<body>
    <h1>Masukkan Angka (1-12)</h1>
    <form method="post" action="">
        <label for="month">Angka:</label>
        <input type="number" name="month" id="month" min="1" max="12" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    // Menampilkan hasil jika ada
    if (!empty($monthName)) {
        echo "<p>Bulan ke-$month adalah $monthName.</p>";
    }
    ?>
</body>
</html>