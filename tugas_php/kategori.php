<?php
function hitung_bmi($berat_badan, $tinggi_badan){
    $tinggi_meter = $tinggi_badan / 100;
    $bmi = $berat_badan / ($tinggi_meter * $tinggi_meter);
    return $bmi;
}

$berat_badan = 60; // dalam kilogram
$tinggi_badan = 170; // dalam sentimeter
$nama = "Sumanto";

$bmi = hitung_bmi($berat_badan, $tinggi_badan);
echo "Berat Badan: " . $berat_badan . " kg<br>";
echo "Tinggi Badan: " . $tinggi_badan . " cm<br>";
echo "Halo, $nama Nilai Bmi anda adalah " . number_format($bmi, 1) ." Anda termasuk Kurus"; 
// format angka menjadi 1 angka di belakang koma
?>