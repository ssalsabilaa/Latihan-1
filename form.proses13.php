<?php
function kalikan($arr) {
    $total = 1;
    foreach ($arr as $nilai) {

        $total *= $nilai;
    }
    return $total;
}

$input = isset($_POST['angka']) ? $_POST['angka'] : '';
$angka = explode(',', $input);
$hasil_kali = kalikan($angka);
echo "Hasil kali: " . $hasil_kali;
?>
?>