<?php
$limitnum = isset($_POST['limit']) ? $_POST['limit'] : 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Result: ";
    for ($i = 1; $i <= $limitnum; $i++) {
        echo $i . " ";
    }
    echo "</p>";
}
?>