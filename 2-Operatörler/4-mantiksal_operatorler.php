<?php

/* 
and => x ve y nin true olmasıyla sonuç true olur
or => x ve y nin herhangi bir tanesinin true olmasıyla sonuç true olur.
xor => x ve y nin bir tanesinin true ya da ikisinin de true olmasıyla sonuç false olur.
! => x in tersi
*/

// (yas >= 18)
// (mezuniyet == "ilkokul") => ehliyet alabilir.

$yas = 20;
$mezuniyet = "lise";

$sonuc = ($yas >= 18) and ($mezuniyet == "lise"); // Yaş 18 den büyük ve mezuniyet ilkokul ise ehliyet alabilir.
echo $sonuc . "<br>";

$sonuc = ($yas >= 18) or ($mezuniyet == "lise"); // Yaş 18 den büyük veya mezuniyet ilkokul ise ehliyet alabilir.

// and
/*
true & true => true
true & false => false
false & false => false
*/

// or
/*
true & true => true
true & false => true
false & false => false
*/

$sonuc = ($yas >= 18) and
  ($mezuniyet == "lise" or
    $mezuniyet == "üniversite" or
    $mezuniyet == "yükseklisans"); // Yaş 18 den büyük ve mezuniyet ilkokul ise ehliyet alabilir.
echo $sonuc . "<br>";

// xor
/*
true & true => false
true & false => true
false & false => false
*/

// not
$sonuc = !true;
echo var_dump($sonuc);

?>
