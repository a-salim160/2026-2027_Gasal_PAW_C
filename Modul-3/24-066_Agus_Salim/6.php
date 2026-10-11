
<!DOCTYPE html>
<html>
<head>
    <title>Array Function PHP</title>
</head>
<body>

<h2>Array Function PHP</h2>

<?php
// 1. Fungsi array_push()
$array1 = array("A");

echo "Array awal: ";
print_r($array1);

array_push($array1, "B");

echo "<br>Hasil array_push: ";
echo implode(" ", $array1);

echo "<br><br>";

// 2. Fungsi array_merge()
$array2 = array("A", "B");
$array3 = array("C");

echo "Array awal: ";
echo implode(" ", $array2);
echo " digabung dengan (";
echo implode(" ", $array3);
echo ")<br>";

$hasilMerge = array_merge($array2, $array3);

echo "Hasil array_merge: ";
echo implode(" ", $hasilMerge);

echo "<br><br>";

// 3. Fungsi array_values()
$array4 = array(
    "x" => 1,
    "y" => 2
);

echo "Array awal: ";
print_r($array4);

$hasilValues = array_values($array4);

echo "<br>Hasil array_values: ";
echo implode(" ", $hasilValues);

echo "<br><br>";

// 4. Fungsi array_search()
$array5 = array("A", "B", "C");

echo 'Mencari "B" pada array: ';
echo implode(" ", $array5);

$hasilSearch = array_search("B", $array5);

echo "<br>Hasil array_search: ";
echo $hasilSearch;

echo "<br><br>";

// 5. Fungsi array_filter()
$array6 = array(0, 1, false, 2, "", 3, "array");

echo "Array awal: ";
print_r($array6);

$hasilFilter = array_filter($array6);

echo "<br>Hasil array_filter: ";
echo implode(" ", $hasilFilter);

echo "<br><br>";

// 6. Fungsi sorting
$angka = array(3, 1, 2);

echo "Array awal: ";
echo implode(" ", $angka);

sort($angka);
echo "<br>Hasil sort: ";
echo implode(" ", $angka);

rsort($angka);
echo "<br>Hasil rsort: ";
echo implode(" ", $angka);

echo "<br><br>";

// Sorting array asosiatif
$nilai = array(
    "Peter" => 35,
    "Ben" => 37,
    "Joe" => 43
);

echo "Array awal: ";
print_r($nilai);

asort($nilai);
echo "<br>Hasil asort: ";
print_r($nilai);

arsort($nilai);
echo "<br>Hasil arsort: ";
print_r($nilai);

ksort($nilai);
echo "<br>Hasil ksort: ";
print_r($nilai);

krsort($nilai);
echo "<br>Hasil krsort: ";
print_r($nilai);
?>

</body>
</html>
