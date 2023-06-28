<?php

function selamlama($isim = "Misafir", $mesaj = "Selam")
{
  return "$mesaj $isim" . "<br>";
}

echo selamlama("Ahmet", "Merhaba");
echo selamlama("Ahmet");
echo selamlama();

echo "<hr> ";

function kareAl($taban = 3, $us = 2)
{
  return $taban ** $us . "<br>";
}

echo kareAl(2, 3);
echo kareAl(2);
echo kareAl();

?>
