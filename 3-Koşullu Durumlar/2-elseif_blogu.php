<?php

/*
$username = "admin";
$password = "123456";

if ($username != "admin") {
  echo "Kullanıcı adı yanlış";
} elseif ($password != "123456") {
  echo "Şifre yanlış";
} else {
  echo "Giriş başarılı";
}
*/

$saat = 23;

if ($saat < 10) {
  echo "Günaydın";
} elseif ($saat < 19) {
  echo "İyi günler";
} elseif ($saat < 22) {
  echo "İyi akşamlar";
} else {
  echo "İyi geceler";
}

?>
