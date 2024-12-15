<?php
class Bank{
    // properti atau variabel
    protected $norek;
    public $nama;
    private $saldo;


    // properti static dan constanta
    static $jumlah = 0;
    const BANK = 'Bank Syariah Nurul Fikri';

    // method
    public function __construct($no, $nasabah, $saldo)
    {
        $this->norek = $no;
        $this->nama = $nasabah;
        $this->saldo = $saldo;
        self::$jumlah++;
    }
    // method stor
    public function setor($uang){
        // $this->saldo = $this->saldo + $uang;
        $this->saldo += $uang; //fungsinya sama seperti code diatas
    }
    public function tarik($uang){
        // $this->saldo = $this->saldo - $uang;
        $this->saldo -= $uang;//fungsinya sama seperti code diatas
    }
    public function cetak(){
        echo '<b><u>'.self::BANK.'</u></b><br/>';
        echo 'No. Rekening : '.$this->norek.'<br/>';
        echo 'Nasabah : '.$this->nama.'<br/>';
        echo 'Saldo : Rp.'.number_format($this->saldo,0,',','.').'<br/>';
        echo '<hr/>';
    }
}
?>