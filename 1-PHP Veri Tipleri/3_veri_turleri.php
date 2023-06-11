<?php

$urunAdi = "iPhone 15";
echo $urunAdi . " : " . gettype($urunAdi);

echo "<br>";

$fiyat = 40000;
echo $fiyat . " : " . gettype($fiyat);

echo "<br>";

$kdvOrani = 0.18;
echo $kdvOrani . " : " . gettype($kdvOrani);

echo "<br>";

$stoktaMi = true;
echo $stoktaMi . " : " . gettype($stoktaMi);

echo "<br>";

$a = (float) 20;
echo gettype($a);

echo "<br>";

$b = (int) 20.5;
echo gettype($b);
echo $a;

echo "<br>";

$a = "20";
echo gettype($a);

echo "<br>";

$a = (int) "a20";
echo gettype($a);
echo $a;

echo "<br>";

$a = (int) "20a50";
echo gettype($a);
echo $a;
echo "<br>";

$a = (int) true;
echo gettype($a);
echo $a;

?>
