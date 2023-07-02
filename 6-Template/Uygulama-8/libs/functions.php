<?php

function kursEkle(
  &$kurslar,
  string $baslik,
  string $kursAciklama,
  string $resim,
  string $yayinTarihi,
  int $yorumSayisi = 0,
  int $begeniSayisi = 0,
  bool $onay = true
) {
  $yeni_kurs[count($kurslar) + 1] = [
    "baslik" => $baslik,
    "kursAciklama" => $kursAciklama,
    "resim" => $resim,
    "yayinTarihi" => $yayinTarihi,
    "yorumSayisi" => $yorumSayisi,
    "begeniSayisi" => $begeniSayisi,
    "onay" => $onay,
  ];

  $kurslar = array_merge($kurslar, $yeni_kurs);
}

kursEkle(
  $kurslar,
  "yeni kurs 1",
  "yeni kurs 1 açıklanması",
  "1.png",
  "10.10.2023",
  true
);

kursEkle(
  $kurslar,
  "yeni kurs 2",
  "yeni kurs 2 açıklanması",
  "2.png",
  "10.10.2023",
  true
);

function urlDuzenle($baslik)
{
  return str_replace(
    [" ", "."],
    ["-", "-"],
    strtolower($baslik["1"]["baslik"])
  );
}

function kisaAciklama($kursAciklama)
{
  if (strlen($kursAciklama) > 25) {
    return substr($kursAciklama, 0, 25) . "...";
  } else {
    return $kursAciklama;
  }
}
?>
