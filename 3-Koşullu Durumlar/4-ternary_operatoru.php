<?php

$yas = 20;
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
?>
