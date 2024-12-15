<!-- latihan oop III -->
<?php

class Mobil {
    const VERSI = "1.0";//constan
    private static $jumlahMobil = 0; //static properti

  // Constructor untuk mengatur nilai properti saat objek dibuat      
  public function __construct()
  {
    self:: $jumlahMobil++; //akses kestatic property
  }

  public static function getjumlahMobil(){
    return self::$jumlahMobil;
  }
}
       


// membuat objek dari class mobil
echo "VERSI Mobil: ".Mobil::VERSI."<br/>";
$mobil1 = new Mobil();
$mobil2 = new Mobil();
$mobil3 = new Mobil();
$mobil4 = new Mobil();
$mobil5 = new Mobil();
echo "Jumlah Mobil : ". Mobil::getjumlahMobil();
//$mobil1 = new Mobil("Toyota","Merah"); //membuat objek baru dari class Mobil


?>