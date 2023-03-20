function hitung_volume_kubus($sisi) {
    $volume = pow($sisi, 3);
    return $volume;
}

function hitung_luas_permukaan_kubus($sisi) {
    $luas_permukaan = 6 * pow($sisi, 2);
    return $luas_permukaan;
}

function hitung_volume_balok($panjang, $lebar, $tinggi) {
    $volume = $panjang * $lebar * $tinggi;
    return $volume;
}

function hitung_luas_permukaan_balok($panjang, $lebar, $tinggi) {
    $luas_permukaan = 2 * (($panjang * $lebar) + ($panjang * $tinggi) + ($lebar * $tinggi));
    return $luas_permukaan;
}

function hitung_luas_lingkaran($jari_jari) {
    $luas = M_PI * pow($jari_jari, 2);
    return $luas;
}
