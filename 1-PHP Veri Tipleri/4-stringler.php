<?php

// https://www.w3schools.com/php/php_ref_string.asp referanslar

$ad = "Rıdvan";
$soyad = "Atmaca";
$yas = 19;

// $mesaj = "Benim adım " . $ad . " " . $soyad . " ve yaşım " . $yas;
$mesaj = "Ben {$ad} {$soyad}. Ben {$yas} yaşındayım.";

echo $mesaj . "<br>";
echo $mesaj[0] . "<br>"; //B harfi çıkar
echo $mesaj[2] . "<br>"; //n harfi çıkar

//String fonksiyonları
echo strlen($mesaj) . "<br>";
echo str_word_count($mesaj) . "<br>";
echo strtolower($mesaj) . "<br>";
echo strtoupper($mesaj) . "<br>";
echo ucfirst($mesaj) . "<br>";
echo str_replace(["Rıdvan", "19"], ["A.", "25"], $mesaj) . "<br>";

?>
