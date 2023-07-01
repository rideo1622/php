<?php
// reference
// value

function toplam(&$sayi)
{
  $sayi += 10;
  echo $sayi . "<br>";
}

$ornekSayi = 15;
toplam($ornekSayi);

echo $ornekSayi . "<br>";

// value
// 001122 => 15
// 001123 => 15

function yasHesaplama(&$tarihler)
{
  for ($i = 0; $i < count($tarihler); $i++) {
    $tarihler[$i] = 2003 - $tarihler[$i];
  }
  return $tarihler;
}

$liste = [1990, 1995, 2000];

echo "<pre>";
print_r(yasHesaplama($liste));
echo "</pre>";

echo "<pre>";
print_r($liste);
echo "</pre>";
?>
