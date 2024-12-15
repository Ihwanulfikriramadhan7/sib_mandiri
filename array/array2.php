<?php

$b1 =['kode' => 'B001', 'buah' => 'appel', 'harga' => 10000];
$b2 =['kode' => 'B002', 'buah' => 'anggur', 'harga' => 15000];
$b3 =['kode' => 'B003', 'buah' => 'belimbing', 'harga' => 20000];
$b4 =['kode' => 'B004', 'buah' => 'durian', 'harga' => 50000];
$b5 =['kode' => 'B005', 'buah' => 'melon', 'harga' => 250000];


// array associative
$buah2an = [$b1, $b2, $b3, $b4, $b5];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buah-Buahan </title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>Kode</th>
                <th>Buah</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($buah2an as $b){
                $warna = $no % 2 == 1 ? 'khaki' : 'beige';
            ?>
            <tr bgcolor="<?= $warna; ?>">
                <td><?= $no++; ?></td>
                <td><?= $b['kode']; ?></td>
                <td><?= $b['buah']; ?></td>
                <td><?= $b['harga']; ?></td>
            </tr>
            <?php $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>