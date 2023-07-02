<?php
const TITLE = "Popüler Kurslar";

$kategoriler = [
  ["kategoriAd" => "Programlama", "aktif" => false],
  ["kategoriAd" => "Web Geliştirme", "aktif" => false],
  ["kategoriAd" => "Veri Analizi", "aktif" => false],
  ["kategoriAd" => "Ofis Uygulamaları", "aktif" => false],
  ["kategoriAd" => "Mobil Uygulamalar", "aktif" => true],
];

sort($kategoriler);

$kurslar = [
  "1" => [
    "baslik" => "PHP Kursu",
    "kursAciklama" => "Sıfırdan ileri seviye PHP Eğitimi",
    "resim" => "1.png",
    "yayinTarihi" => "01.01.2023",
    "yorumSayisi" => 0,
    "begeniSayisi" => 10,
    "onay" => true,
  ],
  "2" => [
    "baslik" => "Python Kursu",
    "kursAciklama" => "Sıfırdan ileri seviye Python Programlama",
    "resim" => "2.png",
    "yayinTarihi" => "01.01.2023",
    "yorumSayisi" => 10,
    "begeniSayisi" => 0,
    "onay" => true,
  ],
  "3" => [
    "baslik" => "Node.js Kursu",
    "kursAciklama" => "Sıfırdan ileri seviye Node.js Geliştirme",
    "resim" => "3.png",
    "yayinTarihi" => "01.01.2023",
    "yorumSayisi" => 10,
    "begeniSayisi" => 20,
    "onay" => false,
  ],
  "4" => [
    "baslik" => "Dijango Kursu",
    "kursAciklama" => "Sıfırdan ileri seviye Dijango Geliştirme",
    "resim" => "1.png",
    "yayinTarihi" => "01.01.2023",
    "yorumSayisi" => 0,
    "begeniSayisi" => 5,
    "onay" => true,
  ],
];
?>
