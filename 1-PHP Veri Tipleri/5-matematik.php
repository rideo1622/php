<?php

// referans: https://www.w3schools.com/php/php_ref_math.asp

$sayi1 = 5;
$sayi2 = 3;

//Dört işlem
echo "sonuç: " . ($sayi1 + $sayi2) . "<br>";  // $sayi1 ve $sayi2'nin toplamını ekrana yazdırır
echo "sonuç: " . ($sayi1 - $sayi2) . "<br>";  // $sayi1'den $sayi2'yi çıkarır ve sonucu ekrana yazdırır
echo "sonuç: " . $sayi1 * $sayi2 . "<br>";    // $sayi1 ve $sayi2'nin çarpımını ekrana yazdırır
echo "sonuç: " . $sayi1 / $sayi2 . "<br>";    // $sayi1'i $sayi2'ye böler ve sonucu ekrana yazdırır

//İşlem önceliği (değiştirme)
$sayi3 = 8;
echo "sonuç: " . ($sayi1 + $sayi2) / $sayi3 . "<br>";  // ($sayi1 + $sayi2)'yi $sayi3'e böler ve sonucu ekrana yazdırır

// Bir değerin tamsayı olup olmadığını kontrol eder
echo var_dump(is_int(5)) . "<br>";    // 5 tamsayı olduğu için true değerini ekrana yazdırır
echo var_dump(is_int(5.2)) . "<br>";  // 5.2 ondalık bir sayı olduğu için false değerini ekrana yazdırır

// Bir değerin ondalık sayı olup olmadığını kontrol eder
echo var_dump(is_float(5)) . "<br>";    // 5 tamsayı olduğu için false değerini ekrana yazdırır
echo var_dump(is_float(5.2)) . "<br>";  // 5.2 ondalık bir sayı olduğu için true değerini ekrana yazdırır

// Bir değerin sayısal olup olmadığını kontrol eder
echo var_dump(is_numeric("a5")) . "<br>";  // "a5" bir sayısal ifade olmadığı için false değerini ekrana yazdırır

// Bir sayının her zaman pozitifini alır
echo abs(-5) . "<br>";  // -5'in pozitif değerini ekrana yazdırır

// Sayıyı yukarı yuvarlar
echo ceil(5.2) . "<br>";  // 5.2'yi yukarı yuvarlayarak 6'yı ekrana yazdırır

// Sayıyı aşağı yuvarlar
echo floor(5.2) . "<br>";  // 5.2'yi aşağı yuvarlayarak 5'i ekrana yazdırır

// Sayıyı en yakına yuvarlar
echo round(5.2) . "<br>";  // 5.2'yi en yakın tam sayıya yuvarlayarak 5'i ekrana yazdırır
echo round(5.6) . "<br>";  // 5.6'yı en yakın tam sayıya yuvarlayarak 6'yı ekrana yazdırır
echo round(5.5) . "<br>";  // 5.5'i en yakın tam sayıya yuvarlayarak 6'yı ekrana yazdırır

// Sayının karekökünü alır
echo sqrt(16) . "<br>";  // 16'nın karekökünü ekrana yazdırır

// Sayının üssünü alır
echo pow(5, 2) . "<br>";  // 5'in karesini ekrana yazdırır

// Değerler içinden en büyük olanı alır
echo max(5, 2, 10, 3) . "<br>";  // 5, 2, 10 ve 3 arasından en büyük olanı ekrana yazdırır
//Değerler içinden en küçük olanı alır
echo min(5, 2, 10, 3) . "<br>";  // 5, 2, 10 ve 3 arasından en küçük olanı ekrana yazdırır

?>
