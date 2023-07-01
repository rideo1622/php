<?php

function intro()
{
  $parametreSayisi = func_num_args();
  echo $parametreSayisi;
  if ($parametreSayisi == 0) {
    echo "Parametre yok";
  } else {
    $parametreler = func_get_args();

    foreach ($parametreler as $parametre) {
      echo $parametre . "<br>";
    }
  }
}

intro();
intro("Ali", "Yılmaz", "Feyza");

?>
