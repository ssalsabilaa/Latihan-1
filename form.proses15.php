<?php
function urutkan($arr) {
    sort($arr);
    return $arr;
}

$input = isset($_POST['angka']) ? $_POST['angka'] : '';
$angka = explode(',', $input);
$angka_urut = urutkan($angka);
echo "Array setelah diurutkan: " . implode(", ", $angka_urut);
?>