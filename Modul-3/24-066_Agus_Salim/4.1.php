
<?php
// Membuat array asosiatif
$height = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charlie" => "170"
);

// Menambahkan 5 data baru
$height["David"] = "180";
$height["Ethan"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Harry"] = "182";

// Menampilkan seluruh isi array
echo "height = (";

foreach ($height as $nama => $tinggi) {
    echo '"' . $nama . '"=>"' . $tinggi . '" ';
}

echo ")<br><br>";

// Menampilkan data dengan perulangan foreach
foreach ($height as $nama => $tinggi) {
    echo "$nama is $tinggi cm tall.<br>";
}
?>
