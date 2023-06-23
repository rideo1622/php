<?php

//Referans: https://www.php.net/manual/tr/language.operators.comparison.php

/*
Karşılaştırma Operatörleri
== Eşitse
=== Eşitse ve türleri de aynıysa
!= Eşit değilse
<> Eşit değilse
!== Eşit değilse veya türleri de aynı değilse
> Büyükse
< Küçükse
>= Büyük veya eşitse
<= Küçük veya eşitse
<=> Soldaki değer sağdaki değerden büyükse 1, eşitse 0, küçükse -1 değerini döndürür.
*/

$a = 10;
$b = 20;
$c = 10;
$username = "ridvanatmaca";
$username2 = "RidvanAtmaca";

$sonuc = $a == $b; // $a ve $b birbirine eşit mi?s
$sonuc_user = $username == "ridvanatmaca"; // $username değişkeni "ridvanatmaca"ya eşit mi?
$sonucUser = $username2 != "RidvanAtmaca"; // $username2 değişkeni "RidvanAtmaca" değil mi?
$cveb = $c === $a; // $c ve $a birbirine eşit mi? ve türleri de aynı mı?

echo var_dump($sonuc_user) . "<br>"; // var_dump() fonksiyonu ile değişkenin türünü ve değerini ekrana yazdırabiliriz.
echo var_dump($sonuc) . "<br>"; // $sonuc değişkeninin türünü ve değerini ekrana yazdırır.
echo var_dump($sonucUser) . "<br>"; // $sonucUser değişkeninin türünü ve değerini ekrana yazdırır.
echo var_dump($cveb) . "<br>"; // $cveb değişkeninin türünü ve değerini ekrana yazdırır.
echo var_dump($a != $b) . "<br>"; // $a değişkeni $b değişkenine eşit değil mi?
echo var_dump($a !== $b) . "<br>"; // $a değişkeni $b değişkenine eşit değil mi? ve türleri de aynı değil mi?
echo var_dump($c != $a) . "<br>"; // $c değişkeni $a değişkenine eşit değil mi?
echo var_dump($a >= $b) . "<br>"; // $a değişkeni $b değişkeninden büyük veya eşit mi?
echo var_dump($a <= $b) . "<br>"; // $a değişkeni $b değişkeninden küçük veya eşit mi?
echo ($a <=> $b) . "<br>"; // $a değişkeni $b değişkeninden büyükse 1, eşitse 0, küçükse -1 değerini döndürür.

?>
