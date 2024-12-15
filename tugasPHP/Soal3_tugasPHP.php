<?php
function sapa($nama = "Tamu", $waktu = null) {
    $pesanBebas = [
        "pagi" => "Semoga harimu menyenangkan!",
        "siang" => "Semangat terus!",
        "sore" => "Selamat beristirahat!",
        "malam" => "Selamat tidur nyenyak!"
    ];

    $sapaan = match ($waktu) {
        "pagi" => "Selamat pagi, $nama! ",
        "siang" => "Selamat siang, $nama! ",
        "sore" => "Selamat sore, $nama! ",
        "malam" => "Selamat malam, $nama! ",
        default => "Halo, $nama! Selamat datang!"
    };

    echo $sapaan . ($waktu && isset($pesanBebas[$waktu]) ? $pesanBebas[$waktu] : "");
}

sapa(); // Output: Halo, Tamu! Selamat datang!
sapa("Budi"); // Output: Halo, Budi! Selamat datang!
sapa("Ani", "siang"); // Output: Selamat siang, Ani! Semangat terus!
sapa("", "pagi"); // Output: Selamat pagi, Tamu! Semoga harimu menyenangkan!


?>