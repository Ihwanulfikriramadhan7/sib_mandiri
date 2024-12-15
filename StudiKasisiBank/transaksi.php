<?php
// memanggil file bank.php
require 'bank.php';

// membuat objek dari class bank
$n1 = new Bank("1234", "Budi", 1000000); //membuat objek baru dari class Bank
$n2 = new Bank("1235", "Joko", 2000000); //membuat objek baru dari class Bank
$n3 = new Bank("1236", "Siti", 3000000); //membuat objek baru dari class Bank
$n4 = new Bank("1237", "Dadang", 4000000); //membuat objek baru dari class Bank

//panggul method setor dan tarik
$n1->setor(600000);
$n2->setor(300000);
$n3->setor(3000000);
$n4->setor(4000000);

$n1->tarik(200000);
$n2->tarik(900000);
$n3->tarik(2000000);
$n4->tarik(1000000);

// menampilkan informasi objek
echo '<h3 align="center">'.Bank::BANK.'</h3>';
$n1->cetak();
$n2->cetak();
$n3->cetak();
$n4->cetak();
echo 'Jumlah Nasabah : '.Bank::$jumlah.'orang';
?>