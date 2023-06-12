<?php

// Tüm fonksiyonların listesi: https://www.w3schools.com/php/php_ref_array.asp

// Diziye eleman tanımlama
$notlar = [60, 70, 40, 80, 80];
$plakalar = ["41" => "Kocaeli", 34 => "İstanbul", 06 => "Ankara"];

//print_r(array_flip($plakalar)); // key ve value değerlerini yer değiştirir
$indexes = array_rand($notlar, 2); // diziden rastgele bir eleman seçer
print_r($indexes) . "<br>"; // dizi elemanlarını ekrana yazdırır
echo $notlar[$indexes[0]]; // dizinin rastgele seçilen elemanının 0. (ilk) indexini ekrana yazdırır
echo $notlar[$indexes[1]]; // dizinin rastgele seçilen elemanının 1. (ikinci) indexini ekrana yazdırır

//print_r(array_count_values($notlar)); // dizideki elemanların kaç kez tekrar ettiğini gösterir

/*
// Diziye elemanı sona ekleme
array_push($notlar, 90);

// Diziye elemanı başa ekleme
array_unshift($notlar, 100);
*/

// Diziden eleman silme - sondan
// array_pop($plakalar);

// Diziden eleman silme - baştan
// array_shift($plakalar);

/*
// Dizi elemanlarını sıralama - artan
sort($notlar); // küçükten büyüğe
asort($plakalar); // value değerine göre küçükten büyüğe
ksort($plakalar); // key değerine göre küçükten büyüğe
*/

/*
// Dizi elemanlarını sıralama - azalan
rsort($notlar); // büyükten küçüğe
arsort($plakalar); // value değerine göre büyükten küçüğe
krsort($plakalar); // key değerine göre büyükten küçüğe
*/

/*
// string ifadeyi diziye çevirme
$str = "Kocaeli, 41";
$arr = explode(",", $str); // virgüle göre ayırma
*/

/*
// array'i string ifadeye çevirme

$arr = ["rideo", "mail@ridvanatmaca.com"];
$str = implode(",", $arr); // virgülle birleştirme

print_r($arr) . "<br>";
echo $str;
*/

/*
// Dizide kaç eleman olduğunu ekrana yazdırma
echo count($notlar) . "<br>";
echo count($plakalar) . "<br>";

//dizideki elemanları sıralama
print_r($notlar) . "<br>";
print_r($plakalar) . "<br>";
*/

?>
