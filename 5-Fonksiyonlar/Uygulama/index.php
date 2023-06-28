<?php

# 1. Soru - Kendisine gönderilen bir kelimeyi belirtilen kez gösteren fonksiyonu yazınız.

function yazdir($kelime, $adet)
{
  for ($i = 0; $i < $adet; $i++) {
    echo $kelime . "<br>";
  }
}

yazdir("Merhaba", 5);

echo "<hr>";

# 2. Soru - Dikdörtgen alan ve çevresini hesaplayan fonksiyonu yazınız.

function dikdortgen($kisaK, $uzunK)
{
  $alan = $kisaK * $uzunK;
  $cevre = ($kisaK + $uzunK) * 2;
  return "Çevre: $cevre" . "<br>" . "Alan: $alan";
}

echo dikdortgen(2, 4);

echo "<hr>";

# 3. Soru - Yazı tura uygulamasını fonksiyon kullanarak yazınız.

function yaziTura()
{
  $sayi = rand(1, 2);
  if ($sayi < 2) {
    echo "Yazı";
  } else {
    echo "Tura";
  }
}
yaziTura();

echo "<hr>";

# 4. Soru - Kendisine gönderilen bir sayının tam bölenlerini bir diziyle döndüren fonksiyonu yazınız.

function tamBolenleriBul($sayi)
{
  $tamBolenler = [];
  for ($i = 2; $i < $sayi; $i++) {
    if ($sayi % $i == 0) {
      array_push($tamBolenler, $i);
    }
  }

  return $tamBolenler;
}

print_r(tamBolenleriBul(100));

?>
