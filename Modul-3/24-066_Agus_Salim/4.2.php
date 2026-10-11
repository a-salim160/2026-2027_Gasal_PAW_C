
<?php
$weight = array(
    "Andy" => "70",
    "Barry" => "65",
    "Charlie" => "75"
);

echo "weight = (";

foreach ($weight as $nama => $berat) {
    echo '"' . $nama . '"=>"' . $berat . '" ';
}

echo ")<br><br>";

$nama = array_keys($weight);

$jumlah = count($weight);

for ($i = 0; $i < $jumlah; $i++) {
    echo $nama[$i] . " is " .
         $weight[$nama[$i]] . " kg.<br>";
}
?>
