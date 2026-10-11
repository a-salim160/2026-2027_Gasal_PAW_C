
<!DOCTYPE html>
<html>
<head>
    <title>Array Multidimensi</title>
</head>
<body>

<h2>Data Mahasiswa</h2>

<?php
// Membuat array multidimensi
$mahasiswa = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665")
);

// Menambahkan 5 data baru
$mahasiswa[] = array("David", "220404", "0812345671");
$mahasiswa[] = array("Ethan", "220405", "0812345672");
$mahasiswa[] = array("Frank", "220406", "0812345673");
$mahasiswa[] = array("George", "220407", "0812345674");
$mahasiswa[] = array("Harry", "220408", "0812345675");

// Membuat tabel
echo "<table border='1' cellpadding='10' cellspacing='0'>";

// Membuat header tabel
echo "<tr>";
echo "<th>Name</th>";
echo "<th>NIM</th>";
echo "<th>Mobile</th>";
echo "</tr>";

// Menampilkan data menggunakan for bersarang
for ($i = 0; $i < count($mahasiswa); $i++) {
    echo "<tr>";

    for ($j = 0; $j < count($mahasiswa[$i]); $j++) {
        echo "<td>" . $mahasiswa[$i][$j] . "</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
