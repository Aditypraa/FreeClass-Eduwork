<?php
// menghitung luas persegi
function luas_persegi($sisi){
    return $sisi*$sisi;
}

// menghitung luas persegi panjang
function luas_persegi_panjang($panjang, $lebar){
    return $panjang*$lebar;
}

// menghitung luas segitiga
function luas_segitiga($alas, $tinggi){
    return 0.5*$alas*$tinggi;
}

// menghitung luas trapesium
function luas_trapesium($sisi1, $sisi2, $tinggi){
    return 0.5*($sisi1+$sisi2)*$tinggi;
}

// menghitung luas lingkaran
function luas_lingkaran($jari){
    return 3.14*$jari*$jari;
}

// contoh penggunaan fungsi-fungsi di atas
$sisi = 5;
$panjang = 6;
$lebar = 8;
$alas = 7;
$tinggi = 4;
$sisi1 = 9;
$sisi2 = 11;
$jari = 10;

echo "Luas Persegi: " . luas_persegi($sisi) . "<br>";
echo "Luas Persegi Panjang: " . luas_persegi_panjang($panjang, $lebar) . "<br>";
echo "Luas Segitiga: " . luas_segitiga($alas, $tinggi) . "<br>";
echo "Luas Trapesium: " . luas_trapesium($sisi1, $sisi2, $tinggi) . "<br>";
echo "Luas Lingkaran: " . luas_lingkaran($jari) . "<br>";
?>
