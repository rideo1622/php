<?php

function selamlama($parametre)
{
  // parametre
  return "Merhaba " . "$parametre" . "<br>"; // return ile fonksiyondan değer döndürme
}

echo selamlama("JS");
echo selamlama("PHP");
echo selamlama("JS");

echo "<hr>";

function toplama($sayi1, $sayi2)
{
  return "Toplam Sonucu: " . ($sayi1 + $sayi2) . "<br>";
}

echo toplama(30, 60);
echo toplama(150, 658);

echo "<hr>";

function yasHesaplama($dogumYili)
{
  return date("Y") - $dogumYili;
}

echo "Yaşınız: " . yasHesaplama(2003) . "<br>";
echo "Yaşınız: " . yasHesaplama(1998) . "<br>";
echo "Yaşınız: " . yasHesaplama(1970) . "<br>";
echo "Yaşınız: " . yasHesaplama(1967) . "<br>";

echo "<hr>";

function emeklilikHesaplama($dogumYili, $isim)
{
  $yas = yasHesaplama($dogumYili);
  $kalanSure = 65 - $yas;

  if ($kalanSure > 0) {
    return "$isim, Emekli Olmanıza $kalanSure yıl kaldı" . "<br>";
  } else {
    return "$isim, Zaten $kalanSure yıl önce emekli oldunuz" . "<br>";
  }
}

echo emeklilikHesaplama(2001, "Ahmet");
echo emeklilikHesaplama(1981, "Mert");
echo emeklilikHesaplama(1960, "Ayşe");
echo emeklilikHesaplama(1955, "Fatma");

?>