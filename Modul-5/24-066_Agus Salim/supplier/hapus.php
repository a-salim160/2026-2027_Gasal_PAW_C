<?php
include "../koneksi.php";

$id = (int) $_GET['id'];

$query = mysqli_prepare($koneksi,
    "DELETE FROM supplier WHERE id=?");

mysqli_stmt_bind_param($query, "i", $id);
mysqli_stmt_execute($query);

header("Location: index.php");
exit;
?>