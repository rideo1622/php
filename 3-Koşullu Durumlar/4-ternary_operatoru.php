<?php

$yas = 18;
$egitim = "Lise";

/*
if ($yas >= 18) {
  if ($egitim == "Lise" or $egitim == "Üniversite") {
    echo "Ehliyet alabilirsiniz.";
  } else {
    echo "Eğitim durumunuz yetersiz.";
  }
} else {
  echo "Yaşınız tutmuyor.";
}
echo "<br>";
*/

$sonuc =
  $yas >= 18
    ? (($egitim == "Lise" or $egitim == "Üniversite")
      ? "Ehliyet alabilirsiniz."
      : "Eğitim durumu yetersiz.")
    : "Yaşınız tutmuyor.";
echo $sonuc;

echo "<br>";


//Sadece yaş kontrolü
$sonuc1 = $yas >= 18 ? "Ehliyet alabilirsiniz" : "Yaşınız Tutmuyor";

echo $sonuc1;
?>