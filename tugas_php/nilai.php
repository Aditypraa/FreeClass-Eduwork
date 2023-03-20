<?php

$nilai = $_POST['nilai'];

if ($nilai >= 90 && $nilai <= 100) {
    echo "Nilai Anda adalah A";
} elseif ($nilai >= 80 && $nilai < 90) {
    echo "Nilai Anda adalah B";
} elseif ($nilai >= 70 && $nilai < 80) {
    echo "Nilai Anda adalah C";
} else {
    echo "Nilai Anda adalah D";
}

?>
