<!-- latihan oop III -->
<?php

class Mobil {
    protected $merk;

   

  // Constructor untuk mengatur nilai properti saat objek dibuat      
  public function __construct($merk)
  {
    $this->merk = $merk;
  }

  public function tampilkanInfo(){
    echo "Merek Mobil: $this->merk";
  }
}
    

    class MobilListrik extends Mobil {
        private $baterai;

        public function __construct($merk, $baterai)
        {
            parent::__construct($merk); //memanggil constructor class parent
            $this->baterai = $baterai;
        }

        public function tampilkanInfo(){
            echo "Merek Mobil: $this->merk, kapasistas Baterai: $this->baterai kWh";
        }
    }


// membuat objek dari class mobil
$mobilListrik = new MobilListrik("Toyota", 100);
$mobilListrik->tampilkanInfo();
?>