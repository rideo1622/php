<?php

$a;

$b = 20;
$a = 20;
$c = $a;
$d = ($a + 10) * 3; // $d önce $a + 10 işlemini yapar, sonra 3 ile çarpar.

//$a = $a + $b; //$a değişkenine $a + $b işleminin sonucu atanıyor.

/*
$a += $b; // $a = $a + $b ile aynı işlemi (yukarıdaki satırdakiyle) yapar.
$a -= $b; // $a = $a - $b
$a *= $b; // $a = $a * $b
$a /= $b; // $a = $a / $b
$a %= $b; // $a = $a % $b
$a **= $b; // $a = $a ** $b
*/
$a .= $b; // $a = $a . $b

$ad = "Rıdvan ";
$soyad = "Atmaca";
$ad .= $soyad; // $ad = $ad . $soyad

echo $a . "<br>" . $b . "<br>" . $c . "<br>" . $d . "<br>" . $ad;

?>