<?php
// menghitung luas kubus
function luas_kubus($sisi){
    return 6 * $sisi * $sisi;
}

// menghitung luas balok
function luas_balok($panjang, $lebar, $tinggi){
    return 2 * (($panjang * $lebar) + ($panjang * $tinggi) + ($lebar * $tinggi));
}

// menghitung luas prisma segitiga
function luas_prisma_segitiga($alas, $tinggi_prisma, $tinggi_segitiga){
    return (($alas * $tinggi_segitiga) + (3 * $alas * $tinggi_prisma));
}

// menghitung luas limas segiempat
function luas_limas_segiempat($panjang, $lebar, $tinggi){
    return (($panjang * $lebar) + (2 * $panjang * sqrt((($lebar/2) * ($lebar/2)) + ($tinggi * $tinggi))) + (2 * $lebar * sqrt((($panjang/2) * ($panjang/2)) + ($tinggi * $tinggi))));
}

// menghitung luas tabung
function luas_tabung($jari, $tinggi){
    return (2 * 3.14 * $jari * $tinggi) + (2 * 3.14 * $jari * $jari);
}

// contoh penggunaan fungsi-fungsi di atas
$sisi = 5;
$panjang = 6;
$lebar = 8;
$alas = 7;
$tinggi_prisma = 4;
$tinggi_segitiga = 5;
$jari = 10;
$tinggi_tabung = 12;

echo "Luas Kubus: " . luas_kubus($sisi) . "<br>";
echo "Luas Balok: " . luas_balok($panjang, $lebar, $tinggi) . "<br>";
echo "Luas Prisma Segitiga: " . luas_prisma_segitiga($alas, $tinggi_prisma, $tinggi_segitiga) . "<br>";
echo "Luas Limas Segiempat: " . luas_limas_segiempat($panjang, $lebar, $tinggi) . "<br>";
echo "Luas Tabung: " . luas_tabung($jari, $tinggi_tabung) . "<br>";
?>
