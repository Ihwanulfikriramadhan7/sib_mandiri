<?php

$ar_buah = ["Mangga","Apel","Jeruk","Durian","Melon"];
$ar_buah[3] = "Anggur";//BUAH anggur ganti dengan jeruk
var_dump($ar_buah);

unset($ar_buah[3]);//menghapus buah durian
$ar_buah[] = "Semangka"; //menambah buah semangka
$ar_buah[] = "Naga";
$ar_buah[] = "Pepaya";
echo'---CETAK KEY dari array---<br/>';
foreach($ar_buah as $id => $buah){
echo '<br?> key array buah :'.$id;
}
echo '<br/>----CETAK ISI ARRAY---<br/>';
foreach($ar_buah as $buah){
    echo '<br/>'.$buah;
}

echo '<br/>----CETAK ISI ARRAY---<br/>';
foreach($ar_buah as $buah){
    echo '<br/>buah dengan id:'.$id.'adalah buah :'.$buah;
}
?>