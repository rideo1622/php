<?php

$sayi = 5;

/*
if ($sayi == 5) {
  echo "Sayı 5'e eşittir.";
} elseif ($sayi == 6) {
  echo "Sayı 6'ya eşittir.";
} else {
  echo "Sayı 5'e ve 6'ya eşit değildir.";
}
*/

/*
// $sayi değişkeni 5'e eşit olduğu için switch ifadesi içindeki durumlar kontrol edilecek.
switch ($sayi) {
  case 5:
    // Eğer $sayi 5'e eşitse, aşağıdaki metin ekrana yazdırılacak.
    echo "Sayı 5'e eşittir.";
    break;
  case 6:
    // Eğer $sayi 6'ya eşitse, aşağıdaki metin ekrana yazdırılacak.
    echo "Sayı 6'ya eşittir.";
    break;
  default:
    // Yukarıdaki durumların hiçbiri gerçekleşmezse, yani $sayi ne 5'e ne de 6'ya eşitse, aşağıdaki metin ekrana yazdırılacak.
    echo "Sayı 5'e ve 6'ya eşit değildir.";
}
*/

$not = 50;

/*
if ($not >= 0 and $not < 25) {
  echo "Notunuz 0-25 arasındadır.";
} elseif ($not >= 25 and $not < 45) {
  echo "Notunuz 25-45 arasındadır.";
} elseif ($not >= 45 and $not < 70) {
  echo "Notunuz 45-70 arasındadır.";
} elseif ($not >= 70 and $not <= 85) {
  echo "Notunuz 70-85 arasındadır.";
} elseif ($not >= 85 and $not <= 100) {
  echo "Notunuz 85-100 arasındadır.";
} else {
  echo "Geçersiz not girdiniz.";
}
*/

/*
switch (true) {
  case $not >= 0 and $not < 25:
    echo "Notunuz 0-25 arasındadır.";
    break;
  case $not >= 25 and $not < 45:
    echo "Notunuz 25-45 arasındadır.";
    break;
  case $not >= 45 and $not < 70:
    echo "Notunuz 45-70 arasındadır.";
    break;
  case $not >= 70 and $not <= 85:
    echo "Notunuz 70-85 arasındadır.";
    break;
  case $not >= 85 and $not <= 100:
    echo "Notunuz 85-100 arasındadır.";
    break;
  default:
    echo "Geçersiz not girdiniz.";
}
*/

$ay = "Ocak";

switch ($ay) {
  case "Aralık":
  case "Ocak":
  case "Şubat":
    echo "Kış mevsimindesiniz.";
    break;
  case "Mart":
  case "Nisan":
  case "Mayıs":
    echo "İlkbahar mevsimindesiniz.";
    break;
  case "Haziran":
  case "Temmuz":
  case "Ağustos":
    echo "Yaz mevsimindesiniz.";
    break;
  case "Eylül":
  case "Ekim":
  case "Kasım":
    echo "Sonbahar mevsimindesiniz.";
    break;
  default:
    echo "Geçersiz ay girdiniz.";
}

?>