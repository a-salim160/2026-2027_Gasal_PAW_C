<?php
include "../koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM supplier");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Supplier</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">

    <h2>Data Master Supplier</h2>

    <a href="tambah.php" class="tambah">+ Tambah Data</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>Alamat</th>
            <th>Tindakan</th>
        </tr>

        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($query)) {
        ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($data['nama']); ?></td>
            <td><?= htmlspecialchars($data['telp']); ?></td>
            <td><?= htmlspecialchars($data['alamat']); ?></td>
            <td>
                <a href="edit.php?id=<?= $data['id']; ?>"
                   class="edit">Edit</a>

                <a href="hapus.php?id=<?= $data['id']; ?>"
                   class="hapus"
                   onclick="return confirm('Anda yakin akan menghapus supplier ini?')">
                   Hapus
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>