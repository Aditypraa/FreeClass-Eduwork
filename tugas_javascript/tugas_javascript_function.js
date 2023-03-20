// Fungsi untuk menghitung luas persegi panjang
function luasPersegiPanjang(panjang, lebar) {
  return panjang * lebar;
}

// Fungsi untuk menggabungkan dua string
function gabungkanString(string1, string2) {
  return string1 + string2;
}

// Fungsi untuk menghitung jumlah karakter dalam sebuah string
function hitungJumlahKarakter(string) {
  return string.length;
}

// Memanggil fungsi-fungsi dengan beberapa contoh parameter
console.log(
  "Luas persegi panjang dengan panjang 4 dan lebar 5: " +
    luasPersegiPanjang(4, 5)
);
console.log(
  "Gabungan string 'Hello' dan 'World': " + gabungkanString("Hello", "World")
);
console.log(
  "Jumlah karakter dalam string 'OpenAI': " + hitungJumlahKarakter("OpenAI")
);
