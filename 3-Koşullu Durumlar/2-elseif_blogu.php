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

echo "<br>"

$username = "admin";
$parola = "1234";

if ($username == "admin" and $parola == "1234"){
echo "Her ikisi de doğru";
    } elseif ($username == "admin" and $parola != "1234"){
    echo "Sadece kullanıcı adı doğru";
    	} elseif ($username != "admin" and $parola == "1234"){
		echo "Sadece parola doğru";
} else {
echo "Her ikisi de yanlış";
}



?>
