<?php

date_default_timezone_set("Europe/Istanbul");

function topla()
{
  return 20 + 30; // return ile fonksiyondan değer döndürme
}

$sonuc = topla();
echo $sonuc;

echo "<hr>";

function yasHesapla()
{
  return sene() - 2003;
}

$yas = yasHesapla();
echo $yas;

echo "<hr>";

function sene()
{
  return date("Y");
}

echo sene();

echo "<hr>";

function saat()
{
  return date("H");
}
echo "Saat şu anda: " . saat() . "<br>";

function selamlama()
{
  if (saat() < 10) {
    return "Günaydın";
  } else {
    return "İyi Günler";
  }
}

echo selamlama();

?>
