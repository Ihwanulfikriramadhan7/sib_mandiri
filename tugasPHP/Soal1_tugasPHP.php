<?php
function sapa($nama, $waktu) {
    // Membuat array dengan berbagai pilihan sapaan berdasarkan waktu
    $sapaan = [
        "pagi" => "Selamat pagi, ",
        "siang" => "Selamat siang, ",
        "sore" => "Selamat sore, ",
        "malam" => "Selamat malam, "
    ];

    // Mengecek apakah waktu yang diberikan ada dalam array sapaan
    if (array_key_exists($waktu, $sapaan)) {
        // Jika ada, tampilkan sapaan beserta nama
        echo $sapaan[$waktu] . $nama . "!";
    } else {
        // Jika tidak ada, tampilkan pesan kesalahan
        echo "Waktu yang Anda masukkan tidak valid.";
    }
}

sapa("Budi", "pagi"); // Output: Selamat pagi, Budi!
sapa("Ani", "sore"); // Output: Selamat sore, Ani!
sapa("Candra", "malam"); // Output: Selamat malam, Candra!
sapa("Dita", "Selamat siang"); // Output: Waktu yang Anda masukkan tidak valid.

?>