<?php

function toplam(...$sayilar)
{
  $toplam = 0;
  foreach ($sayilar as $sayi) {
    $toplam += $sayi;
  }
  return $toplam . "<br>";
}

echo toplam(10, 20, 30, 40);
echo toplam(10, 20, 30, 40, 50, 60, 70);
echo toplam(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);

?>
