<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cek Kategori Usia Mahasiswa</title>
</head>
<body>

<h2>Cek Kategori Usia Mahasiswa</h2>

<form method="POST">
    <label>Nama :</label><br>
    <input type="text" name="nama" placeholder="Masukkan nama Anda" required><br><br>
    
    <label>Umur :</label><br>
    <input type="number" name="umur" placeholder="Masukkan umur Anda" required><br><br>
    
    <button type="submit" name="submit">Cek Kategori</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $umur = (int) $_POST['umur'];

    if ($umur < 13) {
        $kategori = "Anak-anak";
    } elseif ($umur <= 17) {
        $kategori = "Remaja";
    } elseif ($umur <= 59) {
        $kategori = "Dewasa";
    } else {
        $kategori = "Lansia";
    }

    echo "<p>Halo, <strong>" . $nama . "</strong>! Umur Anda " . $umur . " tahun.</p>";
    echo "<p>Kategori Usia: <strong>" . $kategori . "</strong></p>";
}
?>

</body>
</html>