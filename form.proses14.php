<?php
function nilai_terbesar($arr) {
    $max = $arr[0];
    foreach ($arr as $nilai) {
        if ($nilai > $max) {
            $max = $nilai;
        }
    }
    return $max;
}

$input = isset($_POST['angka']) ? $_POST['angka'] : '';
$angka = explode(',', $input);
$nilai_terbesar = nilai_terbesar($angka);
echo "Nilai terbesar: " . $nilai_terbesar;
?>