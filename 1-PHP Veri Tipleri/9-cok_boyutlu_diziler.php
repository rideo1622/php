<?php

// İç içe diziler oluşturmak mümkündür. Bu dizilere çok boyutlu diziler denir.
$ogrenciA = ["Rıdvan Atmaca", [50, 80, 90]];
$ogrenciB = ["Açelya Bazan", [50, 80, 90]];

// Öğrencinin not ortalamasını hesaplama işlemini tanımlama
$ogrenciB_ortalama = ($ogrenciB[1][0] + $ogrenciB[1][1] + $ogrenciB[1][2]) / 3;

// Öğrenci A'nın bilgilerini ekrana yazdırma
echo $ogrenciA[0] . "<br>";
// Öğrenci A'nın 1. index numarasındaki 1. ögeye erişme ve ekrana yazdırma
echo $ogrenciA[1][0] . "<br>";
// Öğrenci A'nın 1. index numarasındaki 2. ögeye erişme ve ekrana yazdırma
echo $ogrenciA[1][1] . "<br>";
// Öğrenci A'nın 1. index numarasındaki 3. ögeye erişme ve ekrana yazdırma
echo $ogrenciA[1][2] . "<br>";

// Öğrenci B'nin önce bilgilerini sonra not ortalamasını ekrana yazdırma
echo $ogrenciB[0] .
  " adlı öğrencinin not ortalaması: " .
  $ogrenciB_ortalama .
  "<br>";

echo "<hr>";

// ogrenciC dizisini tanımlama
$sinif = [
  "100" => [
    "Ad" => "Mehmet",
    "Soyad" => "Yılmaz",
    "notlar" => [
      "Matematik" => [50, 70, 80],
      "Fizik" => [60, 80, 90],
      "Kimya" => [70, 90, 100],
    ],
  ],

  "200" => [
    "Ad" => "Hasan",
    "Soyad" => "Kara",
    "notlar" => [
      "Matematik" => [40, 60, 70],
      "Fizik" => [50, 70, 80],
      "Kimya" => [60, 80, 90],
    ],
  ],
];

// Sınıfın 100 numaralı öğrencisinin bilgilerini ekrana yazdırma
echo $sinif["100"]["Ad"] . "<br>";
echo $sinif["100"]["Soyad"] . "<br>";
echo $sinif["100"]["notlar"]["Matematik"][0] . "<br>";
echo $sinif["100"]["notlar"]["Fizik"][1] . "<br>";
echo $sinif["100"]["notlar"]["Kimya"][2] . "<br>";

// Sınıfın 200 numaralı öğrencisinin kimya dersi notlarının ortalamasını hesaplama
$not1 = $sinif["200"]["notlar"]["Matematik"][0];
$not2 = $sinif["200"]["notlar"]["Fizik"][1];
$not3 = $sinif["200"]["notlar"]["Kimya"][2];

$kimya_ortalama = ($not1 + $not2 + $not3) / 3;

// Kimya dersinin ortalamasını ekrana yazdırma
echo $kimya_ortalama . "<br>";

?>
