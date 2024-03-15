<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panjang = isset($_POST['panjang']) ? $_POST['panjang'] : 0;
    $angka_sebelumnya = 0;
    $angka_sekarang = 1;

    echo "<p>Deret Fibonacci:</p>";

    for ($i = 0; $i < $panjang; $i++) {
        echo $angka_sebelumnya . " ";
        $tambah = $angka_sebelumnya + $angka_sekarang;
        $angka_sebelumnya = $angka_sekarang;
        $angka_sekarang = $tambah;
    }
}
?>