<?php
function sapa($nama, $waktu) {
    $pesanBebas = array(
        "pagi" => "Semoga harimu menyenangkan!",
        "siang" => "Semangat terus!",
        "sore" => "Selamat beristirahat!",
        "malam" => "Selamat tidur nyenyak!"
    );

    $sapaan = match ($waktu) {
        "pagi" => "Selamat pagi, $nama! ",
        "siang" => "Selamat siang, $nama! ",
        "sore" => "Selamat sore, $nama! ",
        "malam" => "Selamat malam, $nama! ",
        default => "Waktu yang Anda masukkan tidak valid."
    };

    echo $sapaan . $pesanBebas[$waktu] ?? "";
}

sapa("Budi", "pagi");  // Output: Selamat pagi, Budi! Semoga harimu menyenangkan!
sapa("Ani", "siang"); // Output: Selamat siang, Ani! Semangat terus!
sapa("Candra", "malam"); // Output: Selamat malam, Candra! Selamat tidur nyenyak!
sapa("Dita", "sore"); // Output: Waktu yang Anda masukkan tidak valid.

?>