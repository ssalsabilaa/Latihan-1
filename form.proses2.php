<?php
$angka = $_POST['angka'];

if ((int)$angka % 2==0) {
    echo "angka genap";
}   else {
    echo "angka ganjil";
    }

?>