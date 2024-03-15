<?php
function rata_rata($arr) {
    $total = 0;
    $count = count($arr);
    foreach ($arr as $nilai) {
        $total += $nilai;
    }
    return $total / $count;
}

$input = isset($_POST['angka']) ? $_POST['angka'] : '';
$angka = explode(',', $input);
$rata_rata = rata_rata($angka);
echo "Rata-rata: " . $rata_rata;
?>