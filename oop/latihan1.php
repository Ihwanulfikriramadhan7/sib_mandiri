<!-- latihan oop I -->
<?php

class Mobil {
//properti mobil
// variabel
    public $merk ;
    public $warna ;

//tambahan pembelajaran 
    // Constructor untuk mengatur nilai properti saat objek dibuat
        public function __construct($merk, $warna)
        {
            $this->merk = $merk;
            $this->warna = $warna;
        }

    // method untuk menampilkan informasi mobil
    // function
    public function tampilkaninfo(){
        echo "Merek Mobil: $this->merk, Warna: $this->warna"; 

    }

}
// membuat objek dari class mobil

$mobil1 = new Mobil("Toyota","Merah"); //membuat objek baru dari class Mobil
// $mobil1->merk = "toyota"; //mengatur properti merk
// $mobil1->warna = "merah"; // mengatur properti warna
$mobil1->tampilkaninfo(); // memanggil method tampilkaninfo
?>