<?php

$sayi1 = 5;
$sayi2 = 3;

//Dört işlem
echo "sonuç: " . ($sayi1 + $sayi2) . "<br>";
echo "sonuç: " . ($sayi1 - $sayi2) . "<br>";
echo "sonuç: " . $sayi1 * $sayi2 . "<br>";
echo "sonuç: " . $sayi1 / $sayi2 . "<br>";

//İşlem önceliği (değiştirme)
$sayi3 = 8;
echo "sonuç: " . ($sayi1 + $sayi2) / $sayi3 . "<br>";

// Bir değerin tamsayı olup olmadığını kontrol eder
echo var_dump(is_int(5)) . "<br>";
echo var_dump(is_int(5.2)) . "<br>";

// Bir değerin ondalık sayı olup olmadığını kontrol eder
echo var_dump(is_float(5)) . "<br>";
echo var_dump(is_float(5.2)) . "<br>";

// Bir değerin sayısal olup olmadığını kontrol eder
echo var_dump(is_numeric("a5")) . "<br>";

// Bir sayının hehr zaman pozitifini alır
echo abs(-5) . "<br>";

// Sayıyı yukarı yuvarlar
echo ceil(5.2) . "<br>";

// Sayıyı aşağı yuvarlar
echo floor(5.2) . "<br>";

// Sayıyı en yakına yuvarlar
echo round(5.2) . "<br>";
echo round(5.6) . "<br>";
echo round(5.5) . "<br>";

// Sayının karekökünü alır
echo sqrt(16) . "<br>";

// Sayının üssünü alır
echo pow(5, 2) . "<br>";

// Değerler içinden en büyük olanı alır
echo max(5, 2, 10, 3) . "<br>";
//Değerler içinden en küçük olanı alır
echo min(5, 2, 10, 3) . "<br>";

?>
