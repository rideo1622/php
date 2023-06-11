<?php

$plakalar = ["41", "53", "34"]; // "41", "53" ve "34" plaka numaralarını içeren bir dizi oluşturuldu.
$sehirler = ["Kocaeli", "Rize", "İstanbul"]; // "Kocaeli", "Rize" ve "İstanbul" şehirlerini içeren bir dizi oluşturuldu.

echo "$plakalar[0]  :  $sehirler[0]" . "<br>"; // "41: Kocaeli" çıktısı verir.
echo "$plakalar[1]  :  $sehirler[1]" . "<br>"; // "53: Rize" çıktısı verir.
echo "$plakalar[2]  :  $sehirler[2]" . "<br>"; // "34: İstanbul" çıktısı verir.

$plaka_bilgileri = [
  "41" => "Kocaeli",
  "53" => "Rize",
  "34" => "İstanbul",
]; // Plaka numaraları ve şehirler arasında ilişkiyi gösteren bir ilişkisel dizi oluşturuldu.

echo $plaka_bilgileri["41"] . "<br>"; // "Kocaeli" çıktısı verir.
echo $plaka_bilgileri["53"] . "<br>"; // "Rize" çıktısı verir.
echo $plaka_bilgileri["34"] . "<br>"; // "İstanbul" çıktısı verir.

// İsimler ve telefon numaraları arasında ilişkiyi gösteren bir ilişkisel dizi oluşturuldu.
$telefon_rehberi = [
  "Ali" => "0500 000 00 00",
  "Ahmet" => "0501 000 00 00",
  "Ayşe" => "0502 000 00 00",
]; // İsimler ve telefon numaraları arasında ilişkiyi gösteren bir ilişkisel dizi oluşturuldu.

echo $telefon_rehberi["Ali"]; // Ali'nin telefon numarasını ekrana yazdırır.

?>
