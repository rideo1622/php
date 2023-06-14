<?php

// Referans: https://www.w3schools.com/php/php_operators.asp

$a = 2;
$b = 5;

echo $a + $b;
echo "<br>";

echo $a - $b;
echo "<br>";

echo $a * $b;
echo "<br>";

echo $a / $b;
echo "<br>";

echo $a % $b; // mod alma, bir sayıyı belirli bir sayıya böldüğümüzde kalanı bulmak için kullanılır.
echo "<br>";

echo $a ** $b; // üs alma işlemi
echo "<br>";

/*
echo "artırılmadan yazılan: " . $a++; // $a değişkenini yazdırır ve telrar yazdırılırsa 1 arttırır.
echo " artırdıktan sonra yazılan: " . $a;
echo "<br>";
*/

echo ++$a; // $a değişkenini direkt olarak 1 arttırır ve yazdırır.
echo "<br>";

echo $a--; // $a değişkenini yazdırır ve tekrar yazdırılırsa 1 azaltır.
echo "<br>";

echo $a; // $a değişkeninin değerini yazdırır.
echo "<br>";

?>
