<!-- latihan oop II -->
<?php

class Mobil {
//properti mobil
// variabel
    private $merk ;
    private $warna ;

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

     // method baru merk
     public function getMerk(){
        return $this->merk;
     }

    //  method baru warna
    public function setWarna($warna){
        $this->warna = $warna;
    }


}
       


// membuat objek dari class mobil

$mobil1 = new Mobil("Toyota","Merah"); //membuat objek baru dari class Mobil
// $mobil1->tampilkaninfo(); // memanggil method tampilkaninfo

echo $mobil1->getMerk();

?>