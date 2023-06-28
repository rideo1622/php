<?php

//global scope

$x = 5;
echo $x . "<br>";

function test()
{
  //local scope
  $x = 10;
  echo $x . "<br>";
}

test();

function test2()
{
  $GLOBALS["x"] = 15;
}

test2();
echo $x . "<br>";

?>
