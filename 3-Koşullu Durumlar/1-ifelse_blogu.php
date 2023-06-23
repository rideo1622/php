<?php

$username = "admin";
$password = "123456";

// $kosul = 3 > 4; // doğru olmayan (false) bir koşul
// $kosul = 5 > 4; // doğru olan (true) bir koşul
// $isLoggedIN = ($username == "admin" and $password == "12345"); //username ve password doğruysa koşul doğru olur

/* 
  if ($isLoggedIN) {
  // koşul doğruysa aşağıdakiler yazdırılır, yanlışsa yazdırılmaz
  echo "Merhaba Github" . "<br>";
  echo "Merhaba Github" . "<br>";
  echo "Merhaba Github" . "<br>";
}
*/

if ($username == "admin") {
  if ($password == "123456") {
    echo "Şifre doğru";
  } else {
    "Şifre yanlış";
  }
} else {
  echo "Kullanıcı adı yanlış";
}

#soru1
#soru2
#soru3
#else

?>
