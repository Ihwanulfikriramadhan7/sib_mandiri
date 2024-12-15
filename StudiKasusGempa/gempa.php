<?php
class Gempa{
    private $lokasi;
    private $skala;

public function __construct($lokasi, $skala)
{
    $this->lokasi = $lokasi;
    $this->skala = $skala;
}
// method
private function dampak($skala){
    $this->skala = $skala;
    if($skala >= 0 && $skala <= 2)
        $dampak = "Tidak Terasa";
    elseif($skala >= 3 && $skala <= 4)
        $dampak = "Terasa Ringan";
    elseif($skala >= 5 && $skala <= 6)
        $dampak = "Terasa Sedang";
    elseif($skala >= 7 && $skala <= 8)
        $dampak = "Terasa Berat (Bangunan Roboh)";
    elseif($skala >= 9 && $skala <= 10)
        $dampak = "Terasa Sanggung (Bangunan Rusak dan berpotensi tsunami)";
    return $dampak;
}

// method cetal
public function cetak(){
    echo 'Lokasi : '.$this->lokasi;
    echo '<br/>Skala : '.$this->skala;
    echo '<br/>Dampak : '.$this->dampak($this->skala);
    echo '<hr/>';
}
}
?>