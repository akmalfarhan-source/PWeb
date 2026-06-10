<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Kategori Usia</title>
</head>
<body>

<h2>Cek Kategori Usia Mahasiswa</h2>

<form method="POST">
    Nama : <input type="text" name="nama" placeholder="Masukkan nama" required><br><br>
    Umur : <input type="number" name="umur" placeholder="Masukkan umur" required><br><br>
    <button type="submit" name="submit">Cek Kategori</button>
</form>

<hr>

<?php
// cek apakah form sudah dikirim
if (isset($_POST['submit'])) {

    // ambil data dari form
    $nama = $_POST['nama'];
    $umur = (int) $_POST['umur'];

    // cek kategori berdasarkan umur
    if ($umur < 13) {
        $kategori = "Anak-anak";
    } elseif ($umur >= 13 && $umur <= 17) {
        $kategori = "Remaja";
    } elseif ($umur >= 18 && $umur <= 59) {
        $kategori = "Dewasa";
    } else {
        $kategori = "Lansia";
    }

    // tampilkan hasil
    echo "<p>Nama : $nama</p>";
    echo "<p>Umur : $umur tahun</p>";
    echo "<p>Kategori Usia : <strong>$kategori</strong></p>";
}
?>

</body>
</html>