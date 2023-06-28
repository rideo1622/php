<?php

// Fonksiyon tanımlama
function merhabaDunya()
{
  for ($i = 0; $i < 5; $i++) {
    echo "Merhaba Dünya!" . "<br>";
  }
}

// Fonksiyon çağırma
merhabaDunya();

function topla()
{
  $a = 10;
  $b = 20;
  echo $a + $b;
}

topla();

?>
