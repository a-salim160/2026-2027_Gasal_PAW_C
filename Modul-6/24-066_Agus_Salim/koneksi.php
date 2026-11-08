<?php
$koneksi = mysqli_connect("localhost", "root", "", "db");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>