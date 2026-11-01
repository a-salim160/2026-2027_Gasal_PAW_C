<?php
include "../koneksi.php";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $query = mysqli_prepare($koneksi,
        "INSERT INTO supplier (nama, telp, alamat) VALUES (?, ?, ?)");

    mysqli_stmt_bind_param($query, "sss", $nama, $telp, $alamat);
    mysqli_stmt_execute($query);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Supplier</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">

    <h2>Tambah Data Supplier Baru</h2>

    <form method="POST">

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan nama supplier" required>
        </div>

        <div class="form-group">
            <label>Telp</label>
            <input type="text" name="telp" placeholder="Masukkan nomor telepon" required>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" placeholder="Masukkan alamat" required>
        </div>

        <div class="form-actions">
            <button type="submit" name="simpan">Simpan</button>
            <a href="index.php" class="batal">Batal</a>
        </div>

    </form>

</div>

</body>
</html>