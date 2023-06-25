<?php

$ogrenciler = ["Ali", "Ayşe", "Mehmet", "Ahmet", "Fatma"];

foreach ($ogrenciler as $ogrenci) {
  echo $ogrenci . "<br>";
}

echo "<hr>";

/*
$urunler = [["Galaxy A14", 7500], ["Galaxy A15", 8500], ["Galaxy A16", 9500]];

foreach ($urunler as $urun) {
  echo $urun[0] . " - " . $urun[1] . "<br>";
}
*/

$urunler = [
  "100" => ["Ürün Modeli" => "Galaxy A14", "Ürün Fiyatı" => 7500],
  "200" => ["Ürün Modeli" => "Galaxy A34", "Ürün Fiyatı" => 8500],
  "300" => ["Ürün Modeli" => "Galaxy A54", "Ürün Fiyatı" => 9500],
];

foreach ($urunler as $key => $value) {
  echo $key .
    ": " .
    $value["Ürün Modeli"] .
    " - " .
    $value["Ürün Fiyatı"] .
    "<br>";
}

?>
