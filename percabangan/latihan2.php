<!-- latihan ternary -->
<?php
// deklarasi & inisialisasi
$nama = "Fitri Sulastri";
$nilai = 90;

// ternary
$ket = ($nilai >= 60) ? "Lulus" : "Gagal";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary</title>
</head>
<body>
    <h3>Nama Siswa <?= $nama?></h3>
    <h3>Nilai <?= $nilai?></h3>
    <h3>Keterangan <?=$ket?></h3>
</body>
</html>