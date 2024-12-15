<!-- latihan if else -->
<?php
// deklarasi dan inisialisasi varibel
$nama = "ihwanul fikri ramadhan";
$totalBelanja = 150000;
$ket ="";

// stuktur kendali IF
if($totalBelanja > 100000){
    $ket = "Selamat $nama anda mendapatkan hadia";
}else{
    $ket = "Terima kasih $nama sudah berbelanja";
}
echo "Nama pelanggan".$nama."<br/>";
echo "Total belanja: Rp.".number_format($totalBelanja,0,',','.')."<br/>";
echo "Keterangan".$ket;
?>