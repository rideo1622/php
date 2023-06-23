<?php


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

echo "<br>";
echo "<hr>";

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
