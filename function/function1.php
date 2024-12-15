<?php
$str = "Belajar PHP itu gampang";
$str = strtoupper($str);
echo $str;
echo'<br/>';

$str2 = "belajar PHP itu gampang, Bukan";
$str2 = strtolower($str2);
echo $str2;
echo'<br/>';

$str3 = "belajar PHP itu gampang, Bukan";
$str3 = ucfirst($str3);
echo $str3;

echo'<br/>';
$str4 = "belajar PHP itu gampang, Bukan";
$str4 = ucwords($str4);
echo $str4;
?>