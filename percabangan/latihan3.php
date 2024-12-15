<!-- latihan multiKodisi -->

<?php
$nama = "Fitri Sulastri";
$nilai = 90;

// if multi condisi
if($nilai >= 85 && $nilai <= 100) $grade ="A";
elseif($nilai >= 75 && $nilai <85) $grade ="B";
elseif($nilai >= 60 && $nilai <75) $grade ="C";
elseif($nilai >= 30 && $nilai <60) $grade ="D";
elseif($nilai >= 0 && $nilai <30) $grade ="E";
else $grade = "";
echo "Nama Siswa : $nama <br/>";
echo "Nilai : $nilai <br/>";
echo "Grade Nilai : $grade <br/>";
?>