<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = isset($_POST['number']) ? $_POST['number'] : 0;

    $faktorial = 1;
    for ($i = 1; $i <= $angka; $i++) {
        $faktorial *= $i;
    }

    echo "<p>Faktorial dari $angka adalah $faktorial</p>";
}
?>