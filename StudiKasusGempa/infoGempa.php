<?php
require 'gempa.php';
// membuat objek dari class gempa
$g1 = new Gempa('Jawa Barat', 8);
$g2 = new Gempa('Jawa Timur', 5.4);
$g3 = new Gempa('Sulawesi', 1.9);
$g4 = new Gempa('Sulawesi', 7.5);


// memanggil method cetak
$g1->cetak();
$g2->cetak();
$g3->cetak();
$g4->cetak();

?>