<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = isset($_POST['angka']) ? $_POST['angka'] : 0;
    $jumlah_digit = 0;

    while ($angka != 0) {
        $angka = floor($angka / 10);
        $jumlah_digit++;
    }

    echo "<p>Jumlah digit : $jumlah_digit</p>";
}
?>