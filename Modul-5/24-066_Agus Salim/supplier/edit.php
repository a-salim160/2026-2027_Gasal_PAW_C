<?php
include "../koneksi.php";

$id = (int) $_GET['id'];

$query = mysqli_query($koneksi,
    "SELECT * FROM supplier WHERE id = $id");

$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan");
}

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $query = mysqli_prepare($koneksi,
        "UPDATE supplier SET nama=?, telp=?, alamat=? WHERE id=?");

    mysqli_stmt_bind_param($query, "sssi", $nama, $telp, $alamat, $id);
    mysqli_stmt_execute($query);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Supplier</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">

    <h2>Edit Data Master Supplier</h2>

    <form method="POST">

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama"
                value="<?= htmlspecialchars($data['nama']); ?>" required>
        </div>

        <div class="form-group">
            <label>Telp</label>
            <input type="text" name="telp"
                value="<?= htmlspecialchars($data['telp']); ?>" required>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat"
                value="<?= htmlspecialchars($data['alamat']); ?>" required>
        </div>

        <div class="form-actions">
            <button type="submit" name="update">Update</button>
            <a href="index.php" class="batal">Batal</a>
        </div>

    </form>

</div>

</body>
</html>