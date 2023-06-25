<?php

$ogrenciler = ["Ali", "Ayşe", "Mehmet", "Ahmet"];

/*
Klasik yöntem
echo $ogrenciler[0] . "<br>";
echo $ogrenciler[1] . "<br>";
echo $ogrenciler[2] . "<br>";
*/

echo "<h1> For Döngüsü ile Yazdırma </h1>";
// Döngü ile yazdırma
for ($i = 0; $i < count($ogrenciler); $i += 1) {
  // count() dizinin eleman sayısını dinamik olarak verir
  echo $ogrenciler[$i] . "<br>";
}

echo "<hr>";

echo "<h1> While Döngüsü ile Yazdırma </h1>";

$i = 0;
while ($i < count($ogrenciler)) {
  echo $ogrenciler[$i] . "<br>";
  $i += 1;
}

echo "<hr>";

$urunler = [
  "100" => ["Ürün Modeli" => "Galaxy A14", "Ürün Fiyatı" => 7500],
  "200" => ["Ürün Modeli" => "Galaxy A34", "Ürün Fiyatı" => 8500],
  "300" => ["Ürün Modeli" => "Galaxy A54", "Ürün Fiyatı" => 9500],
];

$keys = array_keys($urunler);

for ($i = 0; $i < count($urunler); $i++) {
  print_r($urunler[$keys[$i]]["Ürün Modeli"]);
  echo " - ";
  print_r($urunler[$keys[$i]]["Ürün Fiyatı"]);
  echo "<br>";
}

?>
