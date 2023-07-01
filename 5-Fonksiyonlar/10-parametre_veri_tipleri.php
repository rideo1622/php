<?php

declare(strict_types=1); // Bu satırı ekleyerek fonksiyonlara gelen parametrelerin veri tiplerini belirleyebiliriz.
function toplama(int $sayi1, int $sayi2, bool $isActive, array $sayilar): float
{
  // Bu satırda gelen parametrelerin veri tiplerini belirledik.
  return $sayi1 + $sayi2 + 1.3;
}

echo toplama(5, 10, true, [10, 20]);

?>
