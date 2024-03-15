<?php
    // Data produk dan harga
    $produk = [
        'Kaos' => 100000,
        'Celana' => 200000,
        'Topi' => 50000
    ];

    // keranjang belanja (produk dan jumlah)
    $keranjang = [
        'Kaos' => isset($_POST['kaos']) ? $_POST['kaos'] : 0,
        'Celana' => isset($_POST['celana']) ? $_POST['celana'] : 0,
        'Topi' => isset($_POST['topi']) ? $_POST['topi'] : 0
    ];

    $total = 0;
    foreach ($keranjang as $item => $qty) {
        if (isset($produk[$item])) {
            $total += $produk[$item] * $qty;
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Total belanja: Rp. " . number_format($total, 0, ',', '.') . "</p>";
    }
?>