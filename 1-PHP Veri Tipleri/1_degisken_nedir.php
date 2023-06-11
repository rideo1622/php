<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Değişken Nedir</title>
</head>
<body>

<?php
$maasAli = 21000;
$maasMehmet = 16000;
$maasVolkan = 24000;

$vergiOrani1 = 0.25;
$vergiOrani2 = 0.35;

echo $maasAli - $maasAli * $vergiOrani1; //Ali maaş
echo "<br>";
echo $maasMehmet - $maasMehmet * $vergiOrani1; //Mehmet Maaş
echo "<br>";
echo $maasVolkan - $maasVolkan * $vergiOrani2;

//Volkan Maaş
?>

</body>
</html>