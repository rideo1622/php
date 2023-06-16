<?php

$a = 18;
$b = 20;
$c = 5;

// 1 - a, b çarpımı ile a, b, c toplamının farkı nedir?
$sonuc = $a * $b - ($a + $b + $c);
echo $sonuc . "<br>";

// 2- a, b, c toplamının mod 3'ü nedir?
$sonuc = ($a + $b + $c) % 3;
echo $sonuc . "<br>";

// 3- b'nin c. kuvvetini hesaplayınız.
$sonuc = $b ** $c;
echo $sonuc . "<br>";

// 4- a için 58-100 arasında kontrolünü yapınız.
$kontrol = var_dump($a >= 58 and $a >= 100);
echo $kontrol . "<br>";

// 5- a için pozitif çift kontrolü yapınız.
$kontrol = var_dump($a >= 0 and $a % 2 == 0);
echo $kontrol . "<br>";

// 6- username ve password ile uygulama giriş kontrolü yapınız.
$username = "rideo";
$password = "12345";

$kontrol = ($username == "rideo " and $password == "12345");
echo $kontrol . "<br>";

// 7- a, b, c için en büyüklük kontrolü yapınız.

/* 
2 vize (%60) ve final (%40) notuna göre ortalama hesaplayınız.
a- Eğer ortalama 50 ve üstündeyse geçti, değilse kaldı yazdırınız.
b- Geçmek için ortalama 50 olsa bile final notu en az 50 olmalıdır.
c- Geçmek için finalden 70 alındığından ortalamanın önemi olmasın.
*/

?>
