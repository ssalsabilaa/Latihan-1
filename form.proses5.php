<?php

$kata = $_POST['kata'];

if (strrev($kata) == $kata) {
    echo "Palindrom";
} else {
    echo "Bukan palindrom";
}

?>