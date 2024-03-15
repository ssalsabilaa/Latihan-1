<?php
function jumlahkan($arr) {
    $total = 0;
    foreach ($arr as $nilai) {
        $total += $nilai;
    }
    return $total;
}

$input = isset($_POST['angka']) ? $_POST['angka'] : '';
$angka = explode(',', $input);
$total = jumlahkan($angka);
echo "Total: " . $total;

?>