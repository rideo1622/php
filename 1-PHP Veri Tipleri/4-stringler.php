<?php

// https://www.w3schools.com/php/php_ref_string.asp referanslar

$ad = "Rıdvan";
$soyad = "Atmaca";
$yas = 19;

// $mesaj = "Benim adım " . $ad . " " . $soyad . " ve yaşım " . $yas;
$mesaj = "Ben {$ad} {$soyad}. Ben {$yas} yaşındayım.";

echo $mesaj . "<br>"; // Mesajı ekrana yazdırır
echo $mesaj[0] . "<br>"; // İlk karakteri (B) ekrana yazdırır
echo $mesaj[2] . "<br>"; // Üçüncü karakteri (n) ekrana yazdırır

// String fonksiyonları
echo strlen($mesaj) . "<br>"; // Mesajın karakter sayısını ekrana yazdırır
echo str_word_count($mesaj) . "<br>"; // Mesajdaki kelime sayısını ekrana yazdırır
echo strtolower($mesaj) . "<br>"; // Mesajı küçük harflere dönüştürüp ekrana yazdırır
echo strtoupper($mesaj) . "<br>"; // Mesajı büyük harflere dönüştürüp ekrana yazdırır
echo ucfirst($mesaj) . "<br>"; // Mesajın ilk harfini büyük harf yapar ve ekrana yazdırır
echo str_replace(["Rıdvan", "19"], ["A.", "25"], $mesaj) . "<br>"; // Mesajdaki "Rıdvan" ve "19" ifadelerini sırasıyla "A." ve "25" ile değiştirip ekrana yazdırır

?>
