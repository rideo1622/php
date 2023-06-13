<?php

// Tüm fonksiyonların listesi: https://www.w3schools.com/php/php_ref_array.asp

// Diziye eleman tanımlama
$notlar = [60, 70, 40, 80, 80];
$plakalar = ["41" => "Kocaeli", 34 => "İstanbul", 06 => "Ankara"];
<?php

// Tüm fonksiyonların listesi: https://www.w3schools.com/php/php_ref_array.asp

// Diziye eleman tanımlama
$notlar = [60, 70, 40, 80, 80]; // "notlar" adında bir dizi tanımlanıyor ve 5 elemanı bulunuyor.
$plakalar = ["41" => "Kocaeli", 34 => "İstanbul", 06 => "Ankara"]; // "plakalar" adında bir dizi tanımlanıyor ve 3 elemanı bulunuyor. Diziye key-value çiftleri olarak elemanlar ekleniyor.

//print_r(array_flip($plakalar)); // "array_flip" fonksiyonu, dizi içindeki key ve value değerlerini yer değiştirir. Bu kodda, "plakalar" dizisinin key ve value değerleri yer değiştirilerek ekrana yazdırılıyor.
$indexes = array_rand($notlar, 2); // "array_rand" fonksiyonu, bir diziden belirtilen sayıda rastgele eleman seçer. Bu kodda, "notlar" dizisinden 2 rastgele eleman seçiliyor ve seçilen elemanların indeksleri "indexes" değişkenine atanıyor.
print_r($indexes) . "<br>"; // "indexes" dizisi ekrana yazdırılıyor.
echo $notlar[$indexes[0]]; // "indexes" dizisinin ilk elemanının değeri, "notlar" dizisindeki ilgili indeksteki elemanı ekrana yazdırır.
echo $notlar[$indexes[1]]; // "indexes" dizisinin ikinci elemanının değeri, "notlar" dizisindeki ilgili indeksteki elemanı ekrana yazdırır.

//print_r(array_count_values($notlar)); // "array_count_values" fonksiyonu, bir dizideki elemanların kaç kez tekrar ettiğini gösterir. Bu kodda, "notlar" dizisindeki elemanların tekrar sayıları ekrana yazdırılıyor.

/*
// Diziye elemanı sona ekleme
array_push($notlar, 90); // "array_push" fonksiyonu, bir dizinin sonuna bir veya daha fazla eleman ekler. Bu kodda, "notlar" dizisinin sonuna 90 elemanı ekleniyor.

// Diziye elemanı başa ekleme
array_unshift($notlar, 100); // "array_unshift" fonksiyonu, bir dizinin başına bir veya daha fazla eleman ekler. Bu kodda, "notlar" dizisinin başına 100 elemanı ekleniyor.
*/

// Diziden eleman silme - sondan
// array_pop($plakalar); // "array_pop" fonksiyonu, bir dizinin sonundaki elemanı siler. Bu kodda, "plakalar" dizisinin son elemanı siliniyor.

// Diziden eleman silme - baştan
// array_shift($plakalar); // "array_shift" fonksiyonu, bir dizinin başındaki elemanı siler. Bu kod

da, "plakalar" dizisinin ilk elemanı siliniyor.

/*
// Dizi elemanlarını sıralama - artan
sort($notlar); // "sort" fonksiyonu, bir diziyi küçükten büyüğe doğru sıralar.
asort($plakalar); // "asort" fonksiyonu, bir diziyi value değerlerine göre küçükten büyüğe doğru sıralar.
ksort($plakalar); // "ksort" fonksiyonu, bir diziyi key değerlerine göre küçükten büyüğe doğru sıralar.
*/

/*
// Dizi elemanlarını sıralama - azalan
rsort($notlar); // "rsort" fonksiyonu, bir diziyi büyükten küçüğe doğru sıralar.
arsort($plakalar); // "arsort" fonksiyonu, bir diziyi value değerlerine göre büyükten küçüğe doğru sıralar.
krsort($plakalar); // "krsort" fonksiyonu, bir diziyi key değerlerine göre büyükten küçüğe doğru sıralar.
*/

/*
// string ifadeyi diziye çevirme
$str = "Kocaeli, 41"; // Bir string ifade tanımlanıyor.
$arr = explode(",", $str); // "explode" fonksiyonu, bir string ifadeyi belirtilen ayırıcıya göre parçalar ve bir dizi olarak döndürür. Bu kodda, "str" değişkeni virgül karakterine göre parçalanarak "arr" dizisine atanıyor.
*/

/*
// array'i string ifadeye çevirme

$arr = ["rideo", "mail@ridvanatmaca.com"]; // Bir dizi tanımlanıyor.
$str = implode(",", $arr); // "implode" fonksiyonu, bir diziyi belirtilen birleştirici ile birleştirerek bir string ifade olarak döndürür. Bu kodda, "arr" dizisi virgül karakteri ile birleştirilerek "str" değişkenine atanıyor.

print_r($arr) . "<br>"; // "arr" dizisi ekrana yazdırılıyor.
echo $str; // "str" değişkeni ekrana yazdırılıyor.
*/

/*
// Dizide kaç eleman olduğunu ekrana yazdırma
echo count($notlar) . "<br>"; // "count" fonksiyonu, bir dizideki elemanların sayısını döndürür ve ekrana yazdırır.
echo count($plakalar) . "<br>"; // "plakalar" dizisindeki eleman sayısı ekrana yazdırılıyor.

//dizideki elemanları sıralama
print_r($notlar) . "<br>"; // "notlar" dizisi ekrana yazdırılıyor.
print_r($plakalar) . "<br>"; // "plakalar" dizisi ekrana yazdırılıyor.
*/

?>
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
