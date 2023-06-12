<?php

$ad = "Rıdvan";
$soyad = "Atmaca";

echo $ad . " " . $soyad;

echo "<br>";

$sayi1 = 50;
$sayi2 = 100;

// $sayi3 = 150; => Yanlış
// Değişken isminde boşluk karakter olamaz.

/*
    $1sayi = 50;
    Değişken ismi sayı ile başlayamaz. 
*/

// Büyük küçük harf duyarlılığı vardır.
$Sayi1 = 70;

// Türkçe karakter kullanılmaz.

echo $Sayi1 . " " . $sayi2;

?>
