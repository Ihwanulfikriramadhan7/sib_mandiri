<!-- latihan switch Case -->

<?php
$nama = "Fitri Sulastri";
$nilai = 80;

// if multi condisi
if($nilai >= 85 && $nilai <= 100) $grade ="A";
elseif($nilai >= 75 && $nilai <85) $grade ="B";
elseif($nilai >= 60 && $nilai <75) $grade ="C";
elseif($nilai >= 30 && $nilai <60) $grade ="D";
elseif($nilai >= 0 && $nilai <30) $grade ="E";
else $grade = "";

// predikat dengan switch case
switch($grade){
    case 'A' : $predikat = 'Memuaskan'; break;
    case 'B' : $predikat = 'Bagus'; break;
    case 'C' : $predikat = 'Cukup'; break;
    case 'D' : $predikat = 'Kurang'; break;
    case 'E' : $predikat = 'Buruk'; break;
    default: $predikat = '';
}

echo "Nama Siswa : $nama <br/>";
echo "Nilai : $nilai <br/>";
echo "Grade Nilai : $grade <br/>";
echo "Predikat : $predikat";
?>
